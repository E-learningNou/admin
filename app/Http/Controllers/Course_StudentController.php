<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;
use App\Http\Requests\Course_StudentRequest;
use App\Models\Course_Student;
use Illuminate\Support\Facades\Auth;


class Course_StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $enroll=Course_Student::join('courses','course__students.course_id','=','courses.id')
      ->join('students','course__students.student_id','=','students.id')
      ->select('courses.name as course','students.name as student','course__students.*')->get();

        return view('Pages.enrollment.AllEnrollments',compact('enroll'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

            // Fetch courses and students to populate the form

            $courses = Course::all();
            $students = Student::all();

           if(Auth::user()->role =='admin'){

            return view('Pages.enrollment.enroll', compact('courses', 'students'));
           }

           else{
            return view('front.pages.studentregester', compact('students', 'courses'));

           }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Course_StudentRequest $request)
    {
        $enro=Course_Student::create($request->validated());
        if(Auth::user()->role =='admin'){
            return redirect()->route('enrolls.index');
        }
        elseif(Auth::user()->role == 'user')
        {
            return redirect()->route('lesson.show');
        }


    }

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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course_Student $enroll)
    {
         $enroll->delete();
         return  redirect()->route('enrolls.index');
    }
}
