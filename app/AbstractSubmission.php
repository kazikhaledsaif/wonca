<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbstractSubmission extends Model
{
    //relationship with user
    public function user(){
        return $this->belongsTo(User::class,'uid');
    }

}
