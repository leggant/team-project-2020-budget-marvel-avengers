<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
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

//route to home page 
Route::get('/',[pagesController::class ,'homepage']);
//route to home page 
Route::get('/home',[pagesController::class ,'homepage']);
//route to profile page
Route::get('/profile',[pagesController::class ,'profile']);