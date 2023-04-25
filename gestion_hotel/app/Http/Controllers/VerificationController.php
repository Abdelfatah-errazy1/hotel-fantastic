<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
    // use VerifiesEmails;
    public function show()
    {
        return view('auth.verify');
    }
}
