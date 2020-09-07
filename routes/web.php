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
    return view('Auth\login');
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
  Route::get('list', 'bulletinboard\listController@list');
  Route::get('register', 'bulletinboard\registerController@register');
  Route::get('contents', 'bulletinboard\contentsController@contents');
  Route::post('create', 'bulletinboard\createController@create');
  Route::get('delete/{thread_id}', 'bulletinboard\deleteController@delete');
});

Route:: prefix('exp')-> group(function() {
  Route::get('list','exp\listController@list' );
  Route::get('create','exp\registerController@create' );
  Route::get('update/{id}/edit','exp\updateController@update' );
  Route::get('update','exp\updateController@register' );
  Route::post('register','exp\registerController@register' );
});
