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

    Route::middleware(['admin.login'])->namespace('AdminUpdate')->group(function (){

        Route::get('index', 'HomeController@index')->name('admin.index');

        Route::resource('services', 'ServiceController')->names([
            'index' => 'admin.services.index',
            'create' => 'admin.services.create',
            'store' => 'admin.services.store',
        ]);
        Route::resource('detail', 'DetailServiceController')->names([
            'create' => 'admin.detail.create',
            'store' => 'admin.detail.store',
        ]);
        Route::resource('subservice', 'SubServiceController')->names([
            'create' => 'admin.subservice.create',
            'store' => 'admin.subservice.store',
        ]);
        Route::resource('employees', 'EmployeeController')->names([
            'index' => 'admin.employees.index',
            'create' => 'admin.employees.create',
            'store' => 'admin.employees.store',
            'edit' => 'admin.employees.edit',
            'update' => 'admin.employees.update',
            'destroy' => 'admin.employees.destroy',
        ]);
        Route::resource('users', 'UserController')->names([
            'index' => 'admin.users.index',
        ]);
        Route::resource('vcers', 'VcerController')->names([
            'index' => 'admin.vcers.index',
            'create' => 'admin.vcers.create',
            'store' => 'admin.vcers.store',
            'edit' => 'admin.vcers.edit',
            'update' => 'admin.vcers.update',
            'destroy' => 'admin.vcers.destroy',
        ]);
        Route::resource('orders', 'OrderController')->names([
            'index' => 'admin.orders.index',
            'show' => 'admin.orders.show',
            'store' => 'admin.orders.store',
        ]);
    });
    Route::prefix('ajax')->group(function (){
        Route::get('detail/{idService}', 'AjaxController@getDetailService');
    });
});





Route::match(['get', 'post'], 'login', 'Admin\AuthController@login')->name('login');


Route::match(['get', 'post'], 'logout', 'Admin\AuthController@logout')->name('logout');

//    Route::resource('users', 'Admin\UserController')->names([
//        'index' => 'usr.users.index',
//        'create' => 'usr.users.create'
//    ]);


Route::get('home', function (){
        return view('pages.index');
    })->name('index');
    Route::get('contact', function (){
        return view('pages.contact');
    })->name('contact');
    Route::get('about', function (){
        return view('pages.about');
    })->name('about');
    Route::get('register', function (){
        return view('pages.register_vcer');
    })->name('vcer');

    Route::middleware(['user.login'])->group(function (){

        //chon service se nhary ra form dang ky service va cac buoc xac nhan den khi thanh toan
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
Route::get('{locale}', function ($locale){
    Session::put('locale', $locale);//put locale vào session rồi middleware Localization sẽ kiểm tra và chạy locale đó =>vứt middleware đó vào middlewaregroup để duyệt qua mọi loại route
    return redirect()->back(); //quay về luôn trang vừa nãy vs locale
})->name('locale');


