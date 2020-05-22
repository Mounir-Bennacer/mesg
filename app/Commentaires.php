<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaires extends Model
{
    public function user(){
        return $this->belongsTo(App\User);
    }

    public function mesg(){
        return $this->belongsTo(App\Mesg);
    }
}
