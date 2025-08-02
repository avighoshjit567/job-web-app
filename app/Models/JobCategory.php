<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    protected $fillable = ['title','slug','user_id'];

    public function jobs()
    {
        return $this->hasMany(JobPost::class, 'category_id');
    }
}