<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\CropController;
use App\Http\Controllers\dJobController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\stockController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\EstateController;
use App\Http\Controllers\addUserController;
use App\Http\Controllers\managerController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\requestController;
use App\Http\Controllers\editCropController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\editFieldController;
use App\Http\Controllers\inventoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\EditEstateController;
use App\Http\Controllers\issueStockController;
use App\Http\Controllers\Admin\FieldController;

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

Route::get('/redirect', function () {
    $role = Auth::user()->role_id;
    return $role;
});

Route::get('logout', function () {
    Session::flush();

    return redirect()
        ->route('login');
})->name('logout');

Route::controller(adminController::class)->group(function () {
    Route::get('admin', 'index')->name('admin.index');
});

Route::controller(EstateController::class)->group(function () {
    Route::get('admin/estate/view', 'index')->name('admin.estate.index');
    Route::get('admin/estate/edit/{estate}', 'edit')->name('admin.estate.edit');
    Route::get('admin/estate/update/{estate}', 'update')->name('admin.estate.update');
    Route::get('admin/estate/create', 'create')->name('admin.estate.create');
    Route::post('admin/estate/store', 'store')->name('admin.estate.store');
    Route::get('admin/estate/manage/{estate}', 'manage')->name('admin.estate.manage');
});

Route::controller(FieldController::class)->group(function () {
    Route::get('admin/field/create/{estate}', 'create')->name('admin.field.create');
    Route::post('admin/field/store', 'store')->name('admin.field.store');
    Route::get('admin/field/edit/{field}', 'edit')->name('admin.field.edit');
    Route::post('admin/field/update/{field}', 'update')->name('admin.field.update');
    Route::get('admin/field/manage/crop/{field}/{crop}', 'manageCrop')->name('admin.crop.edit');
});

Route::controller(UserController::class)->group(function () {
    Route::get('admin/user/index', 'index')->name('admin.user.index');
    Route::get('admin/user/create', 'create')->name('admin.user.create');
});

Route::controller(CropController::class)->group(function () {
    Route::get('admin/crop/create/{estate}', 'create')->name('admin.crop.create');
    Route::post('admin/crop/store', 'store')->name('admin.crop.store');
    Route::post('admin/crop/update', 'update')->name('admin.crop.update');
});

// Driver
Route::controller(DriverController::class)->group(function () {
    Route::get('/driver', 'index')->name('driver.index');
    Route::get('/driver', 'myJobs')->name('driver.myjobs');
    Route::get('click_clear/{id}', 'delete')->name('driver.delete');
    Route::get('/driver/completed', 'completed')->name('driver.completed');
});

//Report

Route::controller(ReportsController::class)->group(function () {
    Route::get('/admin/report', 'index')->name('admin.report.index');
    Route::post('/admin/report', 'search')->name('admin.report.search');
});

//dJobController
Route::controller(dJobController::class)->group(function () {
    Route::get('/admin/jobs/completed', 'index')->name('admin.jobs.completed.index');
    Route::get('/admin/jobs', 'view')->name('admin.jobs.index');
});


// Inventory
Route::controller(inventoryController::class)->group(function () {
    Route::get('/inventory', 'index')->name('inventory.index');
    Route::get('/inventory', 'tabledata')->name('inventory.tabledata');
});

//  Products
Route::controller(productsController::class)->group(function () {
    Route::get('inventory/products/', 'create')->name('inventory.products.create');
    Route::post('inventory/products/store', 'store')->name('inventory.products.store');
});

//manager
Route::controller(managerController::class)->group(function () {
    Route::get('manager', 'index')->name('manager.index');
    // Route::post('inventory/products/store', 'store')->name('inventory.products.store');

});

//requests
Route::controller(requestController::class)->group(function () {
    Route::get('manager/submit', 'create')->name('manager.submit.create');
    // Route::post('inventory/products/store', 'store')->name('inventory.products.store');

});

//Stock
Route::controller(stockController::class)->group(function () {
    Route::get('inventory/stock/', 'create')->name('inventory.stock.create');
    Route::get('inventory/stock/findProductType', 'findProductType')->name('inventory.stock.findProductType');
    Route::post('inventory/stock/store', 'store')->name('inventory.stock.store');
    Route::get('inventory/issue', 'issueOut')->name('inventory.issue.issueOut');
    Route::post('inventory/issue/update', 'update')->name('inventory.issue.update');
});

//Issue Stock
Route::controller(issueStockController::class)->group(function () {
    Route::get('inventory/issue', 'index')->name('inventory.issue.index');
    Route::post('inventory/issue/update', 'update')->name('inventory.issue.update');
});

Route::get('/admin/s', [adminController::class, 'adminData']);
Route::get('/estate', [EstateController::class, 'index']);
// Route::get('/driver', [DriverController::class, 'index']);
// Route::get('/driver', [DriverController::class, 'myJobs']);
Route::get('/viewjob', [dJobController::class, 'viewDeliveryJob']);

Route::get('/editField', [editFieldController::class, 'index']);

Route::get('/editField', [editFieldController::class, 'editfield']);
Route::get('/adminReport', [ReportsController::class, 'index']);
Route::get('/createUser', [addUserController::class, 'index']);
Route::get('/createUser', [addUserController::class, 'addUser']);

Route::get('/editCrop', [editCropController::class, 'index']);
Route::get('/editCrop', [editCropController::class, 'editCrop']);


// Route::get('/products', [productsController::class, 'index']);
// Route::get('/products', [productsController::class, 'table']);
// Route::post('/products', [productsController::class, 'store']);
// Route::get('fetch-products', [productsController::class, 'fetchproduct']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
