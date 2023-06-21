<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\UserController;

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
Route::resource('/products', ProductController::class);
Route::resource('/categories', CategoryController::class);
Route::resource('/suppliers', SupplierController::class);
Route::resource('/employees', EmployeeController::class);
Route::resource('/warehouses', WarehouseController::class);
Route::resource('/salaries', SalaryController::class);
Route::resource('/users', UserController::class);
Route::get('/login', AuthenticationController::class . '@loginIndex')->name('login');
Route::get('/register', AuthenticationController::class . '@registerIndex');
Route::post('/login', AuthenticationController::class . '@login');
Route::post('/register', AuthenticationController::class . '@register');
Route::get('/logout', AuthenticationController::class . '@logout');
Route::get('/', function () {
    return view('page.dashboard');
})->middleware('UserCheck:User');
Route::get('error', function () {
    return view('page.error');
});

//Middlaware
Route::get('/suppliers/create', [SupplierController::class, 'create'])->middleware('UserCheck:User');
Route::get('/suppliers/edit', [SupplierController::class, 'edit'])->middleware('UserCheck:User');
Route::get('/suppliers/delete', [SupplierController::class, 'delete'])->middleware('UserCheck:User');
Route::get('/users', [UserController::class, 'index'])->middleware('UserCheck:User');
Route::get('/users/create', [UserController::class, 'create'])->middleware('UserCheck:User');
Route::get('/users/delete', [UserController::class, 'delete'])->middleware('UserCheck:User');