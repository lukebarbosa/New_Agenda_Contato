<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

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


Auth::routes();
Route::get('/', [ContatoController::class, 'index']);


Route::prefix('contatos')->group(function () {
    Route::get('/', [ContatoController::class, 'index']);
    Route::get('/add', [ContatoController::class, 'create']);
    Route::post('/', [ContatoController::class, 'store']);
    Route::get('/{id}', [ContatoController::class, 'show']);
    Route::get('/edit/{id}', [ContatoController::class, 'edit']);
    Route::put('/{id}', [ContatoController::class, 'update']);
    Route::delete('/{id}', [ContatoController::class, 'destroy']);
});
