<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Fund
 * @package App
 *
 * @property string $image
 * @property string $image_url
 *
 */
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
    protected $guarded = [];

    public function charges()
    {
        return $this->hasMany(Charge::class);
    }

    public function getImageUrlAttribute()
    {
        return url('funds/' . $this->image);
    }
}
