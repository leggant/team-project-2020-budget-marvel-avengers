<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EvidenceUploadController;

Route::get('/', [PagesController::class, 'homepage'])->name('pages.index');
Route::get('/notes',[PagesController::class ,'notes'])->name('pages.notes');
Route::resource('students', StudentController::class);
Route::resource('uploads', EvidenceUploadController::class);
