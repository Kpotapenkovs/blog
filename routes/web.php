<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContentController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/blogs', [BlogController::class, 'index']);

Route::get('/content', [ContentController::class, 'index']);


    Route::post('/blogs', [BlogController::class, 'store']);

    Route::post('/blogs/contents/{blogs_id}', [ContentController::class, 'store']);


Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit']);

Route::get('/blogs/contents/{contents}/edit', [ContentController::class, 'edit']);


    Route::delete('/blogs/{blog}', [BlogController::class, 'destroy']);

    Route::delete('/blogs/contents/{contents}', [ContentController::class, 'destroy']);


Route::get('/blogs/create', [BlogController::class, 'create']);


    Route::get('/blogs/{blog}', [BlogController::class, 'show']);

    Route::get('/blogs/contents/{contents}', [ContentController::class, 'show']);


Route::put('/blogs/{blog}', [BlogController::class, 'update']);

Route::put('/blogs/contents/{contents}', [ContentController::class, 'update']);

