<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'category', 'summary',
    ];

    public function recipe_allergen(){
        $this->hasMany('App\RecipeAllergen');
    }

    public function recipe_medical_condition(){
        $this->hasMany('App\RecipeMedicalCondition');
    }

    public function recipe_additional_info(){
        $this->hasOne('App\RecipeAdditionalInfo');
    }

    public function recipe_direction(){
        $this->hasMany('App\RecipeDirection');
    }

    public function recipe_image(){
        $this->hasMany('App\RecipeImage');
    }

    public function review(){
        $this->hasMany('App\Review');
    }
}
