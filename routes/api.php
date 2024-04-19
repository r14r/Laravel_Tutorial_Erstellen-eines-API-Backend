<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/post',         [PostController::class, 'index']);
Route::post('/post',        [PostController::class, 'store']);
Route::delete('/post/{id}', [PostController::class, 'destroy']);
