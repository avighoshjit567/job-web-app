<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobApply extends Model
{
    use SoftDeletes;
    public function jobPost()
    {
        return $this->belongsTo(\App\Models\JobPost::class, 'job_id');
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
