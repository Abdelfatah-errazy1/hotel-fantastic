<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ContactUs;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Contracts\Mail\Mailable;
// use Illuminate\Auth\Notifications\VerifyEmail;

class RegisterController extends Controller
{
    //
    public function create(){
        return view('register.create');
    }
 
    public function store(Request $request){
        $val=$request->validate([
            'name'=>'required',
            'username'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'avatar'=>'nullable|mimes:jpg,png,jpeg|max:2044',
        ]);
        $val['password']=bcrypt($val['password']);
        if(isset($val['avatar'])){

            $file=$val['avatar'];
            unset($val['avatar']);
            // $path=$file->store('profil/img', 'public');
            $imageName = time().'.'.$file->extension();
            $file->move(public_path('images'), $imageName);
            $val['avatar']='images/'.$imageName;
            
        }
        
        $model=User::create($val);
        // 'email_verified_at' => null, // mark the email as unverified
        
        
        auth()->login($model,$request->remember);
        $model->sendEmailVerificationNotification();

        return redirect()->route('verification.notice');
        // return redirect('/');
    }






    //-------------------------------------------
    // UserController.php



    // generate the verification link and send it to the user's email


// UserController.php
// 
// private function sendVerificationEmail(User $user)
// {
//     // generate the verification token
//     $token = Str::random(64);
// 
//     // create a verification record in the database
//     DB::table('email_verifications')->insert([
//         'user_id' => $user->id,
//         'token' => $token,
//         'created_at' => now(),
//     ]);
// 
//     // send the verification email to the user's email
//     Mail::to($user->email)->send(new VerifyEmail($user, $token));
// }







}
