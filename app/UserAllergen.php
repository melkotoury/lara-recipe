<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAllergen extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'user_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
//    protected $hidden = [
//        'password', 'remember_token',
//    ];

    public function getUserAllergen($allergens){
        foreach ($allergens as $allergen){
            return $allergen;
        }
    }
}
