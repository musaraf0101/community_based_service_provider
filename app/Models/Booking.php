<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable =[
        'full_name',
        'nic',
        'service_type',
        'email',
        'phone_number',
        'location',
        'date',
        'time'
    ];
}
