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
    public function adminHome()
    {
        $totalUser=User::count();
        $totalRule=Rule::count();
        $totalGejala=Gejala::count();
        $totalPernyataan=Pernyataan::count();
        return view('dashboard',compact('totalUser','totalRule','totalGejala','totalPernyataan'));
        // return view('dashboard');
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
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHomeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    // public function show(Home $home)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHomeRequest $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }
}