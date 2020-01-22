<?php

namespace App\Http\Controllers\Borrower;

use App\Borrower;
use App\Http\Controllers\Controller;
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
        $results = Borrower::query()->where('bcode', $key)->get();
        //dd($results);

        return view('store.borrower.index', compact('results', 'key'));
    }
}
