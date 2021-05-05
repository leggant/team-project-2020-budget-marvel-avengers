<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
   
    public function index()
    {
        $student = Student::all();
        return view('pages/students.student',['student'=>$student]);
    }
    
    public function create()
    {
        return view('pages/students.create_student');
     
    }


    public function store(Request $request)
    {
       Student::create($request->all());
        return redirect('students');
    }

    public function show($id)
    {
        //
    }


    public function edit(Student $student)
    {
        return view('pages/students.edit_student',compact('student'));
    }

    public function update(Request $request, $id)
    {
        $students = Student::query();
        if ($students->where('id', $id)->exists()) {
            $student = $students->find($id);
            $student->studentID = is_null($request->studentID) ? $student->studentID : $request->studentID;
            $student->first_name = is_null($request->first_name) ? $student->first_name : $request->first_name;
            $student->last_name = is_null($request->last_name) ? $student->last_name : $request->last_name;
            $student->student_username = is_null($request->student_username) ? $student->student_username : $request->student_username;
            $student->github_username = is_null($request->github_username) ? $student->github_username : $request->github_username;
            $student->student_email = is_null($request->student_email) ? $student->student_email : $request->student_email;
            $student->save();
            return redirect('students');
        }
    }

    public function destroy($id)
    {
        $students = Student::query();
        if ($students->where('id', $id)->exists()) {
            $student = $students->find($id);
            $student->delete();
            return redirect('students');
        }
    }
}
