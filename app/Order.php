<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'sending_fund_amount',
        'receiving_fund_amount',
        'sending_account_info',
        'receiving_account_info',
        'contact',
    ];
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
