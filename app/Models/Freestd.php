<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Freestd extends Model
{
    Use HasFactory;

    protected $fillable = [
        'title',
        'image',
    ];
}
