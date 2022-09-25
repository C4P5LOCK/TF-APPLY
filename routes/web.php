<?php

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

Route::get('/', function () {
    return view('welcome');
});




Auth::routes(['verify' =>true]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

//APPLICANT ROUTES
Route::group(['middleware' => 'verified'],function(){
    Route::resource('/applicant',App\Http\Controllers\ApplicantController::class);
    Route::resource('/profile',App\Http\Controllers\ApplicantProfileController::class);
    Route::resource('/form',App\Http\Controllers\ApplicantFormController::class);
    //Route::resource('/uploads',App\Http\Controllers\UploadsController::class);
    //Route::get('/layouts/applicantdash',App\Http\Controllers\ApplicantDashboardController::class);
   
});


//ADMIN ROUTES
Route::group(['middleware' => ['verified','admin']],function(){
    Route::resource('/admin',App\Http\Controllers\AdminController::class);
    Route::resource('/users',App\Http\Controllers\AdminUsersController::class);

});

Route::get('/try', [App\Http\Controllers\ApplicantProfileController::class, 'try']);
Route::resource('/uploads',App\Http\Controllers\UploadsController::class);