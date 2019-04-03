<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kendaraan;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kendaraan = kendaraan::all();

        return response()->json($kendaraan,200);
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
        $kendaraan = new kendaraan;
        $kendaraan->merek = $request->merek;
        $kendaraan->tipe = $request->tipe;
        $kendaraan->id_pelanggan = $request->id_pelanggan;
        
        $success = $kendaraan->save();
        if(!$success){
            return response()->json('Error Add',500);
        }
        else
           return response()->json('Success',200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $nomor_polisi
     * @return \Illuminate\Http\Response
     */
    public function show($nomor_polisi)
    {
        $kendaraan = kendaraan::find($nomor_polisi);

        if(is_null($kendaraan)){
            return response()->json('Not Found',404);
        }
        else
            return response()->json($kendaraan,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $nomor_polisi
     * @return \Illuminate\Http\Response
     */
    public function edit($nomor_polisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $nomor_polisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nomor_polisi)
    {
        $kendaraan = kendaraan::find($id_kendaraan);

        if(!is_null($request->merek)){
            $kendaraan->merek = $request->merek;
        }

        if(!is_null($request->tipe)){
            $kendaraan->tipe = $request->tipe;
        }

        if(!is_null($request->id_pelanggan)){
            $kendaraan->id_pelanggan = $request->id_pelanggan;
        }

        $success = $kendaraan->save();

        if(!$success){
            return response()->json('Error Updating',500);
        }
        else   
            return response()->json('Success Updating',200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $nomor_polisi
     * @return \Illuminate\Http\Response
     */
    public function destroy($nomor_polisi)
    {
        $kendaraan = kendaraan::find($id_kendaraan);

        if(is_null($kendaraan)){
            return response()->json('Not Found',404);
        }

        $success = $kendaraan->delete();

        if(!$success){
            return response()->json('Error Deleting', 500);
        }
        else
            return response()->json('Success Deleting',200);
    }
}
