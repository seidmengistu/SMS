<?php

namespace App\Http\Controllers\Borrowed;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {

        dd(request()->all());

        $request->validate([
            'show' => 'required|integer',

        ]);
        $key = request('show');
        $results = Other::query()->where('code', $key)->get();
        //dd($results);

        return view('store.borrower.create', compact('results', 'key'));
    }
}
