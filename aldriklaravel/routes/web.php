<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\EventoController;

Route::get('/', [EventoController::class, 'index']);
Route::get('/eventos/create', [EventoController::class, 'create']);



Route::get('/carros/{id?}', function ($id = null) {
    $var_busca = request('busca');
    return view('cars', ['res_id' => $id, 'res_busca' => $var_busca]);
});