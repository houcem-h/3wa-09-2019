<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //protected $table = 'customers';
    //protected $primaryKey = 'ncin';
    //public $incrementing = false;
    //public $timestamps = false;

    protected $guarded  = [];

    public function comptes()
    {
        return $this->hasMany('App\Compte', 'titulaire');
    }
}
