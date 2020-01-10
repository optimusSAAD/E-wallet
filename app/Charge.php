<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{
    protected $fillable = [
        'amount_to',
        'amount_from',
        'sending_rate',
        'receiving_rate',
        'status',
    ];
    public function funds()
    {
        return $this->belongsTo(Fund::class);
    }
}
