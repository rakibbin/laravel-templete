<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TravelaController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BackendController;


// Route::middleware('auth:sanctum')->prefix('admin')->group(function(){
//     Route::resource('users',UserController::class)->names('users');
// });
Route::middleware('check_user_token')->prefix('admin')->group(function(){
    Route::resource('users',UserController::class)->names('users');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('login',[BackendController::class,'index']);
Route::post('login',[LoginController::class,'login']);
Route::post('logout',[LoginController::class,'logout']);