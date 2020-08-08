<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use CheckActive;
    protected $fillable = [
        'name', 'email', 'password'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends=['details'];

    public function getDetailsAttribute($data){
        return $this->attributes['id'].'#'.$this->attributes['name'];
    }

    public function getEmailAttribute($data){
        return $data;
    }

    public function setEmailAttribute($data){
        $this->attributes['email']=$data;
    }

    public function setPasswordAttribute($data){
        $this->attributes['password']=bcrypt($data);
    }

}
