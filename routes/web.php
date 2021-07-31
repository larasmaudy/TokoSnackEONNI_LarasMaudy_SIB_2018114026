<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\PelangganController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('', [KatalogController::class, 'index']);
Route::get('', [KatalogController::class, 'index']);
Route::get('', [KatalogController::class, 'index']);
// Route::get('/produks', [KatalogController::class, 'index']);
// Route::get('/produks/create', [KatalogController::class, 'create']);
// Route::post('/produks', [KatalogController::class, 'store']);
// Route::get('/produks/{id}', [KatalogController::class, 'show']);
// Route::get('/produks/{id}/edit', [KatalogController::class, 'edit']);
// Route::get('/produks/{id}', [KatalogController::class, 'update']);
// Route::delete('/produks/{id}', [KatalogController::class, 'destroy']);

Route::resources([
    'homes' => TentangController::class,
    'produks' => KatalogController::class,
    'customers' => PelangganController::class,
]);