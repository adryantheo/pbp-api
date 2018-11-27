<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

  
  
   
    public function store(Request $request)
    {
        $users = new User;
        $users->nama_lengkap = $request->nama_lengkap;
        $users->email = $request->email;
        $users->password = $request->password;
        
        $success = $users->save();

        if(!$success){
            return response()->json('Error Saving',500);
        }else{
            return response()->json('Sukses',201);
        }
    }

    
    public function get($id)
    {
        $users = User::find($id);

        if(is_null($users)){
            return response()->json('Not Found',404);
        }else{
            return response()->json('$users',200);
        }
    }

      

   
    public function update(Request $request, $id)
    {
        $users = User::find($id);

        if(!is_null($request->nama_lengkap)){
            $users->nama_lengkap = $request->nama_lengkap;
        }

        if(!is_null($request->email)){
            $users->email = $request->email;
        }

        if(!is_null($request->password)){
            $users->password = $request->password;
        }

        $success = $users->save();

        if(!$success){
            return response()->json('Error Updating',500);
        }else{
            return response()->json('Success',200);
        }

    }

   
    public function destroy($id)
    {
        $users = User::find($id);

        if(is_null($users)){
            return response()->json('Not Found',404);
        }
        
        $success = $users->delete();

        if(!$success){
            return response()->json('Error Updating',500);
        }else{
            return response()->json('Success',200);
        }

    }
}
