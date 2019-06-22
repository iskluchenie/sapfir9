<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrance extends Model
{
    protected $guarded = [];

    protected $with = [
        'house'
    ];

    public function house()
    {
        return $this->belongsTo('App\Models\House');
    }
}
