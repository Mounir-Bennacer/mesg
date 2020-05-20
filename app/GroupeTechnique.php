<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupeTechnique extends Model
{
    public function user()
    {
        return $this->hasMany('App\User');
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
