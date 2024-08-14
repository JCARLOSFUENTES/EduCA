<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'course_id', 'slug'];

    // Una Lección tiene un Curso
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
