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
Route::get('/home','HomeController@index');
Route::auth();

Route::get('candidate/register','Auth\RegisterController@candidate_register');
Route::post('candidate/sign_up','Auth\RegisterController@candidate_insert_data');
Route::get('candidate_register/verify/{token}','Auth\RegisterController@confirm_registration_candidate');

Route::get('employer/register','Auth\RegisterController@employer_register');
Route::post('employer/sign_up','Auth\RegisterController@employer_insert_data');
Route::get('employer_register/verify/{token}','Auth\RegisterController@confirm_registration_employer');

Route::get('view_login','Auth\RegisterController@view_login');
Route::post('user_login','Auth\RegisterController@user_login');