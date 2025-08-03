<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AIController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ai-chat', [AIController::class, 'showForm'])->name('ai.form');
Route::post('/ai-chat', [AIController::class, 'handlePrompt'])->name('ai.handle');
