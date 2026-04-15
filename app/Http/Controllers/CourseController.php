<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Course;
class CourseController extends Controller
{
    public function create()
    {
    return view('course.create');
    }
        public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required',
            'description' => 'nullable'
        ]);
        Course::create([
            'course_name' => $request->course_name,
            'description' => $request->description
        ]);
        return redirect()->back()->with('success', 'Course added successfully.');
    }
}