<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {

        $arr['students'] = Student::paginate(5);


        return view('campus.student.index')->with($arr);

    }

   
    public function create()
    {
        $ran = str_pad(mt_rand(0, 999), 3, '0', STR_PAD_LEFT);
        return view('campus.student.create', compact('ran'));
    }

   
    public function store(Request $request)
    { //dd(request()->all());
        $student = new Student();
        $student->code = $request->input('code');
        $student->fullname = $request->input('fullname');
        $student->idnumber = $request->input('idnumber');
        $student->serialnumber = $request->input('serialnumber');
        $student->mark = $request->input('mark');
        $student->program = $request->input('program');
        $student->year = $request->input('year');
        $student->department = $request->input('department');
        $student->date = $request->input('date');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/ima/', $filename);
            $student->image = $filename;

        } else {
            return $request;

            $ima->image = '';
        }

        $student->save();

        return back()->with('status', 'New Student Laptop Added Sucessfully');

    }

    
      public function show(Request $request)
    {
        $student=Student::where('code',request('show'))->get();
        return view('campus.student.show')->with('student',$student);
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request)
    {

        $student = Student::findOrFail($request->student_id);

        $student->fullname = $request->input('fullname');
        $student->idnumber = $request->input('idnumber');
        $student->serialnumber = $request->input('serialnumber');
        $student->mark = $request->input('mark');
        $student->program = $request->input('program');
        $student->year = $request->input('year');
        $student->department = $request->input('department');
        $student->date = $request->input('date');

        $student->update($request->all());

        return back();
    }

   
    public function destroy(Request $request)
    {
        //dd(request()->all());

        $student = Student::findOrFail($request->student_id);
        $student->delete();

        return back();

    }

}
