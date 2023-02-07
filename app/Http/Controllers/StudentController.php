<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $data = student::paginate(10);
        return view('students.student', ['students'=>$data]);
    }

    public function delete($id) {
        $data = student::find($id);
        $data->delete();
        return redirect('student');
    }

    public function add(Request $request) {
        $shine = new student;

        $shine->std_name=$request->std_name;
        $shine->std_course=$request->std_course;
        $shine->std_fee=$request->std_fee;

        $shine->save();

        return redirect('student');
    }

    public function show($id) {
        $data = student::find($id);
        return view('students.update', ['students'=>$data]);
    }

    public function update(Request $request) {

        $shine = student::find($request->id);

        $shine->std_name=$request->std_name;
        $shine->std_course=$request->std_course;
        $shine->std_fee=$request->std_fee;

        $shine->save();

        return redirect('student');
    }

    public function send(Request $request) {
        return $request->file('file')->store('docs');
    }   
}
