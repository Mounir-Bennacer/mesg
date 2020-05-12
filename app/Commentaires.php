<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaires extends Model
{
    public function user(){
        return $this->belongsTo(App\User);
    }

    public function mesgs(){
        return $this->belongsTo(App\Mesgs);
    }
}
