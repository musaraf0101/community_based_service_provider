<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class ServiceProvider extends Model
{
    protected $fillable = [
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


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
