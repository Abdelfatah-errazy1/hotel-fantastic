<?php

namespace App\Http\Controllers;

use App\Models\ImageRoom;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    //
    public function index(){
        $collection=Room::query()
    ->join('imagerooms as  img', 'img.room', 'rooms.idRoom')
    ->get();
        // dd($collection);
        return view('rooms.index',compact('collection'));
    }
    public function galary(){
            
        $collection=ImageRoom::all();
        return view('rooms.galary',compact('collection'));
    }
    public function show($id){
        $collection=ImageRoom::query()->where('room',$id)->get();
        $model=Room::query()
        ->join('typerooms as  t', 't.idTR', 'rooms.typeRoom')
        ->where('idRoom',$id)
        ->select('rooms.*','t.type as type')
        ->first();
        return view('rooms.show',compact('collection','model'));
    }
    public function create(){
        return view('rooms.create');
    }
    public function store(Request $request){
        // $val=$request->validate([
        //     'name'=>'required',
        //     'email'=>'required|email',
        //     'phone'=>'required',
        //     'message'=>'required',
        // ]);
        // ContactUs::create($val);
        // return view('create');
    }
}
