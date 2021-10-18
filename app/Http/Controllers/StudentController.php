<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student ;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::orderBy('id', 'DESC')->get();
        return view('ajaxCrud/students',compact('students'));
    }
    public function create(Request $request)
    {
        $student = new Student;
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();
        return response()->json($student);
        //return redirect()->back();
    }
    public function delete($id){
        Student::where('id', $id)->delete();
        return response()->json(['success'=>'Record Deleted Successfully']);
    }
    public function edit($id){
        $edit_student = Student::where('id', $id)->first();
        return response()->json($edit_student);
    }
    public function update(Request $request)
    {  
        $student = Student::where('id', $request->id)->first();
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();
        // return redirect()->back();
        return response()->json($student);
    }

}
