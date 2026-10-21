<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthorController;
use App\Http\Controllers\API\BookTypeController;
use App\Http\Controllers\API\BookController;
use App\Http\Controllers\API\BookAuthorController;

// Author API
Route::apiResource('authors', AuthorController::class);

// Book Type API
Route::apiResource('book-types', BookTypeController::class);

// Book API
Route::apiResource('books', BookController::class);

// Book Author API
Route::apiResource('book-authors', BookAuthorController::class);