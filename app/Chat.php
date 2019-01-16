<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class Chat extends Model
{
    use SyncsWithFirebase;

   protected $fillable = ['sender_id','reciever_id','text'];
   protected $visible = ['id','sender_id','reciever_id','text','created_at'];

   public function user(){
     return $this->belongsToMany('App\User');
   }
   public function sender($id){
     return User::find($id);
   }
}
