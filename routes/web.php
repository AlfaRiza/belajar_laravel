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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('about', function () {
//     return view('about');
// });
Route::get('blog', function(){
    return view('blog');
});
Route::get('/', 'UserController@index');
Route::get('/about', 'UserController@about');
Route::get('/blog', 'UserController@blog');
Route::get('/employee', 'EmployeeController@index');
Route::get('/employee/cari', 'EmployeeController@cari');
Route::get('/employee/tambah','EmployeeController@create');
Route::post('/employee','EmployeeController@store');
Route::get('/employee/edit/{id}', 'EmployeeController@edit');
Route::put('/employee/{id}', 'EmployeeController@update');
Route::get('/employee/hapus/{id}', 'EmployeeController@destroy');

