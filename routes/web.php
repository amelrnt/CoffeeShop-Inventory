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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // TODO: Add all routes

    Route::get('/products', 'ProductController@index')->name('products');
    Route::get('/products/create', 'ProductController@create')->name('products.create');
    Route::post('/products', 'ProductController@store')->name('products.store');
    Route::get('/products/{product}/edit', 'ProductController@edit')->name('products.edit');

    Route::get('/supplier', 'SupplierController@index')->name('supplier');
    Route::get('/supplier/create', 'SupplierController@create')->name('supplier.create');
    Route::post('/supplier', 'SupplierController@store')->name('supplier.store');
    Route::get('/supplier/{supplier}/edit', 'SupplierController@edit')->name('supplier.edit');

    Route::get('/employee', 'EmployeeController@index')->name('employee');
    Route::get('/employee/create', 'EmployeeController@create')->name('employee.create');
    Route::post('/employee', 'EmployeeController@store')->name('employee.store');
    Route::get('/employee/{employee}/edit', 'EmployeeController@edit')->name('employee.edit');

    Route::get('/Role', 'RoleController@index')->name('role');
    Route::get('/Role/create', 'RoleController@create')->name('role.create');
    Route::post('/Role', 'RoleController@store')->name('role.store');
    Route::get('/Role/{Role}/edit', 'RoleController@edit')->name('role.edit');

    Route::get('/Inventory', 'InventoryController@index')->name('inventory');
    Route::get('/Inventory/create', 'InventoryController@create')->name('inventory.create');
    Route::post('/Inventory', 'InventoryController@store')->name('inventory.store');
    Route::get('/Inventory/{inventory}/edit', 'InventoryController@edit')->name('inventory.edit');

    Route::get('/Transaction', 'TransactionController@index')->name('transaction');
    Route::get('/Transaction/create', 'TransactionController@create')->name('transaction.create');
    Route::post('/Transaction', 'TransactionController@store')->name('transaction.store');
    Route::get('/Transaction/{transaction}/edit', 'TransactionController@edit')->name('transaction.edit');


    Route::group(['prefix' => 'components', 'as' => 'components.'], function () {
        Route::get('/alert', function () {
            return view('admin.component.alert');
        })->name('alert');
        Route::get('/accordion', function () {
            return view('admin.component.accordion');
        })->name('accordion');
        Route::get('/new', function () {
            return view('admin.table.new');
        })->name('new');
    });
});
