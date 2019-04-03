<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksi_pengadaan;

class TransaksiPengadaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi_pengadaan = transaksi_pengadaan::all();

        return response()->json($transaksi_pengadaan,200);
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
        $transaksi_pengadaan = new transaksi_pengadaan;
        $transaksi_pengadaan->id_supplier = $request->id_supplier;
        $transaksi_pengadaan->tanggal = $request->tanggal;
        
        $success = $transaksi_pengadaan->save();
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
    public function show($id_transaksi_pengadaan)
    {
        $transaksi_pengadaan = transaksi_pengadaan::find($id_transaksi_pengadaan);

        if(is_null($transaksi_pengadaan)){
            return response()->json('Not Found',404);
        }
        else
            return response()->json($transaksi_pengadaan,200);
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
    public function update(Request $request, $id_transaksi_pengadaan)
    {
        $transaksi_pengadaan = transaksi_pengadaan::find($id_transaksi_pengadaan);

        if(!is_null($request->id_supplier)){
            $transaksi_pengadaan->id_supplier = $request->id_supplier;
        }

        if(!is_null($request->tanggal)){
            $transaksi_pengadaan->tanggal = $request->tanggal;
        }

        $success = $transaksi_pengadaan->save();

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
    public function destroy($id_transaksi_pengadaan)
    {
        $transaksi_pengadaan = transaksi_pengadaan::find($id_transaksi_pengadaan);

        if(is_null($transaksi_pengadaan)){
            return response()->json('Not Found',404);
        }

        $success = $transaksi_pengadaan->delete();

        if(!$success){
            return response()->json('Error Deleting', 500);
        }
        else
            return response()->json('Success Deleting',200);
    
    }
}
