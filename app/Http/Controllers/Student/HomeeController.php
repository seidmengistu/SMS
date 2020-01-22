<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;

class HomeeController extends Controller
{
    public function index(){
        return view('/campus/homee');
    }
}
