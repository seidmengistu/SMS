<?php

namespace App\Http\Controllers\Other;

use App\Http\Controllers\Controller;
use App\Other;
use Illuminate\Http\Request;

class OtherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $arr['others'] = Other::paginate(6);

        return view('campus.other.index')->with($arr);
    }

    public function create()
    {
        $ran = str_pad(mt_rand(0, 999), 3, '0', STR_PAD_LEFT);
        return view('campus.other.create', compact('ran'));
    }

    public function store(Request $request)
    { //dd(request()->all());
        $other = new Other();
        $other->code = $request->input('code');
        $other->fullname = $request->input('fullname');
        $other->idnumber = $request->input('idnumber');
        $other->serialnumber = $request->input('serialnumber');
        $other->mark = $request->input('mark');
        $other->date = $request->input('date');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/ima/', $filename);
            $other->image = $filename;

        } else {
            return $request;

            $ima->image = '';
        }

        $other->save();

        return back()->with('status', 'New Other User Laptop Added Sucessfully');

    }

    public function show(Request $request)
    {
        $other = Other::where('code', request('show'))->get();
        return view('campus.other.show')->with('other', $other);
    }

    public function edit($id)
    {
        //
    }
    public function update(Request $request)
    {

        $other = Other::findOrFail($request->other_id);

        $other->fullname = $request->input('fullname');
        $other->idnumber = $request->input('idnumber');
        $other->serialnumber = $request->input('serialnumber');
        $other->mark = $request->input('mark');
        $other->date = $request->input('date');
        $other->update($request->all());

        return back();
    }

    public function destroy(Request $request)
    {

        $other = Other::findOrFail($request->other_id);
        $other->delete();

        return back();

    }
}
