<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bic extends Model
{
    public function game()
    {
        return $this->belongsTo('App\Game');
    }

    public function bacs()
    {
        return $this->hasMany('App\Bac');
    }
}
