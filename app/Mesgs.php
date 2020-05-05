<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesgs extends Model
{
    public function toArray()
    {
        $data = [
             'id' => $this->id,
             'description' => $this->description,
             'num' => $this->num,
             'programme' => $this->programme,
             'pce' => $this->pce,
             'nb_pce' => $this->nb_pce,
             'batiment' => $this->batiment,
             'commune' => $this->commune
        ];
        return $data;
    }

    /**
     * A Mesgs can have multiple users
     *
     * @return relationship
     */
    public function user(){
        return $this->hasMany('User');
    }


}
