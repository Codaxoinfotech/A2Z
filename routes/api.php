<?php

use App\Http\Controllers\api\CategoryController;
use App\Http\Controllers\api\CommonController;
use App\Http\Controllers\api\HomeController;
use App\Http\Controllers\api\ServiceController;
use App\Http\Controllers\api\SubCategoryController;
use App\Http\Controllers\api\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::post('login', [UsersController::class, 'login']);

Route::post('sendOtp', [CommonController::class, 'sendOtp']);

Route::get('otpVerify', [CommonController::class, 'otpVerify']);

Route::get('home', [HomeController::class, 'index']);

Route::get('category', [CategoryController::class, 'index']);

Route::get('subCategory', [SubCategoryController::class, 'index']);

Route::get('services', [ServiceController::class, 'index']);



Route::post('request_services', [ServiceController::class, 'request_services']);



