<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('v1/posts',\App\Http\Controllers\Api\V1\PostController::class)->only(['show','index','store']);
Route::apiResource('v1/sesion',\App\Http\Controllers\Api\V1\SesionController::class)->only('validation');
