<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Konsultasi;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Gejala;
use App\Models\Pernyataan;
use App\Models\Rule;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function profilepage(){
    return view('admin.profile');
   }

   public function profileuser(){
    return view('user.profile');
   }
   public function notice()
   {
       return view('verify');
   }

   public function verify(EmailVerificationRequest $request)
   {
       $request->fulfill();

       if(auth()->user()->type=='admin') {
           return redirect()->route('admin/home')->with('status', 'Email berhasil diverifikasi.');
       } else {
           return redirect()->route('home')->with('status', 'Email berhasil diverifikasi.');
       }
   }

   public function resend(Request $request)
   {
       $request->user()->sendEmailVerificationNotification();

       return back()->with('status', 'Tautan verifikasi baru telah dikirim ke email Anda.');
   }

   public function adminHome()
   {
       $totalUser=User::count();
       $totalRule=Rule::count();
       $totalGejala=Gejala::count();
       $totalPernyataan=Pernyataan::count();
       return view('dashboard',compact('totalUser','totalRule','totalGejala','totalPernyataan'));
       // return view('dashboard');
   }

   public function historyAdmin(){
    $historyAdmin = User::all();
    // dd($history);
    return view('Admin.history.index', compact('historyAdmin'));
}
public function detailHistory($nik){
    $user = User::where('nik', $nik)->firstOrFail();
    $historyadmin = Konsultasi::where('user_id', $user->id)->get();
    return view('admin.history.detail-history', compact('historyadmin'));
}



}
