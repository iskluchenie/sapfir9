<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrance extends Model
{
    protected $guarded = [];


    public function house()
    {
        return $this->belongsTo(House::class);
    }
}
