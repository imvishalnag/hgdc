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
require __DIR__.'/frontend.php';

/***
 * Admin Login Control
 */
Route::get('/admin/login', 'Admin\AdminLoginController@showAdminLoginForm')->name('admin.login');
Route::post('/admin/login', 'Admin\AdminLoginController@adminLogin');
Route::post('/admin/logout', 'Admin\AdminLoginController@logout')->name('admin.logout');

// Admin Dashboard
Route::group(['middleware'=>'auth:admin','prefix'=>'admin','namespace'=>'Admin'],function(){
    Route::get('/dashboard', 'AdminDashboardController@index')->name('admin.dashboard');
    Route::get('/student/list/table', 'AdminDashboardController@studentListTable')->name('student.list');
    Route::get('/student/list', 'AdminDashboardController@studentList')->name('admin.ajax.student_list');    
    Route::get('/student/show/{id}', 'AdminDashboardController@show')->name('admin.show');
    Route::get('/student/edit/{id}', 'AdminDashboardController@edit')->name('admin.edit');

});