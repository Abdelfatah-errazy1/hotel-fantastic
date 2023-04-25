<?php

namespace App\Http\Controllers;

use App\Models\TypeRoom;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index(){
    $collection=User::all();
        return view('users.index',compact('collection'));
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
        return redirect(route('typeRooms.index'));
    }
    public function delete($id){
        $model=TypeRoom::findOrFail($id)->delete();
        return redirect(route('typeRooms.index'));
    }
}
