<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;

Route::get('/', [PagesController::class, 'homepage'])->name('pages.index');
Route::get('/cohortAdmin', [PagesController::class , 'cohortpage'])->name('pages.cohort');
Route::get('/evidence-upload', [PagesController::class, 'EvidencePage'])->name('pages.evidence');
Route::get('/notes',[PagesController::class ,'notes'])->name('pages.notes');
Route::resource('students', StudentController::class);