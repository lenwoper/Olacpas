<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dbcontroller;


/*

|--------------------------------------------------------------------------
web routes with middleware 
|--------------------------------------------------------------------------

*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('throw',[dbcontroller::class,'SighUp']);
Route::view('sighup', 'Form');
Route::get('loged',[dbcontroller::class,'Login']);
Route::view('login', 'Login');
Route::view('about', 'About');
// password reset update
Route::get('reset', [dbcontroller::class,'UpdatePassword']);


