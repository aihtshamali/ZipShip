<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    public function bid(){
      return $this->hasMany('App\Bid');
    }
    public function user(){
      return $this->belongsTo('App\User');
    }
}
