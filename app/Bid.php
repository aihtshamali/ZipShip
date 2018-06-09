<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    public function post(){
      return $this->belongsTo('App\Post');
    }
    public function flight(){
      return $this->belongsTo('App\Flight');
    }
    public function user(){
      return $this->belongsTo('App\User');
    }
}
