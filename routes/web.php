<?php

use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/blogs', [BlogController::class, 'index']);


    Route::post('/blogs', [BlogController::class, 'store']);


Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit']);


    Route::delete('/blogs/{blog}', [BlogController::class, 'destroy']);


Route::get('/blogs/create', [BlogController::class, 'create']);


    Route::get('/blogs/{blog}', [BlogController::class, 'show']);


Route::put('/blogs/{blog}', [BlogController::class, 'update']);
