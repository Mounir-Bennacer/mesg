<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charge_Affaires extends Model
{
    public function mesg()
    {
        return $this->hasMany('App\Mesgs');
    }
}
