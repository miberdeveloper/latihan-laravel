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

Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa.index');

// Membuat data / Insert
Route::get('/mahasiswa/create', 'MahasiswaController@create')->name('mahasiswa.create');
Route::post('/mahasiswa', 'MahasiswaController@store')->name('mahasiswa.store');

// Mengedit data / Insert
Route::get('/mahasiswa/{mahasiswa}/edit', 'MahasiswaController@edit')->name('mahasiswa.edit');
Route::put('/mahasiswa/{mahasiswa}', 'MahasiswaController@update')->name('mahasiswa.update');

// Menghapus data
Route::delete('/mahasiswa/{mahasiswa}', 'MahasiswaController@destroy')->name('mahasiswa.destroy');

// Bisa menggunakan yang dibawah
// Route::resource('mahasiswa', 'MashasiswaController');
