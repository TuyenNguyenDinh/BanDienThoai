<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Welcome');
});



//Admin Panel
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('index');
    Route::resource('categories', 'CategoryController');
    Route::resource('products', 'ProductController');
    Route::resource('employees', 'EmployeeController');
    Route::resource('customers', 'CustomerController');
    Route::resource('bills', 'BillController');
    Route::resource('billdetails', 'BillDetailController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
