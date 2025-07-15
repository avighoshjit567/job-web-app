<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    protected $fillable = [
        'title', 'slug', 'description', 'company_name', 'location', 'employment_type',
        'experience_level', 'education_level', 'salary', 'vacancy', 'application_deadline',
        'contact_email', 'status', 'image', 'user_id',
    ];

}