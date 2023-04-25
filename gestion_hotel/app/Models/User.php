<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
{
    use  HasFactory;
    use Notifiable;
    protected $guarded = [];

    // ...
    // public function sendEmailVerificationNotification()
    // {
    //     $this->notify(new CustomVerifyEmail);
    // }
}
