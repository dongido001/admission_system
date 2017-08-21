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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/get_lga/{state}', 'AdmissionController@get_lga');

Route::get('/profile', 'ProfileController@index');

Route::get('/admission_application', 'AdmissionController@index');
Route::post('/admission_application', 'AdmissionController@store');

Route::get('/clearance_application', 'ClearanceController@index');
Route::post('/clearance_application', 'ClearanceController@store');

//staff login

Route::group(['prefix' => 'staff', 'middleware' => ['authStaff'] ], function(){

    // Your routes
   Route::get('/', 'StaffController@list_applicants');

   Route::get('/list_applicants', 'StaffController@list_applicants');

   Route::get('/view_applicant/{id}', 'StaffController@view_applicant');

   Route::post('/offer_admission', 'StaffController@offer_adamission');

   Route::post('/deny_admission', 'StaffController@deny_adamission');

});


Route::post('/staff/login', 'StaffController@staff_login');

Route::get('/staff/login', 'StaffController@show_staff_login');
Route::get('/staff/show_login', 'StaffController@show_staff_login');