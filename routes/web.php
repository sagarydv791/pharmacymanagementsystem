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

// User Routes
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


// Admin Routes

Route::get('/admin', 'adminLoginController@adDash')->name('admin');
Route::get('/admin/login','adminLoginController@adminLogin')->name('admin.login');
Route::post('/admin/login/submit','adminLoginController@submit')->name('admin.login.submit');
Route::get('/logout','adminLoginController@logout')->name('admin.logout');

//  user Page
Route::view('/Home', 'frontend.anotherpage.Home')->name('Home');
Route::view('/about', 'frontend.anotherpage.about')->name('about');
Route::view('/service', 'frontend.anotherpage.service')->name('service');
Route::view('/department', 'frontend.anotherpage.department')->name('department');

// Route::get('/home', 'HomeController@index')->name('home');
