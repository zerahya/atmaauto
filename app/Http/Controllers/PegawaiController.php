<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pegawai;
use Exception;
use Hash;
class PegawaiController extends Controller
{
    //Tampil
    public function index()
    {
        $pegawai = pegawai::all();

        return response()->json($pegawai,200);
    }

    //Create
    public function store(Request $request)
    {
        $pegawai = new pegawai();
        $pegawai->id_role = $request->id_role;
        $pegawai->id_cabang = $request->id_cabang;
        $pegawai->nama = $request->nama;
        $pegawai->alamat = $request->alamat;
        $pegawai->gaji = $request->gaji;
        $pegawai->username = $request->username;
        $pegawai->password = password_hash($request->password, PASSWORD_DEFAULT);
        $pegawai->telepon_pegawai = $request->telepon_pegawai;
      
        try{
            if($pegawai->save()){
                return response()->json('Success',200);
            }
            else
                return response()->json('Error Add',500);
        }catch(Exception $e){
            return response()->json('Error Add',500);
        };

            
        // if(!$success){
        //     return response()->json('Error Add',500);
        // }
        // else
        //     return response()->json('Success',200);
    }

    //Tampil Berdasarkan ID

    public function show($id_pegawai)
    {
        $pegawai = pegawai::find($id_pegawai);

        if(is_null($pegawai)){
            return response()->json('Not Found',404);
        }
        else
            return response()->json($pegawai,200);
    }

    //Update
    public function update(Request $request, $id_pegawai)
    {
        $pegawai = pegawai::find($id_pegawai);

        if(!is_null($request->id_role)){
            $pegawai->id_role = $request->id_role;
        }

        if(!is_null($request->id_cabang)){
            $pegawai->id_cabang = $request->id_cabang;
        }

        if(!is_null($request->nama)){
            $pegawai->nama = $request->nama;
        }

        if(!is_null($request->alamat)){
            $pegawai->alamat = $request->alamat;
        }
        
        if(!is_null($request->gaji)){
            $pegawai->gaji = $request->gaji;
        }

        if(!is_null($request->username)){
            $pegawai->username = $request->username;
        }

        if(!is_null($request->password)){
            $pegawai->password = password_hash($request->password, PASSWORD_DEFAULT);
        }

        if(!is_null($request->telepon_pegawai)){
            $pegawai->telepon_pegawai = $request->telepon_pegawai;
        }

        $success = $pegawai->save();

        if(!$success){
            return response()->json('Eror Updateting',500);
        }
        else   
            return response()->json('Success',200);
    }

    //Delet
    public function destroy($id_pegawai)
    {
        $pegawai = pegawai::find($id_pegawai);

        if(is_null($pegawai)){
            return response()->json('Not Found',404);
        }

        $success = $pegawai->delete();

        if(!$success){
            return response()->json('Error Deleting', 500);
        }
        else
            return response()->json('Success',200);
    }

    public function login(Request $request)
    {
        $pegawai = pegawai::where('username',$request->username)->first();


        if (! Hash::check($request->password,$pegawai->password)) {
            
            return response()->json('Fail Login', 500);
        }
        else
            return response()->json($pegawai,200);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
        
        ]);
    }
    
}
