<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeMedicalCondition extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'recipe_id' ,
    ];

    public function recipe(){
        $this->belongsTo('App\Recipe');
    }
}
