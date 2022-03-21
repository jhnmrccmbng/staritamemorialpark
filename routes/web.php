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

Route::get('/', function () {
   return Redirect::to('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/clients', function () {
   return view('clients');
});

Route::get('/clientsreport', function () {
   return view('clientsreport');
});

Route::get('/clientsinquiries', function () {
   return view('inquiry');
});

Route::get('/salesreport', function () {
   return view('salesreport');
});

Route::get('/incomeorexpensesreport', function () {
   return view('incomeorexpensesreport');
});

Route::get('/employeereports', function () {
   return view('employeereports');
});
