<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    public $timestamps = true;
    protected $fillable = [
        'name', 'email', 'password',
    ];
    public function settings()
    {
        return $this->hasMany('App\Setting', 'user_id');
    }

    public function clients()
    {
        return $this->hasMany('App\Client', 'user_id');
    }

    public function services()
    {
        return $this->hasMany('App\Service', 'user_id');
    }

    public function projects()
    {
        return $this->hasMany('App\Project', 'user_id');
    }

    public function pages()
    {
        return $this->hasMany('App\Page', 'user_id');
    }

    public function posts()
    {
        return $this->hasMany('App\Post', 'user_id');
    }


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
}
