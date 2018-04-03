<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMedicalCondition extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'user_id',
    ];

    public function user(){
        $this->belongsTo('App\User');
    }

}
