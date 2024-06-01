<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\PernyataanController;
use App\Http\Controllers\RuleController;
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

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerSave'])->name('register.save');
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginAction'])->name('login.action');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');


Route::middleware(['auth','user-access:user'])->group(function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/user/profile', [AdminController::class, 'profileuser'])->name('user/profile');

    Route::get('/user/konsultasi', [KonsultasiController::class, 'index'])->name('user/konsultasi');
    Route::post('/user/konsultasi/store', [KonsultasiController::class,'store'])->name('user/konsultasi/store');
    Route::get('user/konsultasi/result/{id}', [KonsultasiController::class, 'result'])->name('user/konsultasi/result');
    // ('/user/konsultasi/store', [KonsultasiController::class, 'store'])->name('store');

    Route::get('/user/history', [HomeController::class, 'history'])->name('user/history');
    Route::get('/user/history/show/{id}', [HomeController::class, 'show'])->name('user/history/show');
});

Route::middleware(['auth','user-access:admin'])->group(function(){
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin/home');
    Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');

    Route::get('/admin/gejala',[GejalaController::class,'index'])->name('admin/gejala');
    Route::get('/admin/gejala/create',[GejalaController::class,'create'])->name('admin/gejala/create');
    Route::post('/admin/gejala/store',[GejalaController::class,'store'])->name('admin/gejala/store');

    Route::get('/admin/pernyataan',[PernyataanController::class,'index'])->name('admin/pernyataan');
    Route::get('/admin/pernyataan/create',[PernyataanController::class,'create'])->name('admin/pernyataan/create');
    Route::post('/admin/pernyataan/store',[PernyataanController::class,'store'])->name('admin/pernyataan/store');

    Route::get('/admin/rule',[RuleController::class,'index'])->name('admin/rule');
    Route::get('/admin/rule/create',[RuleController::class,'create'])->name('admin/rule/create');
    Route::post('/admin/rule/store',[RuleController::class,'store'])->name('admin/rule/store');

});