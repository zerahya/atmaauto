<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksi_penjualan;

class TransaksiPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi_penjualan = transaksi_penjualan::all();

        return response()->json($transaksi_penjualan,200);
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
        $transaksi_penjualan = new transaksi_penjualan;
        $transaksi_penjualan->id_pegawai = $request->id_pegawai;
        $transaksi_penjualan->id_pelanggan = $request->id_pelanggan;
        $transaksi_penjualan->tanggal = $request->tanggal;
        $transaksi_penjualan->subtotal = $request->subtotal;
        $transaksi_penjualan->status_bayar = $request->status_bayar;
        $transaksi_penjualan->diskon = $request->diskon;
        $transaksi_penjualan->total_bayar = $request->total_bayar;
        
        $success = $transaksi_penjualan->save();
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
    public function show($id_transaksi_penjualan)
    {
        $transaksi_penjualan = transaksi_penjualan::find($id_transaksi_penjualan);

        if(is_null($transaksi_penjualan)){
            return response()->json('Not Found',404);
        }
        else
            return response()->json($transaksi_penjualan,200);
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
    public function update(Request $request, $id_transaksi_penjualan)
    {
        $transaksi_penjualan = transaksi_penjualan::find($id_transaksi_penjualan);

        if(!is_null($request->id_pegawai)){
            $transaksi_penjualan->id_pegawai = $request->id_pegawai;
        }

        if(!is_null($request->id_pelanggan)){
            $transaksi_penjualan->id_pelanggan = $request->id_pelanggan;
        }

        if(!is_null($request->tanggal)){
            $transaksi_penjualan->tanggal = $request->tanggal;
        }

        if(!is_null($request->subtotal)){
            $transaksi_penjualan->subtotal = $request->subtotal;
        }

        if(!is_null($request->status_bayar)){
            $transaksi_penjualan->status_bayar = $request->status_bayar;
        }

        if(!is_null($request->diskon)){
            $transaksi_penjualan->diskon = $request->diskon;
        }

        if(!is_null($request->total_bayar)){
            $transaksi_penjualan->total_bayar = $request->total_bayar;
        }

        $success = $transaksi_penjualan->save();

        if(!$success){
            return response()->json('Eror Updating',500);
        }
        else   
            return response()->json('Success',200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_transaksi_penjualan)
    {
        $transaksi_penjualan = transaksi_penjualan::find($id_transaksi_penjualan);

        if(is_null($transaksi_penjualan)){
            return response()->json('Not Found',404);
        }

        $success = $transaksi_penjualan->delete();

        if(!$success){
            return response()->json('Error Deleting', 500);
        }
        else
            return response()->json('Success',200);
    }
}
