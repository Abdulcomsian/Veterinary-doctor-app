<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AppointmentController, HomeController, SocialiteController, UserController , PetController};
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('google-login' , [SocialiteController::class , 'googleLogin'])->name('googleLogin');
Route::get('auth/google/callback' , [SocialiteController::class , 'googleCallback'])->name('googleCallback');
Route::get('facebook-login' , [SocialiteController::class , 'facebookLogin'])->name('facebookLogin');
Route::get('auth/facebook/callback' , [SocialiteController::class , 'facebookCallback'])->name('facebookCallback');

Route::group(['middleware' => ['prevent.back.header' ,'auth']] , function(){
    Route::get('/', [UserController::class, 'getProfilePage']);
    Route::get('profile' , [UserController::class, 'getProfilePage'])->name('getProfilePage');
    Route::get('logout' , [UserController::class , 'logout'])->name('logout');
    Route::post('add-pet' , [PetController::class , 'addPet'])->name('addPet');
    Route::get('dashboard' , [HomeController::class , 'dashboard'])->name('dashboard');
    Route::get('appointments' , [AppointmentController::class , 'getAppointmentPage'])->name('getAppointments');
});