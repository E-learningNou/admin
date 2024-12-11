<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;

class StudentRegistrationController extends Controller
{
    public function index()
    {
        $students = Student::all();
        $courses = Course::all();
        return view(' front.pages.studentregester', compact('students', 'courses'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
        ]);

        $student = Student::find($request->student_id);
        $course = Course::find($request->course_id);

        // Enroll student in course
        $student->courses()->attach($course);

        return redirect()->back()->with('success', 'Student enrolled in course successfully!');
    }
}
