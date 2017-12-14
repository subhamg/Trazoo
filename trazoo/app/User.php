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

    protected $table='users';
    protected $fillable = [
        'firstname','lastname', 'email','phoneno', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function is_admin(){
        if($this->role=="admin"){
            return true;
        }
        return false;
    }

    public function is_user(){
        if($this->role=="user"){
            return true;
        }
        return false;
    }

    public function is_blocked(){
        if($this->isBlocked==1){
            return true;
        }
        return false;
    }

    public function is_notApproved(){
        if($this->isApproved==0){
            return true;
        }
        return false;
    }
}
