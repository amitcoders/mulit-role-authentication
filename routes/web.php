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
    if(Auth::check() && Auth::user()->role_id == 1){
            return redirect('admin/dashboard');
        } elseif(Auth::check() && Auth::user()->role_id == 3){
            return redirect('user/dashboard');
        } elseif(Auth::check() && Auth::user()->role_id == 2){
            return redirect('manager/dashboard');
        }  else{
        	return redirect('login');
        }
});

Auth::routes();



Route::group(['as'=>'admin.','prefix' => 'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function () {
		Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

Route::group(['as'=>'manager.','prefix' => 'manager','namespace'=>'Manager','middleware'=>['auth','manager']], function () {
		Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

Route::group(['as'=>'user.','prefix' => 'user','namespace'=>'User','middleware'=>['auth','user']], function () {
		Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});
  