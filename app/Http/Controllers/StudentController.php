<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use App\Models\Student;

class StudentController extends Controller
{
    public function student_index()
    {
        return view('students/index')->with(['students' => $student->subjects]);
    }
    
    public function store(Request $request, Student $student)
    {
        $input_student = $request['student'];
        $input_subjects = $request->subjects_array;
        
        $student->fill($input_student)->save();
        
        $student->subjects()->attach($input_subjects);
        return redirect('/students');
    }
}