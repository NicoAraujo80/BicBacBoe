<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function bics()
    {
        return $this->hasMany('App\Bic');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
