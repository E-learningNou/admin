<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;

class StudentRegistrationController extends Controller
{
    public function index()
    {
        $users = User::all();
        $courses = Course::all();
        return view('front.pages.studentregester', compact('users', 'courses'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
        ]);

        $user = User::find($request->student_id);
        $course = Course::find($request->course_id);

        // Enroll student in course
        $user->courses()->attach($course);

        return redirect()->back()->with('success', 'Student enrolled in course successfully!');
    }
}
