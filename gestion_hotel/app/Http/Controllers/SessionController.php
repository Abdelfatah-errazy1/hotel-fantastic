<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;

use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create(){
        return view('sessions.login');
    }
    public function new(){
        auth()->logout();
        return redirect()->route('login.create');
    }
    public function store(Request $request){
        $val=$request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
       if(auth()->attempt($val,$request->remember)){
        session()->regenerate();
        
         return redirect('/');
       }
       throw ValidationException::withMessages(['email'=>'password or email pas correct']);
        
}
 public function destroy(){
    auth()->logout();
    return redirect('/');
 }
}