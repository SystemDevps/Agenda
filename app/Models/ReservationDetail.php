<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservationDetail extends Model
{
    protected $table = 'reservation_details';

    protected $fillable = [
        'reservation_id',
        'transaction_id',
        'payer_id',
        'payer_email',
        'payment_status',
        'amount',
        'response_json',
    ];

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }

   
}
