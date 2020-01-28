<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_send_fund_amount',
        'user_receive_fund_amount',
        'user_receive_fund_account',
        'user_total_pay',
        'user_transaction_id',
        'user_contact',
        'note',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
