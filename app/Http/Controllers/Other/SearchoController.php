<?php
namespace App\Http\Controllers\Other;

//other search controoller used to serach user information for editing and deleting from
//user tables

use App\Http\Controllers\Controller;
use App\Other;
use Illuminate\Http\Request;

class SearchoController extends Controller
{
    public function search(Request $request)
    {

        //dd(request()->all());

        $request->validate([
            'show' => 'required|integer',

        ]);
        $key = request('show');
        $results = Other::query()->where('code', $key)->get();
        //dd($results);

        return view('campus.other.index', compact('results', 'key'));
    }
}
