<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class Payment extends Model
{
    protected $fillable =[
        'card_name',
        'card_number',
        'expire_date',
        'ccv'
    ];
    public function setCardNumberAttribute($value)
    {
        $this->attributes['card_number'] = Crypt::encryptString($value); //AES-256 encryption
    }

    public function getCardNumberAttribute($value)
    {
        return Crypt::decryptString($value); //AES-256 encryption
    }

    public function setExpireDateAttribute($value)
    {
        $this->attributes['expire_date'] = Crypt::encryptString($value); //AES-256 encryption
    }

    public function getExpireDateAttribute($value)
    {
        return Crypt::decryptString($value); //AES-256 encryption
    }

    public function setCcvAttribute($value)
    {
        $this->attributes['ccv'] = Crypt::encryptString($value);
    }

    public function getCcvAttribute($value)
    {
        return Crypt::decryptString($value);
    }
}