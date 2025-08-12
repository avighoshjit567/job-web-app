<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobPost extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'category_id','title', 'slug', 'description', 'company_name', 'location', 'employment_type',
        'experience_level', 'education_level', 'salary', 'vacancy', 'application_deadline',
        'contact_email', 'status', 'image', 'user_id',
    ];

    public function category()
    {
        return $this->belongsTo(JobCategory::class, 'category_id');
    }

}