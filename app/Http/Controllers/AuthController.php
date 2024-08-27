<?php

namespace App\Http\Controllers;

// use App\Models\Auth;
use App\Http\Requests\StoreAuthRequest;
use App\Http\Requests\UpdateAuthRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\ValidationException;
// use Dotenv\Exception\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function __construct()
   {
        $this->middleware('guest')->except('logout');
   }
     public function register(){
        return view('auth/register');
    }

      public function registerSave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nik' => 'required|digits:16',
            'nama_lengkap' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $validator->after(function ($validator) use ($request) {
            $birthDate = Carbon::parse($request->input('tanggal_lahir'));
            $age = $birthDate->age;

            if ($age < 15 || $age > 100) {
                $validator->errors()->add('tanggal_lahir', 'Usia harus lebih dari 15 tahun');
            }

            if (User::where('nik', $request->input('nik'))->exists()) {
                $validator->errors()->add('nik', 'NIK sudah terdaftar.');
            }
            if (User::where('email', $request->input('email'))->exists()) {
                $validator->errors()->add('email', 'Email sudah terdaftar.');
            }

        });
        if ($validator->fails()) {
           if ($validator->errors()->has('email')) {
                $request->merge(['email' => '']);
            }
            if ($validator->errors()->has('nik')) {
                $request->merge(['nik' => '']);
            }
            if ($validator->errors()->has('tanggal_lahir')) {
                $request->merge(['tanggal_lahir' => '']);
            }

            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        $user = User::create([
            'nik' => $request->nik,
            'nama_lengkap' => $request->nama_lengkap,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => "0"
        ]);

        event(new Registered($user));
        auth()->login($user);

        return redirect()->route('verification.notice')->with('sukses', 'Akun berhasil dibuat, silahkan verifikasi email Anda');
    }
    public function login(){
        return view('auth/login');
    }
    public function loginAction(Request $request){
        Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required'
        ])->validate();
        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }
        $request->session()->regenerate();

        if(auth()->user()->type=='admin'){
            return redirect()->route('admin/home');
        }else{
            return redirect()->route('home');
        }
        // return redirect()->route('home');
    }

    public function logout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
