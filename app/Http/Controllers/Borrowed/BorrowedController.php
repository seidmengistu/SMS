<?php

namespace App\Http\Controllers\Borrowed;

use App\Borrowed;
use App\Borrower;
use App\Http\Controllers\Controller;
use App\Material;
use Illuminate\Http\Request;

class BorrowedController extends Controller
{

    public function index()
    {
        $arr['borroweds'] = Borrowed::paginate(6);

        return view('store.borrowedmat.index')->with($arr);

    }

    public function create()
    {
        $borrower = Borrower::where('bcode', request('show'))->get()->first();

        $material = Material::where('materialsname', request('msearch'))->get()->first();

        return view('store.borrowedmat.create', compact('borrower', 'material'));

        //return view('store.borrowedmat.create', compact('material'));

    }

    public function store(Request $request)
    {
        //dd(request()->all());

        //dd($request->quantity);
        $borrowed = new Borrowed();
        $borrowed->department = $request->input('department');
        $borrowed->bfullname = $request->input('bfullname');
        $borrowed->badress = $request->input('badress');

        $borrowed->bphonenumber = $request->input('bphonenumber');
        $borrowed->boccupation = $request->input('boccupation');
        $borrowed->materialsname = $request->input('materialsname');
        $borrowed->materialsserialnumber = $request->input('materialsserialnumber');
        $borrowed->quantity = $request->input('quantity');

        $borrowed->condition = $request->input('condition');
        $borrowed->shelfnumber = $request->input('shelfnumber');
        $borrowed->storenumber = $request->input('storenumber');
        $borrowed->date = $request->input('date');
        $borrowed->save();

        return back()->with('status', 'Material Borrowed Sucessfully');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //dd(request()->all());

        $borrowed = Borrowed::findOrFail($request->borrowed_id);

        $borrowed->bfullname = $request->input('bfullname');
        $borrowed->badress = $request->input('badress');
        $borrowed->bphonenumber = $request->input('bphonenumber');
        $borrowed->boccupation = $request->input('boccupation');

        $borrowed->materialsname = $request->input('materialsname');
        $borrowed->materialsserialnumber = $request->input('materialsserialnumber');
        $borrowed->quantity = $request->input('quantity');
        $borrowed->condition = $request->input('condition');
        $borrowed->storenumber = $request->input('storenumber');
        $borrowed->shelfnumber = $request->input('shelfnumber');
        $borrowed->date = $request->input('date');

        $borrowed->update($request->all());

        return back();
    }

    public function destroy(Request $request)
    {
        $borrowed = Borrowed::findOrFail($request->borrowed_id);
        $borrowed->delete();

        return back();
    }
}
