<?php

namespace App\Http\Controllers;

use App\Models\TypeRoom;
use Illuminate\Http\Request;

class TypeRoomController extends Controller
{
    
    public function index(){
    $collection=TypeRoom::all();
        return view('typeRooms.index',compact('collection'));
    }
 
    public function show($id){
        $model=TypeRoom::find($id);
        return view('typeRooms.show',compact('model'));
    }
    public function create(){
        return view('typeRooms.create');
    }
    public function store(Request $request){
        // dd($request);
        $val=$request->validate([
            'type'=>'required|max:100',
            'description'=>'nullable',
        ]);
        TypeRoom::create($val);
        
        session()->flash('message',1);
        session()->flash('type',1);
        return redirect(route('typeRooms.index'));
    }
    public function update(Request $request,$id){
        // dd($request);
        $val=$request->validate([
            'type'=>'required|max:100',
            'description'=>'nullable',
        ]);
        $model=TypeRoom::findOrFail($id);

        $model->update($val);
        session()->flash('message',1);
        session()->flash('type',1);
        return redirect(route('typeRooms.index'));
    }
    public function delete($id){
        $model=TypeRoom::findOrFail($id)->delete();
        return redirect(route('typeRooms.index'));
    }
}
