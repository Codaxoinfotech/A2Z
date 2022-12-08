<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WebController;

Route::get('/', 'WebController@index')->name('index');

//Admin login
Route::get('/admin', 'AdminController@login')->name('admin.login');
Route::post('/admin', 'AdminController@adminLogin')->name('adminLogin');

//Emp Login

Route::get('/emp', 'EmployeeController@login')->name('emp.login');
Route::post('/emp', 'EmployeeController@empLogin')->name('empLogin');


//User Login
Route::get('/login', 'WebController@userLogin')->name('login');
Route::post('/login', 'WebController@userLoginPost')->name('userLoginPost');
Route::post('/otp', 'WebController@userLoginOtp')->name('userLoginOtp');
Route::post('/otp-verify', 'WebController@otpVerify')->name('otpVerify');


//Common Routes

Route::get('get-select','CommonController@getSelect');

//user Dashboard
Route::group(['middleware'=>'auth','prefix'=>'user'],function(){
    Route::get('/home', 'UserController@index')->name('user.index');
    Route::get('/apply-form', 'UserController@apply')->name('user.applyForm');
    Route::get('/payment/{id}', 'UserController@payment')->name('user.payment');
    Route::get('/pay/{id}', 'UserController@pay')->name('user.pay');
    Route::get('/apply-service', 'UserController@apply')->name('user.apply');
    Route::post('/apply-service', 'UserController@applyPost')->name('user.apply.post');
    Route::get('/logout', 'UserController@logout')->name('user.logout');

    Route::get('/initiate','PaytmController@initiate')->name('user.initiate.payment');
    Route::post('/payment','PaytmController@pay')->name('user.make.payment');
    Route::post('/payment/status', 'PaytmController@paymentCallback')->name('user.status');

    Route::get('service/{id}', 'UserController@serviceShow')->name('user.service.show');
});


//Admin Dashboard
Route::group(['middleware'=>'auth:admin','prefix'=>'admin'],function(){
    Route::get('home', 'AdminController@index')->name('admin.index'); 
    Route::get('show/{id}', 'AdminController@ServiceView')->name('admin.service.view'); 
    Route::resource('emp', 'EmployeeController'); 
    Route::get('assign-to-emp-service', 'AdminController@AssignEmpService')->name('admin.assign_to_to_service'); 
    Route::resource('assign', 'AssignServiceController'); 
    Route::get('item/save', 'ItemsController@store')->name('admin.additem');
    Route::get('item/index', 'ItemsController@index')->name('admin.fetchitem');
    Route::get('item-delete/{id}', 'ItemsController@destroy')->name('admin.item.destroy'); 
    Route::get('fetch-sub-category','SubCategoryController@fetech_sub_category')->name('fetech_sub_category');

    //add-package
    Route::resource('package', 'PackageController'); 

});


//Emp Dashboard
Route::group(['middleware'=>'auth:emp','prefix'=>'emp'],function(){
     Route::get('home', 'EmployeeController@home')->name('emp.home');
     Route::get('service/{id}', 'EmployeeController@serviceShow')->name('emp.service.show');
     Route::get('on-process/{id}', 'EmployeeController@onProcess')->name('emp.on.process');
     Route::post('complete', 'EmployeeController@serviceComplete')->name('emp.service.complete');
     Route::get('history', 'EmployeeController@history')->name('emp.history'); 
     Route::get('item/save', 'ItemsController@store')->name('emp.additem');
     Route::get('item/index', 'ItemsController@index')->name('emp.fetchitem');
     Route::get('item-delete/{id}', 'ItemsController@destroy')->name('emp.item.destroy'); 
});



