<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/cohortAdmin', [PagesController::class , 'cohortpage']);
Route::get('/', [PagesController::class, 'homepage'])->name('pages.index');
Route::get('/evidence-upload', [PagesController::class, 'EvidencePage'])->name('pages.evidence');
Route::get('/home',[PagesController::class ,'homepage']);
Route::get('/students',[PagesController::class ,'students']);
Route::get('/evidence',[PagesController::class ,'evidence']);
Route::get('/notes',[PagesController::class ,'notes']);
Route::get('/about',[PagesController::class ,'About']);
