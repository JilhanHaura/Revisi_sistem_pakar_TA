<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
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

}