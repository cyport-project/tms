<?php

use Illuminate\Support\Facades\Route;

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

Route::get('home', 'dashboard\dashboardController@list');
Route::get('/', function () {
    return view('auth/login');
});
Route::get('logout','Auth\LoginController@logout');

// 個人情報関連
Route:: prefix('personalInformation')-> group(function() {
  Route::get('list', 'personalInformation\listController@list');
  Route::get('register', 'personalInformation\registerController@create');
  Route::post('register.store', 'personalInformation\registerController@store');
  Route::post('register.confirm', 'personalInformation\registerController@confirm');
  Route::get('update/{s_id}/edit','personalInformation\updateController@edit');
  Route::patch('update/{s_id}', 'personalInformation\updateController@update');
  Route::get('delete/{s_id}', 'personalInformation\deleteController@delete');
  Route::get('print', 'personalInformation\pdfController@list');
  Route::post('pdf.print', 'personalInformation\pdfController@print');
  Route::get('certification', 'personalInformation\certificationContorller@create');
  Route::post('certification.store', 'personalInformation\certificationContorller@store');

});

//掲示板関連
Route:: prefix('bulletinboard')-> group(function() {
  Route::get('', 'bulletinboardController@list');
  Route::get('register', 'bulletinboardController@register');
  Route::get('contents', 'bulletinboardController@contents');
  Route::post('register', 'bulletinboardController@create');
  Route::get('delete/{thread_id}', 'bulletinboardController@delete');
});

//スタッフ経験関連
  Route::get('exp/expmeun','expController@meun' );
  Route::get('expedit','expController@edit' );
  Route::post('expedit','expController@post' );
  Route::get('expview','expController@view' );
  Route::get('expreg','expController@reg' );
  Route::post('expreg','expController@regpost' );
