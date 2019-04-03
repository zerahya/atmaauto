<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Cabang
Route::get('/cabang','CabangController@index');
Route::post('/cabang/store','CabangController@store');
Route::get('/cabang/showById/{id_cabang}','CabangController@show');
Route::put('/cabang/update/{id_cabang}','CabangController@update');
Route::delete('/cabang/delete/{id_cabang}','CabangController@destroy');


//Role
Route::get('/role','RoleController@index');
Route::post('/role/store','RoleController@store');
Route::get('/role/showById/{id_role}','RoleController@show');
Route::put('/role/update/{id_role}','RoleController@update');
Route::delete('/role/delete/{id_role}','RoleController@destroy');

//Pegawai
Route::get('/pegawai','PegawaiController@index');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/showById/{id_role}','PegawaiController@show');
Route::put('/pegawai/update/{id_role}','PegawaiController@update');
Route::delete('/pegawai/delete/{id_role}','PegawaiController@destroy');
Route::post('/pegawai/login','PegawaiController@login');