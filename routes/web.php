<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\PernyataanController;
use App\Http\Controllers\RuleController;
use App\Models\Admin;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::controller(AuthController::class)->group(function(){
//     Route::get('register'.'register')->name('register');
// });
Route::get('/email/needVerification', [AdminController::class, 'notice'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [AdminController::class, 'verify'])->middleware('auth','signed')->name('verification.verify');
Route::post('/email/resend', [AdminController::class, 'resend'])->middleware(['auth', 'throttle:6,1'])->name('verification.resend');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerSave'])->name('register.save');
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginAction'])->name('login.action');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');


Route::middleware(['auth', 'verified'])->group(function() {
Route::middleware(['auth','user-access:user'])->group(function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/user/about', [HomeController::class, 'about'])->name('user/about');
    Route::get('/user/jenispenyakit', [HomeController::class, 'kind'])->name('user/jenispenyakit');
    Route::get('/user/profile', [AdminController::class, 'profileuser'])->name('user/profile');

    Route::get('/user/konsultasi', [KonsultasiController::class, 'index'])->name('user/konsultasi');
    Route::post('/user/konsultasi/store', [KonsultasiController::class,'store'])->name('user/konsultasi/store');
    Route::get('user/konsultasi/note/{id}', [KonsultasiController::class, 'result'])->name('user/konsultasi/note');
    // Route::get('user/konsultasi/result/{id}', [KonsultasiController::class, 'result'])->name('user/konsultasi/result');
    // ('/user/konsultasi/store', [KonsultasiController::class, 'store'])->name('store');

    Route::get('/user/history', [HomeController::class, 'history'])->name('user/history');
    Route::get('/user/history/show/{id}', [HomeController::class, 'show'])->name('user/history/show');
});

Route::middleware(['auth','user-access:admin'])->group(function(){
    Route::get('/admin/home', [AdminController::class, 'adminHome'])->name('admin/home');
    Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');

    Route::get('/admin/gejala',[GejalaController::class,'index'])->name('admin/gejala');
    Route::get('/admin/gejala/create',[GejalaController::class,'create'])->name('admin/gejala/create');
    Route::post('/admin/gejala/store',[GejalaController::class,'store'])->name('admin/gejala/store');
    Route::delete('/admin/gejala/destroy/{kode_gejala}', [GejalaController::class, 'destroy'])->name('admin/gejala/destroy');
    // Route::get('/admin/gejala/edit/{gejala}', [GejalaController::class, 'edit'])->name('admin/gejala/edit');
    Route::post('/admin/gejala/update/{gejala}', [GejalaController::class, 'update'])->name('admin/gejala/update');

    // Route::post('/gejala/{data_gejala_admin}/destroy', [DataGejalaAdminController::class, 'destroy'])->name('gejala.destroy');
    Route::get('/admin/pernyataan',[PernyataanController::class,'index'])->name('admin/pernyataan');
    Route::get('/admin/pernyataan/create',[PernyataanController::class,'create'])->name('admin/pernyataan/create');
    Route::post('/admin/pernyataan/store',[PernyataanController::class,'store'])->name('admin/pernyataan/store');
    // Route::get('/admin/pernyataan/edit/{pernyataan}', [PernyataanController::class, 'edit'])->name('admin/pernyataan/edit');
    Route::post('/admin/pernyataan/update/{pernyataan}', [PernyataanController::class, 'update'])->name('admin/pernyataan/update');
    Route::delete('/admin/pernyataan/destroy/{kode_pernyataan}', [PernyataanController::class, 'destroy'])->name('admin.pernyataan.destroy');

    Route::get('/admin/rule',[RuleController::class,'index'])->name('admin/rule');
    Route::get('/admin/rule/create',[RuleController::class,'create'])->name('admin/rule/create');
    Route::post('/admin/rule/store',[RuleController::class,'store'])->name('admin/rule/store');
    Route::delete('/admin/rule/destroy/{rule}', [RuleController::class, 'destroy'])->name('admin.rule.destroy');
    // Route::get('/admin/rule/edit/{rule}', [RuleController::class, 'edit'])->name('admin/rule/edit');
    Route::post('/admin/rule/update/{rule}', [RuleController::class, 'update'])->name('admin/rule/update');

    Route::get('/admin/history', [AdminController::class, 'historyAdmin'])->name('admin.history');
    Route::get('/admin/history/detail-history/{nik}', [AdminController::class, 'detailHistory'])->name('admin.history.detail-history');


});
});
