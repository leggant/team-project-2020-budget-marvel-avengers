<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'homepage'])->name('pages.index');
Route::get('/cohortAdmin', [PagesController::class , 'cohortpage']);
Route::get('/evidence-upload', [PagesController::class, 'EvidencePage'])->name('pages.evidence');
Route::get('/notes',[PagesController::class ,'notes']);
Route::get('/students',[PagesController::class ,'students'])->name('pages.students');

 