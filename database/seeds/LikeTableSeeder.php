<?php

use Illuminate\Database\Seeder;
use App\Like;

class LikeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->orderBy('id')->chunk(100, function ($recipes) {


            foreach ($recipes as $recipe) {
                for ($i=0;$i<$this->getRandomLikesCount();$i++) {
                    Like::create([
                        'like' => 1,
                        'user_id' => $this->getRandomUserIndex(),
                        'recipe_id' => $recipe->id
                    ]);
                }
            }
        });
    }


    public function getRandomLikesCount(){
        return rand(2,12);
    }

    public function getRandomUserIndex(){
        return rand(2,20);
    }
}
