<?php

namespace App\Http\Controllers\Teacher;

//other search controoller used to serach user information for editing and deleting from
//Teacher tables

use App\Http\Controllers\Controller;
use App\Teacher;
use Illuminate\Http\Request;

class SearchtController extends Controller
{
    public function search(Request $request)
    {

        //dd(request()->all());

        $request->validate([
            'show' => 'required|integer',

        ]);
        $key = request('show');
        $results = Teacher::query()->where('code', $key)->get();
        // dd($results);

        return view('campus.teacher.index', compact('results', 'key'));
    }
}
