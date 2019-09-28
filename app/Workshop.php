<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    //
    public function workshopUser(){
        return $this->belongsTo(User::class,'uid');
    }
}
