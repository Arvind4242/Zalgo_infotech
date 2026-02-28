<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
     protected $fillable = [
        'job_type',
        'name',
        'email',
        'phone',
        'experience',
        'degree',
        'skills',
        'cover_letter',
        'extra_details',
        'resume'
    ];

    protected $casts = [
        'skills' => 'array',
    ];
}
