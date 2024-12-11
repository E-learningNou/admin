<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Http\Requests\CourseRequest;
use Illuminate\Http\Request;


class CourseController extends Controller
{
    //
        public function index()
    {
        $courses = Course::where('available', true)->get();
        return view('front.pages.courses', compact('courses'));
    }
    public function create()
    {
        //
        return view('Pages.courses.AddCourse');
    }
    public function store(CourseRequest $request)
    {
        $course=Course::create($request->validated());
        return  redirect()->route('courses.index');
    }


    // Show details of a single course
    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('courses.show', compact('course'));
    }

    public function edit($id)
    {
        $course=Course::findOrFail($id);
        return view('Pages.courses.courseEdit',compact('course'));
    }
    public function update(CourseRequest $request, $id)
    {

        $course = Course::findOrFail($id);
        $l=$request->validated();

        $course->update($l);

        return redirect()->route('courses.index');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index');

        //
    }
}
