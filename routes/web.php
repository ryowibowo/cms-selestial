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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/' , 'DashboardController@index')->name('dashboard');
Auth::routes();

Route::resource('products', 'ProductController');
Route::resource('transactions', 'TransaksiController');
Route::resource('users', 'UserController');

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/reports' , 'ReportController@index')->name('reports.index');



