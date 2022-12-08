<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\EstateController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\EditEstateController;

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
Route::get('/estate', [EstateController::class, 'myreq']);
Route::get('/driver', [DriverController::class, 'index']);
Route::get('/driver', [DriverController::class, 'myJobs']);
Route::get('/editEstate', [EditEstateController::class, 'index']);
Route::get('/editEstate', [EditEstateController::class, 'editestate']);


Route::get('/products', [productsController::class, 'index']);
Route::get('/products', [productsController::class, 'table']);
Route::post('/products', [productsController::class, 'store']);
Route::get('fetch-products', [productsController::class, 'fetchproduct']);


