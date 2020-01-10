<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
//    protected $fillable = [
//        'title',
//        'image',
//        'description',
//        'available',
//        'buy',
//        'sell',
//    ];
protected $guarded=[];

    public function charges()
    {
        return $this->hasMany(Charge::class);
    }

    public function afunds()
    {
        return $this->belongsTo(Afund::class);
    }

}
