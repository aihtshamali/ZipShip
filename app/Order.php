<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function bid(){
      return $this->belongsTo('App\Bid');
    }
    public function user(){
      return $this->belongsTo('App\User');
    }
}
