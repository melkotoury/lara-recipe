<?php

namespace App;
use Illuminate\Support\Facades\DB;

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

    public function reviews_count($recipe_id){
        return DB::table('reviews')->where('recipe_id',$recipe_id)->count();
    }

    public function reviews_avg($recipe_id){
        $review_star_sum =0;
        $review_stars = DB::table('reviews')->where('recipe_id',$recipe_id)->pluck('review_stars');
        foreach ($review_stars as $review_star){
            $review_star_sum+=$review_star;
        }
        $review_star_avg = $review_star_sum/$this->reviews_count($recipe_id);
        if ($review_star_avg <1){
            return 'one-stars';
        }elseif ($review_star_avg > 1 AND $review_star_avg < 2){
            return 'two-stars';
        }elseif ($review_star_avg > 2 AND $review_star_avg < 3){
            return 'three-stars';
        }elseif ($review_star_avg > 3 AND $review_star_avg < 4){
            return 'four-stars';
        }elseif ($review_star_avg > 4 AND $review_star_avg < 5){
            return 'five-stars';
        }
    }

    public function review_stars($user_id,$recipe_id){
        $review_stars = Review::where('recipe_id',$recipe_id)
            ->where('user_id',$user_id)
            ->pluck('review_stars')
             ->first();

        switch ($review_stars){
            case 1:
                return "one-stars";
            case 2:
                return "two-stars";
            case 3:
                return "three-stars";
            case 4:
                return "four-stars";
            case 5:
                return "five-stars";
            default:
                return "five-stars";
             }
    }

    public function reviews_average($recipe_id){
        $review_star_sum =0;
        $review_stars = DB::table('reviews')->where('recipe_id',$recipe_id)->pluck('review_stars');
        foreach ($review_stars as $review_star){
            $review_star_sum+=$review_star;
        }
        $review_star_avg = $review_star_sum/$this->reviews_count($recipe_id);
        if ($review_star_avg <1){
            return 1;
        }elseif ($review_star_avg > 1 AND $review_star_avg < 2){
            return 2;
        }elseif ($review_star_avg > 2 AND $review_star_avg < 3){
            return 3;
        }elseif ($review_star_avg > 3 AND $review_star_avg < 4){
            return 4;
        }elseif ($review_star_avg > 4 AND $review_star_avg < 5){
            return 5;
        }
    }

}
