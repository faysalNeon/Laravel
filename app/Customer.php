<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Customer extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'name','username', 'email', 'password','mobile'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'mobile_verified_at' => 'datetime',
        'email_verified_at' => 'datetime',
    ];
}
