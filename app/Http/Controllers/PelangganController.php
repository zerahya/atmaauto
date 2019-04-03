<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggan = pelanggan::all();

        return response()->json($pelanggan,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelanggan = new pelanggan;
        $pelanggan->nama = $request->nama;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->telp = $request->telp;
        
        $success = $pelanggan->save();
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
    public function show($id_pelanggan)
    {
        $pelanggan = pelanggan::find($id_pelanggan);

        if(is_null($pelanggan)){
            return response()->json('Not Found',404);

        }

        else
            return response()->json($pelanggan,200);
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
    public function update(Request $request, $id_pelanggan)
    {
        $pelanggan = pelanggan::find($id_pelanggan);

        if(!is_null($request->nama)){
            $pelanggan->nama = $request->nama;
        }

        if(!is_null($request->alamat)){
            $pelanggan->alamat = $request->alamat;
        }

        if(!is_null($request->telp)){
            $pelanggan->telp = $request->telp;
        }

        $success = $pelanggan->save();

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
    public function destroy($id_pelanggan)
    {
        $pelanggan = pelanggan::find($id_pelanggan);

        if(is_null($pelanggan)){
            return response()->json('Not Found',404);
        }

        $success = $pelanggan->delete();

        if(!$success){
            return response()->json('Error Deleting', 500);
        }
        else
            return response()->json('Success',200);
    }
}
