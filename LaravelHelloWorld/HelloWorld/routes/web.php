<?php

use App\Http\Controllers\ShowController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('test');
});

Route::get('/test', [ShowController::class, 'index']);
Route::post('/show', [ShowController::class, 'fetch'])->name('show.fetch');
