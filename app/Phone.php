<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $hidden = array(
    'id',
    'created_at',
    'updated_at'
    );
    public function scopeSearchState($query, $state){
    	if($state) $query->where('st', 'like', $state);
    }
    public function scopeSearchCity($query, $city){
    	if($city) $query->where('city', 'like', $city);
    }
    public function scopeSearchGender($query, $gender){
    	if($gender) $query->where('gender', 'like', $gender);
    }
}

