<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detil_transaksi_jasa;

class DetilTransaksiJasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detil_transaksi_jasa = detil_transaksi_jasa::all();

        return response()->json($detil_transaksi_jasa,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detil_transaksi_jasa = new detil_transaksi_jasa;
        $detil_transaksi_jasa->id_transaksi_penjualan = $request->id_transaksi_penjualan;
        $detil_transaksi_jasa->nomor_polisi = $request->nomor_polisi;
        $detil_transaksi_jasa->id_pegawai = $request->id_pegawai;
        $detil_transaksi_jasa->jumlah = $request->jumlah;
        $detil_transaksi_jasa->harga = $request->harga;
        $detil_transaksi_jasa->id_jasa = $request->id_jasa;
        $detil_transaksi_jasa->status = $request->status;
        
        $success = $detil_transaksi_jasa->save();
        if(!$success){
            return response()->json('Error Add',500);
        }
        else
           return response()->json('Success',200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_detil_transaksi_jasa)
    {
        $detil_transaksi_jasa = detil_transaksi_jasa::find($id_detil_transaksi_jasa);

        if(is_null($detil_transaksi_jasa)){
            return response()->json('Not Found',404);

        }

        else
            return response()->json($detil_transaksi_jasa,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_detil_transaksi_jasa)
    {
        $detil_transaksi_jasa = detil_transaksi_jasa::find($id_detil_transaksi_jasa);

        if(!is_null($request->id_transaksi_penjualan)){
            $detil_transaksi_jasa->id_transaksi_penjualan = $request->id_transaksi_penjualan;
        }

        if(!is_null($request->nomor_polisi)){
            $detil_transaksi_jasa->nomor_polisi = $request->nomor_polisi;
        }

        if(!is_null($request->id_pegawai)){
            $detil_transaksi_jasa->id_pegawai = $request->id_pegawai;
        }

        if(!is_null($request->jumlah)){
            $detil_transaksi_jasa->jumlah = $request->jumlah;
        }

        if(!is_null($request->harga)){
            $detil_transaksi_jasa->harga = $request->harga;
        }

        if(!is_null($request->id_jasa)){
            $detil_transaksi_jasa->id_jasa = $request->id_jasa;
        }

        if(!is_null($request->status)){
            $detil_transaksi_jasa->status = $request->status;
        }

        $success = $detil_transaksi_jasa->save();

        if(!$success){
            return response()->json('Error Updating',500);
        }
        else   
            return response()->json('Success Updating',200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_detil_transaksi_jasa)
    {
        $detil_transaksi_jasa = detil_transaksi_jasa::find($id_detil_transaksi_jasa);

        if(is_null($detil_transaksi_jasa)){
            return response()->json('Not Found',404);
        }

        $success = $detil_transaksi_jasa->delete();

        if(!$success){
            return response()->json('Error Deleting', 500);
        }
        else
            return response()->json('Success',200);
    }
}
