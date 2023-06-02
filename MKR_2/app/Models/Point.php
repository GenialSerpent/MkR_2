<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;

    protected $fillable = ['subject', 'score', 'date', 'student_id'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}

