<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\EvidenceUploadController;
use App\Http\Controllers\StudentProfile;

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
    return view('pages.index');
});

Auth::routes();
//Route::get('/', [PagesController::class, 'homepage'])->name('pages.index');
Route::resource('students', StudentController::class);
Route::resource('uploads', EvidenceUploadController::class);
Route::resource('notes', NotesController::class);
Route::resource('student', StudentProfile::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
