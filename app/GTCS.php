<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GTCS extends Model
{
  public function user(){
    return $this->hasMany('App\User');
  }
}
