<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeImage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image_url', 'recipe_id' ,
    ];

    public function recipe(){
        $this->belongsTo('App\Recipe');
    }
}
