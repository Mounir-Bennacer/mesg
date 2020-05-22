<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesg extends Model
{
    protected $fillable = ['num','programme','pce','nb_sg','nb_pce','batiment','commune', 'code_postal','adresse','date_reception_mail','date_reception_cm','delai','date_souhaite'];


    public function toArray()
    {
        $data = [
            'id' => $this->id,
            'batiment' => $this->batiment,
            'num' => $this->num,
            'adresse' => $this->adresse,
            'code_postal' => $this->code_postal,
            'commune' => $this->commune,
            'programme' => $this->programme,
            'nb_pce' => $this->nb_pce,
        ];
        return $data;
    }

    /**
     * A Mesg can have multiple users
     *
     * @return relationship
     */
    public function user(){
        return $this->hasMany('User');
    }

    public function chargeAffaires()
    {
        return $this->hasOne('App\ChargeAffaire');
    }


}
