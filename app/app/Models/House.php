<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $guarded = [];


    public function entrance()
    {
        return $this->hasMany(Entrance::class);
    }

    public function street()
    {
        return $this->belongsTo(Street::class);
    }

}

