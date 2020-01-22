<?php

namespace App\Http\Controllers\Material;

use App\Http\Controllers\Controller;
use App\Material;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    { //dd(request()->all());

        //$request->validate([
        // 'show' => 'required|string',

        //  ]);

        //$key = request('show');
        //$results = Material::query()->where('material_id', Material::id())->where('Materialsname', 'LIKE', "%{$request->input('search')}%")->get();
        //dd($results);

        // return view('store.material.index', compact('results', 'key'));
    }
}
