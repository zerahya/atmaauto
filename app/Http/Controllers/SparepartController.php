<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sparepart;

class SparepartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sparepart = sparepart::all();

        return response()->json($sparepart,200);
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
        $sparepart = new sparepart;
        $sparepart->kode_lokasi = $request->kode_lokasi;
        $sparepart->nama = $request->nama;
        $sparepart->merek = $request->merek;
        $sparepart->tipe = $request->tipe;
        $sparepart->gambar = $request->gambar;
        $sparepart->herga_beli = $request->harga_beli;
        $sparepart->harga_jual = $request->harga_jual;
        $sparepart->stok_minimal = $request->stok_minimal;
        $sparepart->stok_sekarang = $request->stok_sekarang;
        
        $success = $sparepart->save();
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
    public function show($kode_sparepart)
    {
        $sparepart = sparepart::find($kode_sparepart);

        if(is_null($sparepart)){
            return response()->json('Not Found',404);
        }
        else
            return response()->json($sparepart,200);
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
     * @param  int  $kode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_sparepart)
    {
        $sparepart = sparepart::find($kode_sparepart);

        if(!is_null($request->kode_lokasi)){
            $sparepart->kode_lokasi = $request->kode_lokasi;
        }

        if(!is_null($request->nama)){
            $sparepart->nama = $request->nama;
        }

        if(!is_null($request->merek)){
            $sparepart->merek = $request->merek;
        }

        if(!is_null($request->tipe)){
            $sparepart->tipe = $request->tipe;
        }

        if(!is_null($request->gambar)){
            $sparepart->gambar = $request->gambar;
        }

        if(!is_null($request->harga_beli)){
            $sparepart->harga_beli = $request->harga_beli;
        }

        if(!is_null($request->harga_jual)){
            $sparepart->harga_jual = $request->harga_jual;
        }

        if(!is_null($request->stok_minimal)){
            $sparepart->stok_minimal = $request->stok_minimal;
        }

        if(!is_null($request->stok_sekarang)){
            $sparepart->stok_sekarang = $request->stok_sekarang;
        }

        $success = $sparepart->save();

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
    public function destroy($kode_sparepart)
    {
        $sparepart = sparepart::find($kode_sparepart);

        if(is_null($sparepart)){
            return response()->json('Not Found',404);
        }

        $success = $sparepart->delete();

        if(!$success){
            return response()->json('Error Deleting', 500);
        }
        else
            return response()->json('Success Deleting',200);
    }
}
