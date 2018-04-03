<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeAdditionalInfo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'preparation_time', 'cooking_time', 'recipe_id' ,
    ];


    public function recipe(){
        $this->belongsTo('App\Recipe');
    }

}
