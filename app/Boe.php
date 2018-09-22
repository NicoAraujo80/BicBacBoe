<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boe extends Model
{
    public function bac()
    {
        return $this->belongsTo('App\Bac');
    }
}
