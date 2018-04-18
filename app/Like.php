<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'like',  'user_id', 'recipe_id' ,
    ];

    public function user(){
        $this->belongsTo('App\User');
    }

    public function recipe(){
        $this->belongsTo('App\Recipe');
    }
}
