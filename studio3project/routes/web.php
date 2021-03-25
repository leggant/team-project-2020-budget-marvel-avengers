<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'homepage'])->name('pages.index');
Route::get('/evidence-upload', [PagesController::class, 'EvidencePage'])->name('pages.evidence');
//route to home page 
Route::get('/home',[PagesController::class ,'homepage']);

Route::get('/students',[PagesController::class ,'students']);

Route::get('/evidence',[PagesController::class ,'evidence']);

Route::get('/notes',[PagesController::class ,'notes']);


Route::get('/about',[PagesController::class ,'About']);
