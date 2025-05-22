<?php

use App\Http\Controllers\InfoController;
use App\Http\Middleware\ValidUser;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MeetingController;

Route::get('/', function () {
    return view('welcome');
});


Route::view('register','register');
Route::post('registersave',[InfoController::class,'register']);

Route::view('logins','login');
Route::get('login',[InfoController::class,'login']);

Route::view('dashboard','dashboard')->middleware(ValidUser::class);
Route::get('logout',[InfoController::class,'logout']);

Route::view('layout','layout');

//emp Data
Route::get('views',[InfoController::class,'viewData']);
Route::view('empregister','empregister');
Route::post('empregisters',[InfoController::class,'empregister']);
Route::get('show/{id}',[InfoController::class,'show']);
Route::post('update',[InfoController::class,'update']);

Route::get('delete/{id}',[InfoController::class,'delete']);


// view calender

Route::middleware(['auth'])->group(function () {
    Route::get('/meetings', [MeetingController::class, 'index']);
});
