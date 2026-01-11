<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    function add(Request $request)
    {
        $student = new Student;
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');
        $student->save();
        if ($request) {
            return redirect('list');
        } else {
            return 'failed to add';
        }
    }
    function list()
    {
        $studentData = Student::all(); // Fetch all records from the students table using the Student model

        return view('list-student', ['students' => $studentData]);
    }

    function delete($id)
    {
        $isDeleted = Student::destroy($id);
        if ($isDeleted) {
            return redirect('list');
        }
    }
}
