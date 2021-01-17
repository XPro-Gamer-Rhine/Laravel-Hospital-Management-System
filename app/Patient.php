<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function doctors(){
    	return $this->belongsToMany('App\Doctor');
    }
}
