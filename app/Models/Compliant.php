<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compliant extends Model
{
        protected $fillable =[
        'full_name',
        'service_date',
        'email',
        'phone_number',
        'location',
        'compliant',
        'service_provider_name',
        'profession',
        // 'compliant_img'
    ];
}
