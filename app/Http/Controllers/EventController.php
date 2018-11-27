<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Event;

class EventController extends Controller
{
    
    public function index()
    {
        return Event::all();
    }

  
  
   
    public function store(Request $request)
    {
        $events = new Event;
        $events->nama_event = $request->nama_event;
        $events->email = $request->email;
        $events->tanggal_mulai = $request->tanggal_mulai;
        $events->tanggal_selesai = $request->tanggal_selesai;
        $events->tempat = $request->tempat;
        $events->kategori = $request->kategori;
        $events->no_telp = $request->no_telp;
        $success = $events->save();

        if(!$success){
            return response()->json('Error Saving',500);
        }else{
            return response()->json('Sukses',201);
        }
    }

    
    public function get($id)
    {
        $events = Event::find($id);

        if(is_null($events)){
            return response()->json('Not Found',404);
        }else{
            return response()->json('$events',200);
        }
    }

      

   
    public function update(Request $request, $id)
    {
        $events = Event::find($id);

        if(!is_null($request->nama_event)){
            $events->nama_event = $request->nama_event;
        }

        if(!is_null($request->email)){
            $events->email = $request->email;
        }

        if(!is_null($request->tanggal_mulai)){
            $events->tanggal_mulai = $request->tanggal_mulai;
        }

        if(!is_null($request->tanggal_selesai)){
            $events->tanggal_selesai = $request->tanggal_selesai;
        }

        if(!is_null($request->tempat)){
            $events->tempat = $request->tempat;
        }

        if(!is_null($request->kategori)){
            $events->kategori = $request->kategori;
        }

        if(!is_null($request->no_telp)){
            $events->no_telp = $request->no_telp;
        }

        $success = $events->save();

        if(!$success){
            return response()->json('Error Updating',500);
        }else{
            return response()->json('Success',200);
        }

    }

   
    public function destroy($id)
    {
        $events = Event::find($id);

        if(is_null($events)){
            return response()->json('Not Found',404);
        }
        
        $success = $events->delete();

        if(!$success){
            return response()->json('Error Updating',500);
        }else{
            return response()->json('Success',200);
        }

    }
}
