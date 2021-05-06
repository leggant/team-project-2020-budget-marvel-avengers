<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'homepage'])->name('pages.index');
Route::get('/cohortAdmin', [PagesController::class , 'cohortpage'])->name('pages.cohort');
Route::get('/evidence-upload', [PagesController::class, 'EvidencePage'])->name('pages.evidence');
Route::resource('/notes',[NotesController::class ,'notes'])->name('pages.notes');
Route::get('/students',[PagesController::class ,'students'])->name('pages.students');