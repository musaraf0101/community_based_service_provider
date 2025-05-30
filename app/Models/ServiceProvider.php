<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
        protected $fillable = [
        'full_name',
        'nic',
        'gender',
        'date_of_birth',
        'profession',
        'email',
        'phone_number',
        'location',
        // 'img',
    ];
}
