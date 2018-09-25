<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function bics()
    {
        return $this->hasMany('App\Bic');
    }
}
