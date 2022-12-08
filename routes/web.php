<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\EstateController;

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

Route::get('/admin', [adminController::class, 'index']);
Route::get('/admin', [adminController::class, 'adminData']);
Route::get('/estate', [EstateController::class, 'index']);

// Route::get('/estate', [EstateController::class, 'crop']);

// Route::get('/estate', [EstateController::class, 'field']);

Route::get('/estate', [EstateController::class, 'myreq']);

