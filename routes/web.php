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

Route::prefix('admin')->group(function (){
    Route::match(['get', 'post'], 'login', 'AdminUpdate\AuthController@login')->name('admin.login');

    Route::match(['get', 'post'], 'logout', 'AdminUpdate\AuthController@logout')->name('admin.logout');

    Route::get('index',function (){
        return view('admin.index');
    })->name('admin.index');
    Route::resource('services', 'AdminUpdate\ServiceController')->names([
        'index' => 'admin.services.index',
        'show' => 'admin.services.show',
        'store' => 'admin.services.store', //add
    ]);
    Route::resource('employees', 'AdminUpdate\EmployeeController')->names([
        'index' => 'admin.employees.index',
        'show' => 'admin.employees.show',
        'store' => 'admin.employees.store', //add
    ]);
    Route::resource('vcers', 'AdminUpdate\VcerController')->names([
        'index' => 'admin.vcers.index',
        'create' => 'admin.vcers.create',
        'store' => 'admin.vcers.store', //add
        'edit' => 'admin.vcers.edit',
        'update' => 'admin.vcers.update',
        'destroy' => 'admin.vcers.destroy',
    ]);
});


Route::match(['get', 'post'], 'login', 'Admin\AuthController@login')->name('login');

Route::match(['get', 'post'], 'logout', 'Admin\AuthController@logout')->name('logout');
////    ->prefix('thuy')
Route::middleware(['user.login'])->group(function (){

    Route::resource('users', 'Admin\UserController')->names([
        'index' => 'usr.users.index',
        'create' => 'usr.users.create'
    ]);
    Route::resource('services', 'Admin\ServiceController')->names([
        'index' => 'usr.service.index',
        'create' => 'usr.service.create'
    ]);
    Route::resource('orders','Admin\OrderController')->names([
        'index'=> 'usr.orders.index',
        'create' => 'usr.orders.create',
        'show' => 'usr.orders.show'
    ]);
});



