<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

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
        'description',
        // 'img',
    ];
}
