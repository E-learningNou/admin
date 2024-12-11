<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable=[
        'quiz_id',
        'Question',

    ];
    public function Quizzes(){

        return $this->belongsTo(Quiz::class);
    }
    public function Answers(){
        return $this->hasMany(Answer::class);
    }
}
