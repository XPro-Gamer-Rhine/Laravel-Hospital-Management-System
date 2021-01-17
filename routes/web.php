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



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::match(['get','post'],'/authority/admin','AdminController@login');

Route::get('/','HospitalController@index');
Route::get('/register/choose','HospitalController@chooseRegister');





Route::group(['middleware'=>['auth']],function(){
	Route::get('/dashboard','AdminController@dashboard');
	Route::get('/logout','AdminController@logout');


	Route::match(['get','post'],'/fields/add-medical-fields','FieldController@addField');
	Route::get('/fields/view-fields','FieldController@viewFields');
	Route::match(['get','post'],'/edit/field/{id}','FieldController@editField');
	Route::match(['get','post'],'/reference','AdminController@addTag');
	Route::get('/delete/field/{id}','FieldController@deleteField');
	Route::get('/view-tags','AdminController@viewTags');
	Route::get('/delete/tag/{id}','AdminController@deleteTag');

	Route::match(['get','post'],'/doctor/add-doctor','AdminController@addDoctor');
	Route::get('/doctor/view-doctors','AdminController@viewDoctors');
	Route::match(['get','post'],'/doctor/edit-doctor/{id}','AdminController@editDoctor');
});


Route::match(['get','post'],'/admin/doctor','DoctorController@login');
Route::match(['get','post'],'/doctor/register','DoctorController@register');
Route::get('/register-successful/thanks','DoctorController@thankYou');

Route::group(['middleware'=>['doctorlogin']],function(){
	Route::get('/doctor/dashboard','DoctorController@doctor');
	Route::get('/doctor/logout','DoctorController@logout');
	Route::match(['get','post'],'/doctor/edit-profile/{id}','DoctorController@editProfile');
	Route::match(['get','post'],'/doctor/appoinment','DoctorController@appoinments');
	Route::get('/doctor/delete-appoinment/{id}','DoctorController@deleteAppoinment');
	Route::match(['get','post'],'/doctor/add-patient','DoctorController@addPatient');
	Route::match(['get','post'],'/doctor/edit-patient','DoctorController@editPatient');
	Route::match(['get','post'],'/doctor/make/prescription','DoctorController@makePrescription');
	Route::get('/doctor/view/prescription','DoctorController@viewPrescription');
	Route::get('/doctor/print/prescription/{id}','DoctorController@printPrescription');
	Route::get('/delete/doctor/prescription/{id}','DoctorController@deletePres');
});

Route::post('/make-appoinment/book','PatientController@reserveAppoinment');
Route::get('/appoinment/thanks','PatientController@thanks');