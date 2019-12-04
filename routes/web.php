<?php
# @Date:   2019-11-08T17:38:21+00:00
# @Last modified time: 2019-11-19T13:11:50+00:00




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

Route::get('/welcome', 'PageController@welcome')->name('welcome');
//Route::get('/about', 'PageController@about')->name('about'); could put in later?

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/home', 'Admin\HomeController@index')->name('admin.home');
Route::get('/doctor/home', 'Doctor\HomeController@index')->name('doctor.home');
Route::get('/patient/home', 'Patient\HomeController@index')->name('patient.home');

Route::get('/admin/doctors', 'Admin\DoctorController@index')->name('admin.doctors.index');
Route::get('/admin/doctors/create', 'Admin\DoctorController@create')->name('admin.doctors.create');
Route::get('/admin/doctors/{id}', 'Admin\DoctorController@show')->name('admin.doctors.show');
Route::post('/admin/doctors/store', 'Admin\DoctorController@store')->name('admin.doctors.store');
Route::get('/admin/doctors/{id}/edit', 'Admin\DoctorController@edit')->name('admin.doctors.edit');
Route::put('/admin/doctors/{id}', 'Admin\DoctorController@update')->name('admin.doctors.update');
Route::delete('/admin/doctors/{id}', 'Admin\DoctorController@destroy')->name('admin.doctors.destroy');

Route::get('/admin/patients', 'Admin\PatientController@index')->name('admin.patient.index');
Route::get('/admin/patients/create', 'Admin\PatientController@create')->name('admin.patient.create');
Route::get('/admin/patients/{id}', 'AdminPatientController@show')->name('admin.patient.show');
Route::post('/admin/patients/store', 'Admin\PatientController@store')->name('admin.patient.store');
Route::get('/admin/patients/{id}/edit', 'Admin\PatientController@edit')->name('admin.patient.edit');
Route::put('/admin/patients/{id}', 'Admin\PatientController@update')->name('admin.patient.update');
Route::delete('/admin/patients/{id}', 'Admin\PatientController@destroy')->name('admin.patient.destroy');
