<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['booking_id', 'status', 'amount', 'payment_method'];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}

