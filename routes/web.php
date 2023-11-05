<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/index',[\App\Http\Controllers\PostController::class,'index']);
Route::get('/posts',[\App\Http\Controllers\PostController::class,'posts']);
Route::get('/images',[\App\Http\Controllers\ImageController::class,'images']);
Route::get('/', function () {
    return view('welcome');
});
