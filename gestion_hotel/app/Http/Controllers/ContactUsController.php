<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
   
    public function create(){
        return view('pages.contact.create');
    }
    public function store(Request $request){
        $val=$request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'message'=>'required',
        ]);
        ContactUs::create($val);
        session()->flash('message',1);
        session()->flash('type',1);
        return redirect('/');
    }
}
