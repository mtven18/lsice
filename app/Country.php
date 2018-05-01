<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name', 'iso_code_2', 'iso_code_3'];

    public function regions()
    {
    	return $this->hasMany('App\Region');
    }
}
