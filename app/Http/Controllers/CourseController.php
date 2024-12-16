<?php

namespace App\Http\Controllers;
<<<<<<< HEAD

use App\Http\Requests\CourseRequest;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $course=Course::paginate(2);
        return view('Pages.courses.AllCourses',compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
=======
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
>>>>>>> front/main
    public function create()
    {
        //
        return view('Pages.courses.AddCourse');
    }
<<<<<<< HEAD

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
=======
>>>>>>> front/main
    public function store(CourseRequest $request)
    {
        $course=Course::create($request->validated());
        return  redirect()->route('courses.index');
    }

<<<<<<< HEAD
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
=======

    // Show details of a single course
    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('courses.show', compact('course'));
    }

>>>>>>> front/main
    public function edit($id)
    {
        $course=Course::findOrFail($id);
        return view('Pages.courses.courseEdit',compact('course'));
    }
<<<<<<< HEAD

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
=======
>>>>>>> front/main
    public function update(CourseRequest $request, $id)
    {

        $course = Course::findOrFail($id);
        $l=$request->validated();

        $course->update($l);

        return redirect()->route('courses.index');
    }

<<<<<<< HEAD
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
=======
>>>>>>> front/main
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index');

        //
    }
}
