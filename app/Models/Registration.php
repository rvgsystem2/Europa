<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Registration extends Model
{
    Use HasFactory;

    protected $fillable = ['name', 'email', 'contact_number', 'principal_name', 'principal_mobile_number', 'principal_email_id', 'school_name', 'school_address', 'school_city', 'school_state', 'school_pincode', 'country'];

}
