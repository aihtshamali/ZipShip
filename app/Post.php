<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Post extends Model
{
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function bids($id){
      return  DB::select(DB::raw("SELECT bids.*,
      (SELECT COUNT(bids.id)
          FROM bids
          WHERE bids.post_id = $id) AS bids_count
          FROM bids
      "));
    }
    public function bid(){
      return $this->hasMany('App\Bid');
    }
    public function getuser($id){
      return User::find($id);
    }
}
