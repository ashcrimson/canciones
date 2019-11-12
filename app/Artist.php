<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Song;

class Artist extends Model
{
    public function songs() 
    {
        return $this->hasMany('App\Song');
    }
}
