<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array(
        'name', 'email', 'password', 'career','banner','profile_photo', 'admin'
    );
    
    private $name;
    private $email;
    private $password;
    private $career;
    private $banner;
    private $profile_photo;
    private $admin;

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


    public function posts(){
        //Un usuario puede tener muchas publcaciones.
        //return $this->belongsToMany('App\Publication', 'id');
        return $this->belongsToMany(POST::class);
    }
}
