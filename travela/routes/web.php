<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\BlogeController;
use App\Http\Controllers\ConatactController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\TravelaController;
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

Route::resource('rkcontact',ConatactController::class)->names('rkcontact');
Route::resource('rkbloge',BlogeController::class)->names('rkbloge');
Route::resource('mail',SubscribeController::class)->names('mail');
Route::resource('message',MessageController::class)->names('message');

Route::resource('packagerk',PackageController::class)->names('pack');
Route::resource('aboutrk',AboutController::class)->names('abt');
Route::resource('service',ServiceController::class)->names('ser');
Route::resource('navbar',NavbarController::class)->names('nav');



Route::get('/contact',[TravelaController::class,'contact'])->name('contact');
Route::get('/subscribe',[TravelaController::class,'subscribe'])->name('subscribe');
Route::get('/testimonial',[TravelaController::class,'testimonial'])->name('testimonial');
Route::get('/blog',[TravelaController::class,'blog'])->name('blog');
Route::get('/guide',[TravelaController::class,'guide'])->name('guide');
Route::get('/gallery',[TravelaController::class,'gallery'])->name('gallery');
Route::get('/booking',[TravelaController::class,'booking'])->name('booking');
Route::get('/package',[TravelaController::class,'package'])->name('package');
Route::get('/tour',[TravelaController::class,'tour'])->name('tour');
Route::get('/destination',[TravelaController::class,'destination'])->name('destination');
Route::get('/services',[TravelaController::class,'service'])->name('service');
Route::get('/about',[TravelaController::class,'about'])->name('about');
Route::get('/',[TravelaController::class,'index'])->name('home');

Route::get('adminh',[BackendController::class,'body']);
Route::get('adminlog',[BackendController::class,'index']);