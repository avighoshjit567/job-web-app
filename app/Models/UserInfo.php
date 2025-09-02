<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserInfo extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'mobile',
        'date_of_birth',
        'address',
        'bio',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
