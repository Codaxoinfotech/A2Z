<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\ServicemanController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\UserDashboard;
use App\Http\Controllers\ServiceManDashboardController;

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

Route::get('/admin',[AdminController::class,'index'])->name('admin');
Route::get('/logout',[AdminController::class,'logout'])->name('logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('category', CategoryController::class);
Route::resource('subCategory', SubCategoryController::class);
Route::resource('packages', PackagesController::class);
Route::resource('services', ServiceController::class);
Route::resource('serviceman', ServicemanController::class);

Route::resource('services', ServiceController::class);


Route::get('delete-record', [CommonController::class, 'delete'])->name('deleteRecord');
Route::get('getSelect2Record', [CommonController::class, 'getSelect2Record']);
Route::get('select-record', [CommonController::class, 'select_record']);





Route::get('/users', '\App\Http\Controllers\usersController@show');

Route::get('/getUsers', '\App\Http\Controllers\usersController@getUsers')->name('users.data');

Route::get('/user/blobked/{id}', '\App\Http\Controllers\usersController@blocked');

Route::get('/user/unblobked/{id}', '\App\Http\Controllers\usersController@unblobked');


//website

Route::get('/',[WebsiteController::class,'index'])->name('index');
Route::get('/contact-us',[WebsiteController::class,'contactus'])->name('contactus');
Route::get('/about-us',[WebsiteController::class,'aboutus'])->name('aboutus');
Route::get('/user-login',[WebsiteController::class,'userLogin'])->name('userLogin');
Route::post('/user-login-submit',[WebsiteController::class,'userLoginSubmit'])->name('userLoginSubmit');
Route::get('/user-otp-form',[WebsiteController::class,'userOtpForm']);
Route::post('/user-otp',[WebsiteController::class,'userOtp'])->name('userOtp');
Route::post('/user-otp-submit',[WebsiteController::class,'userOtpSubmit'])->name('userOtpSubmit');
Route::get('/user-home',[WebsiteController::class,'userHome']);


//User Dashboard
Route::get('/user-dashboard',[UserDashboard::class,'userDashboard'])->name('userDashboard');
Route::get('/user-history',[UserDashboard::class,'history'])->name('history');
Route::get('/user-profile',[UserDashboard::class,'profile'])->name('profile');
Route::get('/add-service',[UserDashboard::class,'addService'])->name('addService');
Route::post('add-service',[UserDashboard::class,'userServiceSubmit'])->name('userServiceSubmit');
Route::get('/user-logout',[UserDashboard::class,'userLogout'])->name('userLogout');
Route::post('user-profile-update', [UserDashboard::class, 'user_profile_update'])->name('user-profile-update');

//User Dashboard
Route::get('/service-dashboard',[ServiceManDashboardController::class,'index'])->name('serviceDashboarad');
Route::get('/service-details',[ServiceManDashboardController::class,'serviceDetails'])->name('serviceDetails');
Route::get('/profile',[ServiceManDashboardController::class,'profile'])->name('serviceManProfile');
Route::get('/service-man-logout',[ServiceManDashboardController::class,'logout'])->name('serviceManLogout');
