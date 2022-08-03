<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// frontend ko route
Route::get('/', [SiteController::class, 'getHome'])->name('getHome');
Route::get('/about', [SiteController::class, 'aboutdekhaunifunction'])->name('getAbout');
Route::get('/service', [SiteController::class, 'getService'])->name('getService');
Route::get('/contact', [SiteController::class, 'getContact'])->name('getContact');
Route::post('/contact/sendmessage', [SiteController::class, 'postSendMessage'])->name('postSendMessage');

// login, register
Auth::routes();

// dahboard ko route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// About manage garna ko lagi route haru
Route::get('/admin/about/manage', [HomeController::class, 'getAboutManage'])->name('getAboutManage')->middleware('auth');

// Service manage garna ko lagi route haru
Route::get('/admin/service/manage', [HomeController::class, 'getServiceManage'])->name('getServiceManage');

// Class manage garna ko lagi route haru
Route::get('/admin/class/manage', [HomeController::class, 'getClassManage'])->name('getClassManage');

// Contact manage garna ko lagi route haru
Route::get('/admin/contact/manage', [HomeController::class, 'getContactManage'])->name('getContactManage');

