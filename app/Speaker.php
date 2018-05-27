<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    protected $fillable = ['nombre'];

    public function charlas(){

        return $this->hasMany('App\Charla')-withTimestamps();

    }
}
