<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\role;

class RoleController extends Controller
{
    //Tampil
    public function index()
    {
        $role = role::all();

        return response()->json($role,200);
    }

    //Create
    public function store(Request $request)
    {
        $role = new role;
        $role->role = $request->role;
      
        
        $success = $role->save();

        if(!$success){
            return response()->json('Error Add',500);
        }
        else
            return response()->json('Success',200);
    }

    //Tampil Berdasarkan ID

    public function show($id_role)
    {
        $role = role::find($id_role);

        if(is_null($role)){
            return response()->json('Not Found',404);

        }

        else
            return response()->json($role,200);
    }

    //Update
    public function update(Request $request, $id_role)
    {
        $role = role::find($id_role);

        if(!is_null($request->role)){
            $role->role = $request->role;
        }

        $success = $role->save();

        if(!$success){
            return response()->json('Eror Updateting',500);
        }
        else   
            return response()->json('Success',200);
    }

    //Delet
    public function destroy($id_role)
    {
        $role = role::find($id_role);

        if(is_null($role)){
            return response()->json('Not Found',404);
        }

        $success = $role->delete();

        if(!$success){
            return response()->json('Error Deleting', 500);
        }
        else
            return response()->json('Success',200);
    }


}