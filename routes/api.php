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

// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With, enctype');
// header('Access-Control-Allow-Methods: GET, PATCH, POST, DELETE');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'cors'], function() {
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

//Pelanggan
Route::get('/pelanggan','PelangganController@index');
Route::post('/pelanggan/store','PelangganController@store');
Route::get('/pelanggan/showById/{id_role}','PelangganController@show');
Route::put('/pelanggan/update/{id_role}','PelangganController@update');
Route::delete('/pelanggan/delete/{id_role}','PelangganController@destroy');

//Jasa
Route::get('/jasa','JasaController@index');
Route::post('/jasa/store','JasaController@store');
Route::get('/jasa/showById/{id_role}','JasaController@show');
Route::put('/jasa/update/{id_role}','JasaController@update');
Route::delete('/jasa/delete/{id_role}','JasaController@destroy');

//kendaraan
Route::get('/kendaraan','KendaraanController@index');
Route::post('/kendaraan/store','KendaraanController@store');
Route::get('/kendaraan/showById/{id_role}','KendaraanController@show');
Route::put('/kendaraan/update/{id_role}','KendaraanController@update');
Route::delete('/kendaraan/delete/{id_role}','KendaraanController@destroy');

//lokasi
Route::get('/lokasi','LokasiController@index');
Route::post('/lokasi/store','LokasiController@store');
Route::get('/lokasi/showById/{id_role}','LokasiController@show');
Route::put('/lokasi/update/{id_role}','LokasiController@update');
Route::delete('/lokasi/delete/{id_role}','LokasiController@destroy');

//sparepart
Route::get('/sparepart','SparepartController@index');
Route::post('/sparepart/store','SparepartController@store');
Route::get('/sparepart/showById/{id_role}','SparepartController@show');
Route::put('/sparepart/update/{id_role}','SparepartController@update');
Route::delete('/sparepart/delete/{id_role}','SparepartController@destroy');

//supplier
Route::get('/supplier','SupplierController@index');
Route::post('/supplier/store','SupplierController@store');
Route::get('/supplier/showById/{id_role}','SupplierController@show');
Route::put('/supplier/update/{id_role}','SupplierController@update');
Route::delete('/supplier/delete/{id_role}','SupplierController@destroy');

//transaksipengadaan
Route::get('/transaksipengadaan','TransaksiPengadaanController@index');
Route::post('/transaksipengadaan/store','TransaksiPengadaanController@store');
Route::get('/transaksipengadaan/showById/{id_role}','TransaksiPengadaanController@show');
Route::put('/transaksipengadaan/update/{id_role}','TransaksiPengadaanController@update');
Route::delete('/transaksipengadaan/delete/{id_role}','TransaksiPengadaanController@destroy');

//transaksipenjualan
Route::get('/transaksipenjualan','TransaksiPenjualanController@index');
Route::post('/transaksipenjualan/store','TransaksiPenjualanController@store');
Route::get('/transaksipenjualan/showById/{id_role}','TransaksiPenjualanController@show');
Route::put('/transaksipenjualan/update/{id_role}','TransaksiPenjualanController@update');
Route::delete('/transaksipenjualan/delete/{id_role}','TransaksiPenjualanController@destroy');

//detiltransaksijasa
Route::get('/detiltransaksijasa','DetilTransaksiJasaController@index');
Route::post('/detiltransaksijasa/store','DetilTransaksiJasaController@store');
Route::get('/detiltransaksijasa/showById/{id_role}','DetilTransaksiJasaController@show');
Route::put('/detiltransaksijasa/update/{id_role}','DetilTransaksiJasaController@update');
Route::delete('/detiltransaksijasa/delete/{id_role}','DetilTransaksiJasaController@destroy');

//detiltransaksipengadaan
Route::get('/detiltransaksipengadaan','DetilTransaksiPengadaanController@index');
Route::post('/detiltransaksipengadaan/store','DetilTransaksiPengadaanController@store');
Route::get('/detiltransaksipengadaan/showById/{id_role}','DetilTransaksiPengadaanController@show');
Route::put('/detiltransaksipengadaan/update/{id_role}','DetilTransaksiPengadaanController@update');
Route::delete('/detiltransaksipengadaan/delete/{id_role}','DetilTransaksiPengadaanController@destroy');

//detiltransaksisparepart
Route::get('/detiltransaksisparepart','DetilTransaksiSparepartController@index');
Route::post('/detiltransaksisparepart/store','DetilTransaksiSparepartController@store');
Route::get('/detiltransaksisparepart/showById/{id_role}','DetilTransaksiSparepartController@show');
Route::put('/detiltransaksisparepart/update/{id_role}','DetilTransaksiSparepartController@update');
Route::delete('/detiltransaksisparepart/delete/{id_role}','DetilTransaksiSparepartController@destroy');

 
 });