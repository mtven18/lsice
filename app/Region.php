<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = ['country_id', 'name', 'code'];

    public function country()
    {
    	return $this->belongsTo('App\Country');
    }

    public function users()
    {
    	return $this->hasMany('App\User');
    }
}
