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

// Frontend Control
Route::get('/login', 'Web\FrontendController@login')->name('web.login');
Route::post('/login/otp', 'Web\FrontendController@loginWithOtp')->name('web.otp');
Route::get('/send/otp', 'Web\FrontendController@sendOtp')->name('web.send_otp');
Route::post('/web/logout', 'Web\FrontendController@logout')->name('web.logout');


// Student Dashboard
Route::group(['middleware'=>'auth:web','prefix'=>'web','namespace'=>'Web'],function(){
    Route::get('/admission', 'StudentDashboardController@index')->name('web.admission');
    Route::post('/form/submit', 'StudentDashboardController@store')->name('student.store');
    Route::get('/thanks', 'StudentDashboardController@thanks')->name('web.thanks');
});
// =========== Index ============= 
Route::get('/', function () {
    return view('web.index');
})->name('web.index');

// =========== about ============= 
Route::get('/about', function () {
    return view('web.about');
})->name('web.about');

// =========== goal ============= 
Route::get('/goal', function () {
    return view('web.goal');
})->name('web.goal');

// =========== rule ============= 
Route::get('/rule', function () {
    return view('web.rule');
})->name('web.rule');

// =========== curricular ============= 
Route::get('/curricular', function () {
    return view('web.curricular');
})->name('web.curricular');

// =========== xtcurricular ============= 
Route::get('/xtcurricular', function () {
    return view('web.xtcurricular');
})->name('web.xtcurricular');

// =========== Teacher ============= 
Route::get('/Teacher', function () {
    return view('web.teacher');
})->name('web.teacher');

// =========== Facilities ============= 
Route::get('/Facilities', function () {
    return view('web.facilities');
})->name('web.facilities');

// =========== Result ============= 
Route::get('/Result', function () {
    return view('web.result');
})->name('web.result');

// =========== Gallery ============= 
Route::get('/Gallery', function () {
    return view('web.gallery');
})->name('web.gallery');

// =========== contact ============= 
Route::get('/contact', function () {
    return view('web.contact');
})->name('web.contact');

// =========== Login ============= 
// Route::get('/Login', function () {
//     return view('web.login');
// })->name('web.login');

// =========== Thanks ============= 
// Route::get('/Thank-You', function () {
//     return view('web.thanks');
// })->name('web.thanks');

// =========== Online Admission ============= 
// Route::get('/Online-Admission', function () {
//     return view('web.admission');
// })->name('web.admission');

// =========== View-form ============= 
Route::get('/View-form', function () {
    return view('web.view-form');
})->name('web.view-form');

