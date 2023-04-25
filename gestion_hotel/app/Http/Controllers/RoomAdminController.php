<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\ImageRoom;
use Illuminate\Http\Request;

class RoomAdminController extends Controller
{
    
    public function index(){
    $collection=Room::all();
        return view('roomsAdmin.index',compact('collection'));
    }
 
    public function show($id){
        $model=Room::find($id);
        $collection=ImageRoom::query()->where('room',$id)->get();
        return view('roomsAdmin.show',compact('model','collection'));
    }
    public function create(){
        return view('roomsAdmin.create');
    }
    public function store(Request $request){
        // dd($request);
        $val=$request->validate([
            'name'=>'required|max:100',
            'size'=>'required|integer',
            'capacity'=>'required|max:100',
            'typeRoom'=>'required|integer',
            'description'=>'nullable',
        ]);
        $model=Room::create($val);
        session()->flash('message',1);
        session()->flash('type',1);
        return redirect(route('roomsAdmin.show',$model->idRoom));
    }
    public function update(Request $request,$id){
        // dd($request);
        $val=$request->validate([
            'name'=>'required|max:100',
            'size'=>'required|integer',
            'capacity'=>'required|max:100',
            'typeRoom'=>'required|integer',
            'description'=>'nullable',
        ]);
        $model=Room::findOrFail($id);

        $model->update($val);
        session()->flash('message',1);
        session()->flash('type',1);
        return redirect(route('roomsAdmin.index'));
    }
    public function delete($id){
        $model=Room::findOrFail($id)->delete();
        return redirect(route('roomsAdmin.index'));
    }
}
