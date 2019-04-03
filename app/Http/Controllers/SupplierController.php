<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier = supplier::all();

        return response()->json($supplier,200);
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
        $supplier = new supplier;
        $supplier->nama = $request->nama;
        $supplier->alamat = $request->alamat;
        $supplier->sales = $request->sales;
        $supplier->telp = $request->telp;
        
        $success = $supplier->save();

        if($success){
            return response()->json('Success',200);
        }
        else
            return response()->json('Error Add',500);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_supplier)
    {
        $supplier = supplier::find($id_supplier);

        if(is_null($supplier)){
            return response()->json('Not Found',404);

        }

        else
            return response()->json($supplier,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_supplier)
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
    public function update(Request $request, $id_supplier)
    {
        $supplier = supplier::find($id_supplier);

        if(!is_null($request->nama)){
            $supplier->nama = $request->nama;
        }

        if(!is_null($request->alamat)){
            $supplier->alamat = $request->alamat;
        }
        
        if(!is_null($request->sales)){
            $supplier->sales = $request->sales;
        }

        if(!is_null($request->telp)){
            $supplier->telp = $request->telp;
        }

        $success = $supplier->save();

        if(!$success){
            return response()->json('Eror Updateting',500);
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
    public function destroy($id_supplier)
    {
        $supplier = supplier::find($id_supplier);

        if(is_null($supplier)){
            return response()->json('Not Found',404);
        }

        $success = $supplier->delete();

        if(!$success){
            return response()->json('Error Deleting', 500);
        }
        else
            return response()->json('Success',200);
    }
}
