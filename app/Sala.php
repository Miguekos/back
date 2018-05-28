<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $fillable = ['nombre','cant_max'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function charlas(){

        return $this->hasMany('App\Charla')-withTimestamps();

    }
}
