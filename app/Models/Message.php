<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    Use HasFactory;

    protected $fillable = [
        'image', 'title', 'message_text', 'description'
    ];
}
