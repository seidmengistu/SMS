<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function redirectTo()
    {
        //return("dddd");
        if (auth()->user()->usertype == 'storekepper') {

            return '/shome';
        } else if (auth()->user()->usertype == 'campuspolice') {

            return '/campus/homee';
        } else {
            return '/home';
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
