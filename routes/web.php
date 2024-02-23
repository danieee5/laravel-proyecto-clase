<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CancionesController;

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

Route::get('/', function () {
    return view('welcome');
});
// Ruta de recurso para 'canciones', que incluye index, create, store, show, edit, update, y destroy
Route::resource('canciones', CancionesController::class)->parameters([
    'canciones' => 'cancion'
]);
