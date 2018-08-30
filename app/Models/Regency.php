<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regency extends Model
{
    public function districts()
    {
        return $this->hasMany('App\Models\District');
    }

    public function province()
    {
        return $this->belongsTo('App\Models\Province');
    }
}
