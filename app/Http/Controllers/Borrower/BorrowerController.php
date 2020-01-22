<?php

namespace App\Http\Controllers\Borrower;

use App\Borrower;
use App\Http\Controllers\Controller;
use App\Material;
use Illuminate\Http\Request;

class BorrowerController extends Controller
{

    public function index()
    {
        $arr['borrowers'] = Borrower::paginate(6);

        return view('store.borrower.index')->with($arr);
    }

    public function create()
    {
        $ran = str_pad(mt_rand(0, 999), 3, '0', STR_PAD_LEFT);
        return view('store.borrower.create', compact('ran'));

    }

    public function store(Request $request)
    {
        //dd(request()->all());

        $borrower = new Borrower();
        $borrower->bcode = $request->input('bcode');
        $borrower->bfullname = $request->input('bfullname');
        $borrower->badress = $request->input('badress');

        $borrower->bphonenumber = $request->input('bphonenumber');
        $borrower->boccupation = $request->input('boccupation');

        $borrower->date = $request->input('date');
        $borrower->save();

        return back()->with('status', 'New Borrower Added Sucessfully');
    }

    public function show(Request $request)
    {
        $borrower = Borrower::where('bcode', request('show'))->get()->first();
        $material = Material::where('materialsname', request('msearch'))->get()->first();

        return view('store.borrowedmat.create', compact('borrower', 'material'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //dd(request()->all());

        $borrower = Borrower::findOrFail($request->borrower_id);

        $borrower->bfullname = $request->input('bfullname');
        $borrower->badress = $request->input('badress');
        $borrower->bdepartemnt = $request->input('bdepartment');
        $borrrower->bphonenumber = $request->input('bphonenumber');
        $borrower->boccupation = $request->input('boccupation');
        $borrower->date = $request->input('date');

        $borrower->update($request->all());

        return back();
    }

    public function destroy(Request $request)
    {
        $borrower = Borrower::findOrFail($request->borrower_id);
        $borrower->delete();

        return back();
    }
}
