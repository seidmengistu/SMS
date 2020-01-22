<?php

namespace App\Http\Controllers\Material;

use App\borrower;
use App\Http\Controllers\Controller;
use App\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{

    public function index()
    {
        $arr['materials'] = Material::paginate(6);

        return view('store.material.index')->with($arr);

    }

    public function create()
    {
        return view('store.material.create');

    }

    public function store(Request $request)
    {
        //dd(request()->all());

        $materials = new Material();
        $materials->department = $request->input('department');
        $materials->materialsname = $request->input('materialsname');
        $materials->materialsserialnumber = $request->input('materialsserialnumber');
        $materials->quantity = $request->input('quantity');
        $materials->condition = $request->input('condition');
        $materials->shelfnumber = $request->input('shelfnumber');
        $materials->storenumber = $request->input('storenumber');
        $materials->date = $request->input('date');
        $materials->save();

        return back()->with('status', 'New Material Added Sucessfully');

    }

    public function show(Request $request)
    {
        $material = Material::where('materialsname', request('msearch'))->get()->first();
        $borrower = Borrower::where('bcode', request('bcode'))->get()->first();

        //dd($borrower);

        return view('store.borrowedmat.create', compact('material', 'borrower'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //dd(request()->all());

        $material = Material::findOrFail($request->material_id);

        $material->department = $request->input('department');
        $material->materialsname = $request->input('materialsname');
        $material->materialsserialnumber = $request->input('materialsserialnumber');
        $material->quantity = $request->input('quantity');
        $material->condition = $request->input('condition');
        $material->shelfnumber = $request->input('shelfnumber');
        $material->storenumber = $request->input('storenumber');
        $material->date = $request->input('date');

        $material->update($request->all());

        return back();
    }

    public function destroy(Request $request)
    {
        //dd(request()->all());

        $material = Material::findOrFail($request->material_id);
        $material->delete();

        return back();

    }
}
