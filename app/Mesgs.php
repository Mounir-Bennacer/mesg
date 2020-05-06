<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesgs extends Model
{
    protected $fillable = ['description','num','programme','pce','nb_sg','nb_pce','batiment','commune', 'adresse','date_reception_mail','date_reception_cm','delai','date_souhaite'];


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
