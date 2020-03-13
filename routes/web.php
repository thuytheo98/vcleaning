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

//Route::get('/', function () {
//    return view('admin.index');
//});
Route::prefix('admin')->group(function (){
    Route::match(['get', 'post'], 'login', 'AdminUpdate\AuthController@login')->name('admin.login');

    Route::match(['get', 'post'], 'logout', 'AdminUpdate\AuthController@logout')->name('admin.logout');

    Route::get('index',function (){
        return view('admin.index');
    })->name('admin.index');
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



