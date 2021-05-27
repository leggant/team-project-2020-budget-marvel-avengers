<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\EvidenceUploadController;
use App\Http\Controllers\StudentProfile;
use App\Http\Controllers\CohortController;

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
    return view('auth.login');
});
Auth::routes();
Route::resource('students', StudentController::class);
Route::resource('uploads', EvidenceUploadController::class);
Route::resource('notes', NotesController::class);
Route::resource('student', StudentProfile::class);
Route::resource('cohorts', CohortController::class);
Route::get('/', [PagesController::class, 'index'])->middleware('auth');
Route::get('/user/register', [PagesController::class, 'register'])->middleware('auth');