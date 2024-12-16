<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
class Course extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'description',
        'instructor',

    ];
    public function Students()

    {
        return $this->belongsToMany(Student::class, 'course_student', 'course_id', 'student_id');
    }
}
=======

    class Course extends Model
{
    protected $fillable = ['course_name', 'description'];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'enrollments');
    }
      use HasFactory;
}



>>>>>>> front/main
