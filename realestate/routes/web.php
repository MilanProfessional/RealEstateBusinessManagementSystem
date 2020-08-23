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

Route::get('/login', 'Auth\LoginController@userLogin')->name('login');

Route::post('/login', 'Auth\LoginController@login')->name('login.submit');

Route::get('/admin/login', 'Auth\AdminLoginController@adminLoginForm')->name('admin.login');

Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admins.login.submit');

Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');

Route::get('/admin/viewuser', 'AdminController@viewusers')->name('admin.viewuser');

Route::get('/admin/addproperty', 'AdminController@addpropertyform')->name('admin.addpropertyform');

Route::post('/admin/addproperty', 'AdminController@addproperty')->name('admin.addproperty');

Route::get('/admin/viewproperty', 'AdminController@viewproperty')->name('admin.viewproperty');

Route::get('/admin/editproperty/{property_id}', 'AdminController@editproperty')->name('property.edit');

Route::post('/admin/updateproperty/', 'AdminController@updateproperty')->name('property.update');

Route::get('/admin/deleteproperty/{property_id}', 'AdminController@deleteproperty')->name('property.delete');

Route::get('/admin/deleteuser/{id}', 'AdminController@deleteuser')->name('user.delete');

Route::get('/user/userdashboard', 'HomeController@dashboard')->name('user.userdashboard');

Route::get('/user/addproperty', 'HomeController@addpropertyform')->name('user.addpropertyform'); // To show form

Route::post('/user/addproperty', 'HomeController@addproperty')->name('user.addproperty');
 //to store in database and to redirect
Route::get('/user/viewproperty', 'HomeController@viewproperty')->name('user.viewproperty');

Route::get('/nonusers/viewproperty', 'PropertyController@viewpropertywithoutlogin')->name('property.viewpropertywithoutlogin');

Route::get('/help','helpController@help')->name('manual.help');
Route::get('/user/userhelp','helpController@userhelp')->name('manual.userhelp');
Route::get('/admin/helpadmin', 'helpController@adminhelp')->name('manual.adminhelp');