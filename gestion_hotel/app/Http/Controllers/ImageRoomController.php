<?php

namespace App\Http\Controllers;

use App\Models\ImageRoom;
use Illuminate\Http\Request;

class ImageRoomController extends Controller
{
    
 

 
    public function store(Request $request){
        // dd($request);
        $val=$request->validate([
            'titre'=>'required',
            'room'=>'required',

            'img'=>'required|mimes:jpg,png,jpeg|max:2044',
        ]);
     

            $file=$val['img'];
            unset($val['img']);
            $imageName = time().'.'.$file->extension();
            $file->move(public_path('images/rooms'), $imageName);
            $val['img']='images/rooms/'.$imageName;
          
     
        
        $model=ImageRoom::create($val);
        session()->flash('message',1);
        session()->flash('type',1);
        return redirect(route('roomsAdmin.show',$model->room));

    }
 
    public function delete($id){
        $model=ImageRoom::findOrFail($id);
        ImageRoom::findOrFail($id)->delete();
        return redirect(route('roomsAdmin.show',$model->room));
    }
}
