<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Room;
use App\Models\ImageRoom;
use App\Models\Reservation;
use App\Models\TypeRoom;
use App\Rules\MinDateToday;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class ReservationController extends Controller
{
    
    public function index(){
    $collection=Reservation::all();
        return view('reservations.index',compact('collection'));
    }
 
    public function show($id){
        $model=Reservation::find($id);
        $collection=Room::query()
        ->join('typerooms as  t', 't.idTR', 'rooms.typeRoom')
        ->where('idRoom',$model['room'])
        ->first();
        return view('reservations.show',compact('model','collection'));
    }
    public function create($type=null){
       
        return view('reservations.create',compact('type'));
    }
    public function store(Request $request){
        $val=$request->validate([
            'name'=>'required|max:100',
            'email'=>'required|email',
            'phone'=>'required|max:14',
            'message'=>'nullable',
            'nombreAdults'=>'required|integer|max:100',
            'nombreJours'=>'required|integer|max:100',
            'nombreRoom'=>'required|integer|max:100',
            'typeRoom'=>'required|integer',
            'dateReservation' => [
                'required',
                'date',new MinDateToday()
            ]
        ]);
        $room=Room::query()->where('typeRoom',$val['typeRoom'])->where('is_disponible',true)->first();
        if($room){
            $val['room']=$room['idRoom'];
            unset($val['typeRoom']);
            $val['room']=$room['idRoom'];
            $room->update(['is_disponible'=>false]);
            
            
        }else{
            throw ValidationException::withMessages(['typeRoom'=>'the type of room does not have room yet']);
        }
        
        
        $model=Reservation::create($val);
        session()->flash('message',1);
        session()->flash('type',1);
        if(auth()->user()){
            if(auth()->user()->is_admin){
                session()->forget('current_user');

                return redirect(route('reservations.index'));
                
            }   
        }
        // dd($model->idR);
        session(['current_user'=>$val['email'],'id'=>$model->idR]);
        return redirect(route('home'));
    }
    public function update(Request $request,$id){
        // dd($request);
             
        $val=$request->validate([
            'name'=>'required|max:100',
            'email'=>'required|email',
            'phone'=>'required|max:14',
            'message'=>'nullable',
            'nombreAdults'=>'required|integer|max:100',
            'nombreJours'=>'required|integer|max:100',
            'nombreRoom'=>'required|integer|max:100',
            'typeRoom'=>'required|integer',
            'dateReservation' => [
                'required',
                'date',new MinDateToday()
            ]
        ]);
        $model=Reservation::findOrFail($id);
        $r=Room::findOrFail($model->room);
        if($r->typeRoom==$val['typeRoom']){

            unset($val['typeRoom']);
        }else{
            $room=Room::query()->where('typeRoom',$val['typeRoom'])->where('is_disponible',true)->first();
            if($room){
                unset($val['typeRoom']);
                $val['room']=$room['idRoom'];
                $room->update(['is_disponible'=>false]);
                $r->update(['is_disponible'=>true]);
                
            }else{
                throw ValidationException::withMessages(['typeRoom'=>'the type of room does not have room yet']);
            }
           

        }

        $model->update($val);
        session()->flash('message',1);
        session()->flash('type',1);
        if(auth()->user()){
            if(auth()->user()->is_admin){
                session()->forget('current_user');

                return redirect(route('reservations.index'));
                
            }   
        }     
        return redirect(route('home'));
    }
    public function delete($id){
        session()->forget('current_user');
        $model=Reservation::findOrFail($id);
        $r=Room::findOrFail($model->room);
        $r->update(['is_disponible'=>true]);
        $model=Reservation::findOrFail($id)->delete();
        if(auth()->user()){
            if(auth()->user()->is_admin){
                session()->forget('current_user');

                return redirect(route('reservations.index'));
                
            } }
        return redirect(route('home'));
    }
}
