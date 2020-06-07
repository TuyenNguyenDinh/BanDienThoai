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

Route::get('/', function () {
    return view('Welcome');
});

Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return "post: $postId - comment: $commentId";
});

Route::get('/hello-word/{year}', function ($year) {
    echo ('hello word, ' . $year);
    // return view('hello-word');
});




//Admin Panel
Route::prefix('login')->group(function () {
        Route::get('/', 'LoginController@login');
        Route::post('/', 'LoginController@post_login');
        Route::prefix('/')->group(function () {
            Route::get('admin', function () {
                return view('admin.index');
            })->name('index');
            Route::resource('categories', 'CategoryController');
            Route::resource('products', 'ProductController');
            Route::resource('employees', 'EmployeeController');
            Route::resource('customers', 'CustomerController');
            Route::resource('bills', 'BillController');
            Route::resource('billdetails', 'BillDetailController');
        });
});