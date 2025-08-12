<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobCategory extends Model
{
    use SoftDeletes;
    protected $fillable = ['title','slug','user_id'];

    public function jobs()
    {
        return $this->hasMany(JobPost::class, 'category_id');
    }
}