<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use App\Models\Course;

class StudentController extends Controller
{
    public function create()
    {
        $courses = Course::all();
        return view('student.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $request-validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'course_id' => 'required|exists:course,id'

        ]);

        Student::create([
            'first_name' => $request ->first_name,
            'last_name' => $request -> last_name,
            'course_id' => request -> course_id
        ]);

        return redirect()->back()->with('success', 'student added successfully..');
    }
}
