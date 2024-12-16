<?php

namespace App\Http\Controllers;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index()
    {
        return view('front.pages.lesson');
    }
    public function show($id)
    {
        // Retrieve the lesson by ID from the database
        $lesson = Lesson::findOrFail($id);

        // Pass the lesson data to the 'lesson' view
        return view('lesson', compact('lesson'));
    }

    //
}
