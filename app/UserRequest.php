<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRequest extends Model
{
    protected $fillable = [
        'name',
        'email',
        'telephone',
        'body',
    ];

    protected $table = 'user_requests';
}
