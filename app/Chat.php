<?php

namespace App;
// use User;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
   public function user(){
     return $this->belongsToMany('App\User');
   }
   public function sender($id){
     // dd($id);
     return User::find($id);
   }
}
