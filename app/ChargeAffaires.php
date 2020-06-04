<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChargeAffaires extends Model
{
    public function mesg()
    {
        return $this->hasMany(Mesg::class);
    }
}
