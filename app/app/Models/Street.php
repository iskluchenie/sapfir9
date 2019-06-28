<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Street extends Model
{

    public function house()
    {
        return $this->hasMany(House::class);
    }

    public function town()
    {
        return $this->belongsTo(Town::class);
    }
}
