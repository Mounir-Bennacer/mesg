<?php


use Illuminate\Database\Eloquent\Model;
namespace LaMere;
class Mesg extends Model
{
    protected $fillable = [
            'programme',
            'num',
            'nb_pce',
            'nb_sg',
            'adresse',
            'code_postal',
            'commune',
            'batiment',
            'gtc_id',
            'charge_affaire_id',
            'delai',
            'date_reception_mail',
            'date_reception_cm',
            'date_souhaite',
            'user_id'
        ];

    public function toArray()
    {
        $data = [
            'id' => $this->id,
            'programme'=>$this->programme,
            'num'=>$this->num,
            'nb_pce'=>$this->nb_pce,
            'nb_sg'=>$this->nb_sg,
            'adresse'=>$this->adresse,
            'code_postal'=>$this->code_postal,
            'commune'=>$this->commune,
            'batiment'=>$this->batiment,
            'gtc_id'=>$this->gtc_id,
            'charge_affaire_id'=>$this->charge_affaire_id,
            'delai'=>$this->delai,
            'date_reception_mail'=>$this->date_reception_mail,
            'date_reception_cm'=>$this->date_reception_cm,
            'date_souhaite'=>$this->date_souhaite,
            'user_id'=>$this->user_id
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
