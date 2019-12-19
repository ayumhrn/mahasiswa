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

Route::get('/companydata', 'Cmp@All');
Route::post('/companyadd', 'Cmp@addCompany');
Route::post('/companyupdate', 'Cmp@updateCompany');
Route::post('/companydelete', 'Cmp@deleteCompany');

Route::view('/addcompany', 'addcompany');
Route::view('/updatecompany', 'updatecompany');
Route::view('/deletecompany', 'deletecompany');

Route::get('/userdata', 'Users@All');
Route::post('/useradd', 'Users@addUser');
Route::post('/userupdate', 'Users@updateUser');
Route::post('/userdelete', 'Users@deleteUser'); 

Route::view('/adduser', 'adduser');
Route::view('/updateuser', 'updateuser');
Route::view('deleteuser', 'deleteuser');

Route::get('/mahasiswadata', 'MahasiswaController@index');
Route::get('/mahasiswadata/create', 'MahasiswaController@create');
Route::get('/mahasiswadata/{mahasiswa}', 'MahasiswaController@show');
Route::post('/mahasiswadata', 'MahasiswaController@store');
Route::delete('/mahasiswadata/{mahasiswa}', 'MahasiswaController@destroy');
Route::get('/mahasiswadata/{mahasiswa}/edit', 'MahasiswaController@edit');
Route::put('mahasiswadata/{mahasiswa}', 'MahasiswaController@update');

//Untuk semua route mahasiswa, bisa dipanggil dengan
// Route::resource('mahasiswadata', 'MahasiswaController');








