<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
        protected $fillable = [
        'nic',
        'gender',
        'date_of_birth',
        'email',
        'phone_number',
        'location',
        // 'img'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
