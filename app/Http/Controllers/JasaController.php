<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jasa;

class JasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jasa = jasa::all();

        return response()->json($jasa,200);
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
        $jasa = new jasa;
        $jasa->nama = $request->nama;
        $jasa->alamat = $request->alamat;
        $jasa->harga = $request->harga;
        
        $success = $jasa->save();
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
    public function show($id)
    {
        $jasa = jasa::find($id_jasa);

        if(is_null($jasa)){
            return response()->json('Not Found',404);
        }
        else
            return response()->json($jasa,200);
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
    public function update(Request $request, $id_jasa)
    {
        $jasa = jasa::find($id_jasa);

        if(!is_null($request->nama)){
            $jasa->nama = $request->nama;
        }

        if(!is_null($request->alamat)){
            $jasa->alamat = $request->alamat;
        }

        if(!is_null($request->telp)){
            $jasa->harga = $request->harga;
        }

        $success = $jasa->save();

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
    public function destroy($id_jasa)
    {
        $jasa = jasa::find($id_jasa);

        if(is_null($jasa)){
            return response()->json('Not Found',404);
        }

        $success = $jasa->delete();

        if(!$success){
            return response()->json('Error Deleting', 500);
        }
        else
            return response()->json('Success',200);
    }
}
