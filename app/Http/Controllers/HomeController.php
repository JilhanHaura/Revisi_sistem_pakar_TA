<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Home;
use App\Http\Requests\StoreHomeRequest;
use App\Http\Requests\UpdateHomeRequest;
// use App\Models\Auth;
use App\Models\Konsultasi;
use App\Models\Pernyataan;
use App\Models\Rule;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('user.about.index');
    }
    public function kind()
    {
        return view('user.jenisPenyakit.index');
    }
    public function history(){
        $userId = Auth::id();
        $history = Konsultasi::where('user_id', $userId)->get();
        // dd($history);
        return view('user.history.index', compact('history'));
    }
    public function show($id)
    {
        $konsultasi = Konsultasi::findOrFail($id);
        $result = session('result');
        dd($result);
        return view('user/history/show', compact('konsultasi', 'result'));
    }   /**
     * Show the form for creating a new resource.
     */

}
