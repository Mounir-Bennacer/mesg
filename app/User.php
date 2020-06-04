<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','nom', 'prenom','nni',
        'gaia','telephone','email',
        'password','groupe_technique_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function commentaire(){
        return $this->hasMany(Commentaires::class);
    }
    // public function setPasswordAttribute($value){
    //     if(\Hash::needsRehash($value)){
    //         $hashed = \Hash::make($value);
    //     }
    //     $this->attributes['password'] = $hashed;
    // }
    public function groupe_technique()
    {
        return $this->belongsTo(GroupeTechnique::class);
    }

    public function mesg()
    {
        return $this->hasMany(Mesg::class);
    }
}
