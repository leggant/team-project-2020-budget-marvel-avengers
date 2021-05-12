<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\EvidenceUploadController;
use App\Http\Controllers\CohortController;

Route::get('/', [PagesController::class, 'homepage'])->name('pages.index');
Route::get('/students',[PagesController::class ,'students'])->name('pages.students');
Route::resource('uploads', EvidenceUploadController::class);
Route::resource('notes', NotesController::class);
Route::resource('cohorts', CohortController::class);