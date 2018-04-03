<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'review_stars', 'review_message', 'user_id', 'recipe_id' ,
    ];

    public function user(){
        $this->belongsTo('App\User');
    }

    public function recipe(){
        $this->belongsTo('App\Recipe');
    }

}
