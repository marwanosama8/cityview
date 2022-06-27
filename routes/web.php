<?php

use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('facilities',[HomeController::class,'facilities'])->name('facilities');
Route::get('rooms',[HomeController::class,'rooms'])->name('rooms');
Route::get('gallery',[HomeController::class,'gallery'])->name('gallery');
Route::get('contact-us',[HomeController::class,'contactUs'])->name('contact.us');
Route::get('book',[HomeController::class,'book'])->name('book');
Route::get('details',[HomeController::class,'register'])->name('register');
Route::get('register',[HomeController::class,'sendRegister'])->name('send.register');
Route::get('policy',[HomeController::class,'policy'])->name('policy');
Route::get('terms',[HomeController::class,'terms'])->name('terms');


