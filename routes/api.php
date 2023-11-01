<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/all-product', [ProductController::class, 'productAll']);
Route::get('/kategori/{id_kategori}', [ProductController::class, 'byKategori']);
Route::get('/menu/{id_menu}', [ProductController::class, 'byIdMenu']);
Route::get('/pluck/{id_menu}', [ProductController::class, 'pluckToName']);
Route::get('/join', [ProductController::class, 'joinTable']);