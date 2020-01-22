<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
       // dd(request()->all());

        $arr['teachers'] = Teacher::paginate(6);

        return view('campus.teacher.index')->with($arr);
    }

    
    public function create()
    {
        $ran = str_pad(mt_rand(0, 999), 3, '0', STR_PAD_LEFT);
        return view('campus.teacher.create', compact('ran'));
    }

    
    public function store(Request $request)
    {
        //dd(request()->all());
        $teacher = new Teacher();
        $teacher->code = $request->input('code');
        $teacher->fullname = $request->input('fullname');
        $teacher->idnumber = $request->input('idnumber');
        $teacher->serialnumber = $request->input('serialnumber');
        $teacher->mark = $request->input('mark');
        $teacher->date = $request->input('date');

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/ima/', $filename);
            $teacher->image = $filename;

        } else {
            return $request;

            $ima->image = '';
        }
        

        $teacher->save();

        return back()->with('status', 'New Teacher Laptop Added Sucessfully');

    }

    
    public function show(Request $request)
    {
       
        
//dd($request->all());

        $teacher=Teacher::where('code',request('show'))->get();
        //return ('fghjk');

        //dd($teacher->all());


        return view('campus.teacher.show')->with('teacher',$teacher);
    }

    
    public function edit($id)
    {
        
    }

    public function update(Request $request)
    {

        $teacher = Teacher::findOrFail($request->teacher_id);

        $teacher->fullname = $request->input('fullname');
        $teacher->idnumber = $request->input('idnumber');
        $teacher->serialnumber = $request->input('serialnumber');
        $teacher->mark = $request->input('mark');
        $teacher->date = $request->input('date');
        $teacher->update($request->all());

        return back();
    }

   
    public function destroy(Request $request)
    {
        $teacher = Teacher::findOrFail($request->teacher_id);
        $teacher->delete();

        return back();

    }
}
