<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cabang;

class CabangController extends Controller
{
    //Tampil
    public function index()
    {
        $cabang = Cabang::all();

        return response()->json($cabang,200);
    }

    //Create
    public function store(Request $request)
    {
        $cabang = new Cabang;
        $cabang->nama = $request->nama;
        $cabang->alamat = $request->alamat;
        $cabang->telepon_cabang = $request->telepon_cabang;
        
        $success = $cabang->save();

        if(!$success){
            return response()->json('Error Add',500);
        }
        else
            return response()->json('Success',200);
    }

    //Tampil Berdasarkan ID

    public function show($id_cabang)
    {
        $cabang = Cabang::find($id_cabang);

        if(is_null($cabang)){
            return response()->json('Not Found',404);

        }

        else
            return response()->json($cabang,200);
    }

    //Update
    public function update(Request $request, $id_cabang)
    {
        $cabang = Cabang::find($id_cabang);

        if(!is_null($request->nama)){
            $cabang->nama = $request->nama;
        }

        if(!is_null($request->alamat)){
            $cabang->alamat = $request->alamat;
        }

        
        if(!is_null($request->telepon_cabang)){
            $cabang->telepon_cabang = $request->telepon_cabang;
        }

        $success = $cabang->save();

        if(!$success){
            return response()->json('Eror Updateting',500);
        }
        else   
            return response()->json('Success',200);
    }

    //Delet
    public function destroy($id_cabang)
    {
        $cabang = Cabang::find($id_cabang);

        if(is_null($cabang)){
            return response()->json('Not Found',404);
        }

        $success = $cabang->delete();

        if(!$success){
            return response()->json('Error Deleting', 500);
        }
        else
            return response()->json('Success',200);
    }


}
