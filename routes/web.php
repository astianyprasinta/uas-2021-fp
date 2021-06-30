<?php

use App\Http\Controllers\BarangController;
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

Route::get('/','BarangController@index')->name('barang.index');
Route::get('/barang/create','BarangController@create')->name('barang.create');
Route::post('/barang/store','BarangController@store')->name('barang.store');
Route::delete('/barang/{id}','BarangController@destroy')->name('barang.destroy');
Route::get('/barang/{id}/edit','BarangController@edit')->name('barang.edit');
Route::put('/barang/{id}','BarangController@update')->name('barang.update');
Route::get('/cetak','BarangController@cetak')->name('barang.cetak');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
