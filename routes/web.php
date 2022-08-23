<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/read', [PostController::class, 'read']);
Route::get('/posts/all', [PostController::class, 'all']);

Route::get('/', function () {
    return view('welcome');
});
