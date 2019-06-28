<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    public function street()
    {
        return $this->hasMany(Street::class);
    }
}
