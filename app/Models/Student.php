<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
<<<<<<< HEAD
    use HasFactory;
    protected $fillable=[
        'name',
        'age',
        'phone',
        'email',
        'image',
         'password',
    ];
    public function Courses()

        {
            return $this->belongsToMany(Course::class, 'course_student', 'student_id', 'course_id');
        }
=======
    protected $fillable = ['name', 'email'];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'enrollments');
    }
    use HasFactory;
>>>>>>> front/main

}
