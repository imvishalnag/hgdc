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
    Route::get('/change/password/form', 'AdminDashboardController@changePasswordForm')->name('admin.change_password_form');
    Route::post('/change/password', 'AdminDashboardController@changePassword')->name('admin.change_password');

    Route::get('/dashboard', 'AdminDashboardController@index')->name('admin.dashboard');
    Route::get('/student/list/table', 'AdminDashboardController@studentListTable')->name('student.list');
    Route::get('/student/list', 'AdminDashboardController@studentList')->name('admin.ajax.student_list');    
    Route::get('/student/show/{id}', 'AdminDashboardController@show')->name('admin.show');
    Route::get('/student/edit/{id}', 'AdminDashboardController@edit')->name('admin.edit');
    Route::put('/student/update/{id}', 'AdminDashboardController@update')->name('admin.update');

    
    Route::get('/student/hs/detail/edit/{student_id}', 'AdminDashboardController@editHsDetail')->name('admin.student_hs_detail_edit');
    Route::get('/student/hs/detail/delete/{id}', 'AdminDashboardController@deleteHsDetail')->name('admin.student_hs_detail_delete');    
    Route::post('/student/hs/detail/update/', 'AdminDashboardController@updateHsDetail')->name('admin.student_hs_detail_update');
    
    Route::get('/student/subject/selection/edit/{student_id}', 'AdminDashboardController@editSubjectSelection')->name('admin.student_subject_selection_edit');
    Route::post('/student/subject/selection/update/', 'AdminDashboardController@updateSubjectSelection')->name('admin.student_subject_selection_update');

    Route::get('/add/gallery/', 'ConfigController@addGalleryForm')->name('admin.add_gallery_form');
    Route::post('/insert/gallery/', 'ConfigController@addGallery')->name('admin.insert_gallery');
    Route::get('/list/gallery/', 'ConfigController@galleryList')->name('admin.gallery_list');
    Route::get('/image/delete/{id}', 'ConfigController@galleryDelete')->name('admin.gallery_delete');

    
    Route::get('/notification/add/', 'ConfigController@addNotificationForm')->name('admin.add_notification_form');
    Route::post('/insert/notification/', 'ConfigController@addNotification')->name('admin.insert_notification');    
    Route::get('/list/notification/', 'ConfigController@notificationList')->name('admin.notification_list');
    Route::get('/notification/delete/{id}', 'ConfigController@notificationDelete')->name('admin.notification_delete');

});