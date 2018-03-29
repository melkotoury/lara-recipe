<?php

use Illuminate\Database\Seeder;
use App\UserAllergen;

class UserAllergensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->orderBy('id')->chunk(100, function ($users) {
            $allergens = array(
                'Peanut',
                'Tree nuts',
                'Milk',
                'Egg',
                'Wheat',
                'Fish',
                'Soy',
                'Shellfish'
            );

            foreach ($users as $user) {
                for ($i=0;$i<$this->getAllergenCount();$i++){

                    UserAllergen::create([
                        'user_id' => $user->id,
                        'name' =>  $allergens[$this->getRandomIndex()]
                    ]);
                }

            }
        });
    }

    public function getRandomIndex(){
        return rand(0,7);
    }

    public function getAllergenCount(){
        return rand(1,3);
    }
}
