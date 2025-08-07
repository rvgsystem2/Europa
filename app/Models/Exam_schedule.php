<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Exam_schedule extends Model
{
    Use HasFactory;

    protected $fillable = ['exam_name', 'exam_date', 'image'];

}
