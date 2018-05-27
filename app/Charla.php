<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charla extends Model
{
    //protected $fillable = ['nombre','fecha'];
    protected $table = 'Charlas';
    protected $fillable = ['nombre','fecha','sala_id','speaker_id'];

    public function sala(){
        return $this->belongsTo(Sala::class);
    }

    public function speaker(){
        return $this->belongsTo(Speaker::class);
    }
}


