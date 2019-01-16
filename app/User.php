<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','lastname','address','phone', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Relations

    public function chat(){
      return $this->hasMany('App\Chat');
    }
    public function post(){
      return $this->hasMany('App\Post');
    }
    public function bid(){
      return $this->hasMany('App\Bid');
    }
    public function flight(){
      return $this->hasMany('App\Flight');
    }
    public function credit_info(){
      return $this->hasOne('App\CreditInfo');
    }
    public function order(){
      return $this->hasMany('App\Order');
    }

}
