<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Review;

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

    public function recommend_recipe_allergens($allergens ){

        $recommend_recipes_allergens = DB::table('recipe_allergens')
            ->where('name', $allergens)
            ->pluck('recipe_id')->toArray();

//        dd($recommend_recipes_allergens);


         return array_unique($recommend_recipes_allergens, SORT_REGULAR);

    }

    public function recommend_recipe_medical_conditions( $medical_conditions){



        $recommend_recipes_medical_conditions = DB::table('recipe_medical_conditions')
            ->where('name', $medical_conditions)
            ->pluck('recipe_id')->toArray();

        return array_unique($recommend_recipes_medical_conditions, SORT_REGULAR);


    }

    public function popular_recipes(){
        $recipes = Recipe::all();
        foreach ($recipes as $recipe){
            $review_recipes_avg = Review::where('recipe_id',$recipe->id)
                ->pluck('review_stars')
                ->avg();
            if ($review_recipes_avg >= 3){
                return $recipe->id;
            }

        }


    }
}
