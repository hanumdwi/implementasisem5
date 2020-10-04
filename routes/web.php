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
    return view('welcome');
});

Route::get('dashboard', function (){
    return view('dashboard');
});

Route::get('dropdownlist','DataController@getCountries');
Route::get('dropdownlist/getstates/{id}','DataController@getStates');
Route::get('dropdownlist/getkecamatan/{id}','DataController@getKecamatan');
Route::get('dropdownlist/getkelurahan/{id}','DataController@getKelurahan');
Route::get('dropdownlist/getkodepos/{id}','DataController@getKodepos');

Route::get('dropdownlist1','DataController@getCountries1');

Route::post('customerstore1', 'DataController@customer_store1');
Route::post('customerstore2', 'DataController@customer_store2');

Route::get('barcode','BarcodeController@barcode');
Route::get('pdf-barcode/{id}', 'BarcodeController@pdf_barcode');
Route::get('test-barcode', 'BarcodeController@test_barcode');
