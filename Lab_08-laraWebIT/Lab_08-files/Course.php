<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // these are the columns we allow to be filled in one go (create/update)
    protected $fillable = [
        'user_id',
        'course_code',
        'course_name',
        'credit_hours',
        'semester',
    ];
}
