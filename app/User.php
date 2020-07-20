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

    public function getUserFullName()
    {
        return $this->hasFirstNameAndLastName() ?
               $this->getFirstNameAndLastNameString() :
               $this->getFirstNameOrLogin();
    }

    public function getFirstNameOrLogin()
    {
        return $this->first_name ?? $this->login;
    }

    public function hasFirstNameAndLastName():bool
    {
        return $this->first_name && $this->last_name;
    }

    public function getFirstNameAndLastNameString()
    {
        return $this->hasFirstNameAndLastName() ?
              ("{$this->first_name} {$this->last_name}") : false;
    }

    public function getUserAvatar()
    {
        $email = strtolower( trim($this->email) );
        $size = 170;

        return "https://www.gravatar.com/avatar/". md5($email) . '?d=mm' . '&s='. $size;
    }

    public function friendsOfMine()
    {
        return $this->belongsToMany(User::class, 'friends', 'user_id', 'friend_id');
    }

    public function friendOf()
    {
        return $this->belongsToMany(User::class, 'friends', 'friend_id', 'user_id');
    }

    public function friends()
    {
        return $this->friendsOfMine()->wherePivot('accepted', true)->get()
           ->merge( $this->friendOf()->wherePivot('accepted', true)->get());
    }

    public function friendRequest()
    {
        return $this->friendOf()->wherePivot('accepted', false)->get();
    }

}
