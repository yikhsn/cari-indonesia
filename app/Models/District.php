<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function villages()
    {
        return $this->hasMany('App\Models\Village');
    }

    public function regency()
    {
        return $this->belongsTo('App\Models\Regency');
    }
}
