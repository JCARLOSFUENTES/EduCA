<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Una Categoria tiene muchos cursos
    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    // Una Categoria pertenece a muchos usuarios
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
