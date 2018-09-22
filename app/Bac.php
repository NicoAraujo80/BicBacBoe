<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bac extends Model
{
    public function bic()
    {
        return $this->belongsTo('App\Bic');
    }

    public function boes()
    {
        return $this->hasMany('App\Boe');
    }
}
