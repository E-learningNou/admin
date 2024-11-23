<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
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

}
