<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dJobController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\EstateController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\editCropController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\editFieldController;
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
    return redirect('login');
});

Route::controller(adminController::class)->group(function () {
    Route::get('admin', 'index')->name('admin.index');
});

Route::controller(EstateController::class)->group(function () {
    Route::post('admin/estate/store', 'store')->name('admin.estate.store');
    Route::get('estate', 'myreq');
});
Route::get('/admin/s', [adminController::class, 'adminData']);
Route::get('/estate', [EstateController::class, 'index']);
Route::get('/driver', [DriverController::class, 'index']);
Route::get('/driver', [DriverController::class, 'myJobs']);
Route::get('/editEstate', [EditEstateController::class, 'index']);
Route::get('/editEstate', [EditEstateController::class, 'editestate']);
Route::get('/viewjob', [dJobController::class, 'viewDeliveryJob']);
Route::get('/editField', [editFieldController::class, 'index']);
Route::get('/editField', [editFieldController::class, 'editfield']);
Route::get('/adminReport', [ReportsController::class, 'index']);

Route::get('/editCrop', [editCropController::class, 'index']);
Route::get('/editCrop', [editCropController::class, 'editCrop']);


Route::get('/products', [productsController::class, 'index']);
Route::get('/products', [productsController::class, 'table']);
Route::post('/products', [productsController::class, 'store']);
Route::get('fetch-products', [productsController::class, 'fetchproduct']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
