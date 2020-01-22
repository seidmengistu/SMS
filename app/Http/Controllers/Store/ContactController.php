<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }
}
