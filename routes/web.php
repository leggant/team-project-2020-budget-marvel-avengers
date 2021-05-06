<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\EvidenceUploadController;

Route::get('/', [PagesController::class, 'homepage'])->name('pages.index');
Route::get('/cohortAdmin', [PagesController::class , 'cohortpage'])->name('pages.cohort');
Route::get('/notes',[PagesController::class ,'notes'])->name('pages.notes');
Route::get('/students',[PagesController::class ,'students'])->name('pages.students');
Route::resource('uploads', EvidenceUploadController::class)->names([
    'index' => 'pages.evidence',
    //'store' => 'pages.evidence.create'
]);