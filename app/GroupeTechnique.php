<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Mesg;

class GroupeTechnique extends Model
{
    protected $fillable = ['title','description'];

    /**
     * User Relationship
     *
     * @return User
     */
    public function user()
    {
        return $this->hasMany(User::class);
    }

    /**
     * Mesg relationship
     *
     * @return Mesg
     */
    public function mesg()
    {
        return $this->hasMany(Mesg::class);
    }

    public function toArray()
    {
        $data = [
            'id' => $this->id,
            'gtc' => $this->title,
            'ville' => $this->description
        ];
        return $data;
    }


}
