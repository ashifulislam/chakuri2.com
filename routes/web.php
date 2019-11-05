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
Route::get('/Login','authenticationController@showLoginForm');
Route::get('/Registration','authenticationController@showRegistrationForm');
Route::post('/loginOperation','authenticationController@performLogin');
Route::post('/regOperation','authenticationController@performreg');
Route::get('/adminHomePage','AdminController@showAdminPanel');
Route::get('/createJob','employerController@createJob');
Route::post('/addJobCategory','employerController@addCategory');
Route::get('/showJobCategory','employerController@showJobCategory');
Route::get('/addEmployer','AdminController@createEmployer');
Route::post('/addEmployerOperation','AdminController@addEmployer');
Route::get('/showEmployerList','AdminController@showEmployerList');
Route::get('/updateEmployerList/{id}','AdminController@updateEmployer');
Route::post('/edit/{id}','AdminController@editEmployer');
Route::get('/deleteEmployerList/{id}','AdminController@deleteEmployer');
