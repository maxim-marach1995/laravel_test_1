<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuitarController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', [GuitarController::class, 'form_create']);
Route::post('/create', [GuitarController::class, 'create']);
Route::get('/show/{id}', [GuitarController::class, 'show']);
Route::get('/update/{id}', [GuitarController::class, 'form_update']);
Route::post('/update/{id}', [GuitarController::class, 'update']);
Route::get('/delete/{id}', [GuitarController::class, 'delete']);
