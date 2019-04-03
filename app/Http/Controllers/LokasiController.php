<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lokasi;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lokasi = lokasi::all();

        return response()->json($lokasi,200);
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
        $lokasi = new lokasi;
        $lokasi->nama = $request->nama;
        
        $success = $lokasi->save();
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
    public function show($kode_lokasi)
    {
        $lokasi = lokasi::find($kode_lokasi);

        if(is_null($lokasi)){
            return response()->json('Not Found',404);
        }
        else
            return response()->json($lokasi,200);
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
    public function update(Request $request, $kode_lokasi)
    {
        $lokasi = lokasi::find($kode_lokasi);

        if(!is_null($request->nama)){
            $lokasi->nama = $request->nama;
        }

        $success = $lokasi->save();

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
    public function destroy($kode_lokasi)
    {
        $lokasi = lokasi::find($kode_lokasi);

        if(is_null($lokasi)){
            return response()->json('Not Found',404);
        }

        $success = $lokasi->delete();

        if(!$success){
            return response()->json('Error Deleting', 500);
        }
        else
            return response()->json('Success Deleting',200);
    
    }
}
