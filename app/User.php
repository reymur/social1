<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'login', 'email', 'password', 'first_name', 'last_name', 'location',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getUserFullNames()
    {
        return $this->isFirstNameAndLastName() ?
               $this->getFirstNameAndLastName() :
               $this->getFirstNameOrLogin();
    }

    public function getFirstNameOrLogin()
    {
        return $this->first_name ?? $this->login;
    }

    public function isFirstNameAndLastName()
    {
        return ($this->first_name && $this->last_name) ?? false;
    }

    public function getFirstNameAndLastName()
    {
        return $this->isFirstNameAndLastName() ?
              "{$this->first_name} {$this->last_name}" : false;
    }

}
