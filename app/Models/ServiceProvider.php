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

    // in User model or Provider model
    public function getIsOnlineAttribute()
    {
        return Cache::has('user-is-online-' . $this->id);
    }
}
