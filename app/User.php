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
        'name', 'email', 'age' , 'gender' , 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function user_allergen(){
        $this->hasMany('App\UserAllergen');
    }

    public function user_medical_condition(){
        $this->hasMany('App\UserMedicalCondition');
    }

    public function review(){
        $this->hasMany('App\Review');
    }
}
