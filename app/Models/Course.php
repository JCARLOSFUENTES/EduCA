<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'category_id', 'slug'];

    // Un Curso tiene una categoria
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Un Curso tiene muchas Lecciones
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

}
