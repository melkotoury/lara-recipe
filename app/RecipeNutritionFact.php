<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeNutritionFact extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'calories', 'sodium' ,'fat' ,'protein' , 'recipe_id',
    ];

    public function recipe(){
        $this->belongsTo('App\Recipe');
    }
}
