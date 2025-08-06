<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'business_name',
        'phone',
        'address',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'service_provider_id');
    }
    public function pendingBookings()
    {
        return $this->bookings()->where('status', 'pending');
    }

    public function completedBookings()
    {
        return $this->bookings()->where('status', 'completed');
    }
}
