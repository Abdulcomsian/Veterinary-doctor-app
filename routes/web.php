<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
        AppointmentController, 
        HomeController, 
        SocialiteController, 
        UserController, 
        ScheduleController,
        PetController};
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


Route::get('google-login' , [SocialiteController::class , 'googleLogin'])->name('googleLogin');
Route::get('auth/google/callback' , [SocialiteController::class , 'googleCallback'])->name('googleCallback');
Route::get('facebook-login' , [SocialiteController::class , 'facebookLogin'])->name('facebookLogin');
Route::get('auth/facebook/callback' , [SocialiteController::class , 'facebookCallback'])->name('facebookCallback');

Route::group(['middleware' => ['prevent.back.header' , 'authenticate.owner']] , function(){ 
    Route::get('profile' , [UserController::class, 'getProfilePage'])->name('getProfilePage');
    Route::post('add-pet' , [PetController::class , 'addPet'])->name('addPet');
    Route::post('get-appointments' , [AppointmentController::class , 'getAppointment'])->name('getAppointments');
});

Route::group(['middleware' => ['prevent.back.header' ,'authenticate.admin']] , function(){
    Route::get('/', [UserController::class, 'getProfilePage']);
    Route::get('/home', [UserController::class, 'getProfilePage'])->name('home');
    Route::get('dashboard' , [HomeController::class , 'dashboard'])->name('dashboard');
   
});

Route::get('logout' , [UserController::class , 'logout'])->name('logout');
Route::get('schedule' , [ScheduleController::class , 'createSchedulePage'])->name('createSchedulePage');