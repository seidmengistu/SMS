<?php

namespace App\Http\Controllers\Student;

//other search controoller used to serach user information for editing and deleting from
//Student tables

use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {

        //dd(request()->all());

        $request->validate([
            'show' => 'required|integer',

        ]);
        $key = request('show');
        $results = Student::query()->where('code', $key)->get();
        //dd($results);

        return view('campus.student.index', compact('results', 'key'));
    }
}
# studenlist
# studenlist
