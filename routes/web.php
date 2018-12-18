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
    return view('welcome');
});


Route::get('lege_admin', 'Home\LoginController@index');
// Route::post('admin/lege_login', 'Home\LoginController@login');
Route::get('admin/lege', 'Admin\LoginController@login');