<?php

use Illuminate\Database\Seeder;
use App\Recipe;
use App\RecipeNutritionFact;

class RecipeNutritionFactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $recipe_nutrition_facts1 = new RecipeNutritionFact;
        $recipe_nutrition_facts1->calories = $this->getRecipe1()['calories'];
        $recipe_nutrition_facts1->sodium = $this->getRecipe1()['sodium'];
        $recipe_nutrition_facts1->fat = $this->getRecipe1()['fat'];
        $recipe_nutrition_facts1->protein = $this->getRecipe1()['protein'];
        $recipe_nutrition_facts1->recipe_id = 1;
        $recipe_nutrition_facts1->save();

        $recipe_nutrition_facts2 = new RecipeNutritionFact;
        $recipe_nutrition_facts2->calories = $this->getRecipe2()['calories'];
        $recipe_nutrition_facts2->sodium = $this->getRecipe2()['sodium'];
        $recipe_nutrition_facts2->fat = $this->getRecipe2()['fat'];
        $recipe_nutrition_facts2->protein = $this->getRecipe2()['protein'];
        $recipe_nutrition_facts2->recipe_id = 2;
        $recipe_nutrition_facts2->save();

        $recipe_nutrition_facts3 = new RecipeNutritionFact;
        $recipe_nutrition_facts3->calories = $this->getRecipe3()['calories'];
        $recipe_nutrition_facts3->sodium = $this->getRecipe3()['sodium'];
        $recipe_nutrition_facts3->fat = $this->getRecipe3()['fat'];
        $recipe_nutrition_facts3->protein = $this->getRecipe3()['protein'];
        $recipe_nutrition_facts3->recipe_id = 3;
        $recipe_nutrition_facts3->save();

        $recipe_nutrition_facts4 = new RecipeNutritionFact;
        $recipe_nutrition_facts4->calories = $this->getRecipe4()['calories'];
        $recipe_nutrition_facts4->sodium = $this->getRecipe4()['sodium'];
        $recipe_nutrition_facts4->fat = $this->getRecipe4()['fat'];
        $recipe_nutrition_facts4->protein = $this->getRecipe4()['protein'];
        $recipe_nutrition_facts4->recipe_id = 4;
        $recipe_nutrition_facts4->save();

        $recipe_nutrition_facts5 = new RecipeNutritionFact;
        $recipe_nutrition_facts5->calories = $this->getRecipe5()['calories'];
        $recipe_nutrition_facts5->sodium = $this->getRecipe5()['sodium'];
        $recipe_nutrition_facts5->fat = $this->getRecipe5()['fat'];
        $recipe_nutrition_facts5->protein = $this->getRecipe5()['protein'];
        $recipe_nutrition_facts5->recipe_id = 5;
        $recipe_nutrition_facts5->save();

        $recipe_nutrition_facts6 = new RecipeNutritionFact;
        $recipe_nutrition_facts6->calories = $this->getRecipe6()['calories'];
        $recipe_nutrition_facts6->sodium = $this->getRecipe6()['sodium'];
        $recipe_nutrition_facts6->fat = $this->getRecipe6()['fat'];
        $recipe_nutrition_facts6->protein = $this->getRecipe6()['protein'];
        $recipe_nutrition_facts6->recipe_id = 6;
        $recipe_nutrition_facts6->save();

        $recipe_nutrition_facts7 = new RecipeNutritionFact;
        $recipe_nutrition_facts7->calories = $this->getRecipe7()['calories'];
        $recipe_nutrition_facts7->sodium = $this->getRecipe7()['sodium'];
        $recipe_nutrition_facts7->fat = $this->getRecipe7()['fat'];
        $recipe_nutrition_facts7->protein = $this->getRecipe7()['protein'];
        $recipe_nutrition_facts7->recipe_id = 7;
        $recipe_nutrition_facts7->save();

        $recipe_nutrition_facts8 = new RecipeNutritionFact;
        $recipe_nutrition_facts8->calories = $this->getRecipe8()['calories'];
        $recipe_nutrition_facts8->sodium = $this->getRecipe8()['sodium'];
        $recipe_nutrition_facts8->fat = $this->getRecipe8()['fat'];
        $recipe_nutrition_facts8->protein = $this->getRecipe8()['protein'];
        $recipe_nutrition_facts8->recipe_id = 8;
        $recipe_nutrition_facts8->save();

        $recipe_nutrition_facts9 = new RecipeNutritionFact;
        $recipe_nutrition_facts9->calories = $this->getRecipe9()['calories'];
        $recipe_nutrition_facts9->sodium = $this->getRecipe9()['sodium'];
        $recipe_nutrition_facts9->fat = $this->getRecipe9()['fat'];
        $recipe_nutrition_facts9->protein = $this->getRecipe9()['protein'];
        $recipe_nutrition_facts9->recipe_id = 9;
        $recipe_nutrition_facts9->save();

        $recipe_nutrition_facts10 = new RecipeNutritionFact;
        $recipe_nutrition_facts10->calories = $this->getRecipe10()['calories'];
        $recipe_nutrition_facts10->sodium = $this->getRecipe10()['sodium'];
        $recipe_nutrition_facts10->fat = $this->getRecipe10()['fat'];
        $recipe_nutrition_facts10->protein = $this->getRecipe10()['protein'];
        $recipe_nutrition_facts10->recipe_id = 10;
        $recipe_nutrition_facts10->save();

        $recipe_nutrition_facts11 = new RecipeNutritionFact;
        $recipe_nutrition_facts11->calories = $this->getRecipe11()['calories'];
        $recipe_nutrition_facts11->sodium = $this->getRecipe11()['sodium'];
        $recipe_nutrition_facts11->fat = $this->getRecipe11()['fat'];
        $recipe_nutrition_facts11->protein = $this->getRecipe11()['protein'];
        $recipe_nutrition_facts11->recipe_id = 11;
        $recipe_nutrition_facts11->save();

        $recipe_nutrition_facts12 = new RecipeNutritionFact;
        $recipe_nutrition_facts12->calories = $this->getRecipe12()['calories'];
        $recipe_nutrition_facts12->sodium = $this->getRecipe12()['sodium'];
        $recipe_nutrition_facts12->fat = $this->getRecipe12()['fat'];
        $recipe_nutrition_facts12->protein = $this->getRecipe12()['protein'];
        $recipe_nutrition_facts12->recipe_id = 12;
        $recipe_nutrition_facts12->save();

        $recipe_nutrition_facts13 = new RecipeNutritionFact;
        $recipe_nutrition_facts13->calories = $this->getRecipe13()['calories'];
        $recipe_nutrition_facts13->sodium = $this->getRecipe13()['sodium'];
        $recipe_nutrition_facts13->fat = $this->getRecipe13()['fat'];
        $recipe_nutrition_facts13->protein = $this->getRecipe13()['protein'];
        $recipe_nutrition_facts13->recipe_id = 13;
        $recipe_nutrition_facts13->save();

        $recipe_nutrition_facts14 = new RecipeNutritionFact;
        $recipe_nutrition_facts14->calories = $this->getRecipe14()['calories'];
        $recipe_nutrition_facts14->sodium = $this->getRecipe14()['sodium'];
        $recipe_nutrition_facts14->fat = $this->getRecipe14()['fat'];
        $recipe_nutrition_facts14->protein = $this->getRecipe14()['protein'];
        $recipe_nutrition_facts14->recipe_id = 14;
        $recipe_nutrition_facts14->save();

        $recipe_nutrition_facts15 = new RecipeNutritionFact;
        $recipe_nutrition_facts15->calories = $this->getRecipe15()['calories'];
        $recipe_nutrition_facts15->sodium = $this->getRecipe15()['sodium'];
        $recipe_nutrition_facts15->fat = $this->getRecipe15()['fat'];
        $recipe_nutrition_facts15->protein = $this->getRecipe15()['protein'];
        $recipe_nutrition_facts15->recipe_id = 15;
        $recipe_nutrition_facts15->save();

        $recipe_nutrition_facts16 = new RecipeNutritionFact;
        $recipe_nutrition_facts16->calories = $this->getRecipe16()['calories'];
        $recipe_nutrition_facts16->sodium = $this->getRecipe16()['sodium'];
        $recipe_nutrition_facts16->fat = $this->getRecipe16()['fat'];
        $recipe_nutrition_facts16->protein = $this->getRecipe16()['protein'];
        $recipe_nutrition_facts16->recipe_id = 16;
        $recipe_nutrition_facts16->save();

        $recipe_nutrition_facts17 = new RecipeNutritionFact;
        $recipe_nutrition_facts17->calories = $this->getRecipe17()['calories'];
        $recipe_nutrition_facts17->sodium = $this->getRecipe17()['sodium'];
        $recipe_nutrition_facts17->fat = $this->getRecipe17()['fat'];
        $recipe_nutrition_facts17->protein = $this->getRecipe17()['protein'];
        $recipe_nutrition_facts17->recipe_id = 17;
        $recipe_nutrition_facts17->save();

        $recipe_nutrition_facts18 = new RecipeNutritionFact;
        $recipe_nutrition_facts18->calories = $this->getRecipe18()['calories'];
        $recipe_nutrition_facts18->sodium = $this->getRecipe18()['sodium'];
        $recipe_nutrition_facts18->fat = $this->getRecipe18()['fat'];
        $recipe_nutrition_facts18->protein = $this->getRecipe18()['protein'];
        $recipe_nutrition_facts18->recipe_id = 18;
        $recipe_nutrition_facts18->save();

        $recipe_nutrition_facts19 = new RecipeNutritionFact;
        $recipe_nutrition_facts19->calories = $this->getRecipe19()['calories'];
        $recipe_nutrition_facts19->sodium = $this->getRecipe19()['sodium'];
        $recipe_nutrition_facts19->fat = $this->getRecipe19()['fat'];
        $recipe_nutrition_facts19->protein = $this->getRecipe19()['protein'];
        $recipe_nutrition_facts19->recipe_id = 19;
        $recipe_nutrition_facts19->save();

        $recipe_nutrition_facts20 = new RecipeNutritionFact;
        $recipe_nutrition_facts20->calories = $this->getRecipe20()['calories'];
        $recipe_nutrition_facts20->sodium = $this->getRecipe20()['sodium'];
        $recipe_nutrition_facts20->fat = $this->getRecipe20()['fat'];
        $recipe_nutrition_facts20->protein = $this->getRecipe20()['protein'];
        $recipe_nutrition_facts20->recipe_id = 20;
        $recipe_nutrition_facts20->save();

        $recipe_nutrition_facts21 = new RecipeNutritionFact;
        $recipe_nutrition_facts21->calories = $this->getRecipe21()['calories'];
        $recipe_nutrition_facts21->sodium = $this->getRecipe21()['sodium'];
        $recipe_nutrition_facts21->fat = $this->getRecipe21()['fat'];
        $recipe_nutrition_facts21->protein = $this->getRecipe21()['protein'];
        $recipe_nutrition_facts21->recipe_id = 21;
        $recipe_nutrition_facts21->save();

        $recipe_nutrition_facts22 = new RecipeNutritionFact;
        $recipe_nutrition_facts22->calories = $this->getRecipe22()['calories'];
        $recipe_nutrition_facts22->sodium = $this->getRecipe22()['sodium'];
        $recipe_nutrition_facts22->fat = $this->getRecipe22()['fat'];
        $recipe_nutrition_facts22->protein = $this->getRecipe22()['protein'];
        $recipe_nutrition_facts22->recipe_id = 22;
        $recipe_nutrition_facts22->save();

        $recipe_nutrition_facts23 = new RecipeNutritionFact;
        $recipe_nutrition_facts23->calories = $this->getRecipe23()['calories'];
        $recipe_nutrition_facts23->sodium = $this->getRecipe23()['sodium'];
        $recipe_nutrition_facts23->fat = $this->getRecipe23()['fat'];
        $recipe_nutrition_facts23->protein = $this->getRecipe23()['protein'];
        $recipe_nutrition_facts23->recipe_id = 23;
        $recipe_nutrition_facts23->save();

        $recipe_nutrition_facts24 = new RecipeNutritionFact;
        $recipe_nutrition_facts24->calories = $this->getRecipe24()['calories'];
        $recipe_nutrition_facts24->sodium = $this->getRecipe24()['sodium'];
        $recipe_nutrition_facts24->fat = $this->getRecipe24()['fat'];
        $recipe_nutrition_facts24->protein = $this->getRecipe24()['protein'];
        $recipe_nutrition_facts24->recipe_id = 24;
        $recipe_nutrition_facts24->save();

        $recipe_nutrition_facts25 = new RecipeNutritionFact;
        $recipe_nutrition_facts25->calories = $this->getRecipe25()['calories'];
        $recipe_nutrition_facts25->sodium = $this->getRecipe25()['sodium'];
        $recipe_nutrition_facts25->fat = $this->getRecipe25()['fat'];
        $recipe_nutrition_facts25->protein = $this->getRecipe25()['protein'];
        $recipe_nutrition_facts25->recipe_id = 25;
        $recipe_nutrition_facts25->save();

        $recipe_nutrition_facts26= new RecipeNutritionFact;
        $recipe_nutrition_facts26->calories = $this->getRecipe26()['calories'];
        $recipe_nutrition_facts26->sodium = $this->getRecipe26()['sodium'];
        $recipe_nutrition_facts26->fat = $this->getRecipe26()['fat'];
        $recipe_nutrition_facts26->protein = $this->getRecipe26()['protein'];
        $recipe_nutrition_facts26->recipe_id = 26;
        $recipe_nutrition_facts26->save();

        $recipe_nutrition_facts27= new RecipeNutritionFact;
        $recipe_nutrition_facts27->calories = $this->getRecipe27()['calories'];
        $recipe_nutrition_facts27->sodium = $this->getRecipe27()['sodium'];
        $recipe_nutrition_facts27->fat = $this->getRecipe27()['fat'];
        $recipe_nutrition_facts27->protein = $this->getRecipe27()['protein'];
        $recipe_nutrition_facts27->recipe_id = 27;
        $recipe_nutrition_facts27->save();

        $recipe_nutrition_facts28= new RecipeNutritionFact;
        $recipe_nutrition_facts28->calories = $this->getRecipe28()['calories'];
        $recipe_nutrition_facts28->sodium = $this->getRecipe28()['sodium'];
        $recipe_nutrition_facts28->fat = $this->getRecipe28()['fat'];
        $recipe_nutrition_facts28->protein = $this->getRecipe28()['protein'];
        $recipe_nutrition_facts28->recipe_id = 28;
        $recipe_nutrition_facts28->save();

        $recipe_nutrition_facts29= new RecipeNutritionFact;
        $recipe_nutrition_facts29->calories = $this->getRecipe29()['calories'];
        $recipe_nutrition_facts29->sodium = $this->getRecipe29()['sodium'];
        $recipe_nutrition_facts29->fat = $this->getRecipe29()['fat'];
        $recipe_nutrition_facts29->protein = $this->getRecipe29()['protein'];
        $recipe_nutrition_facts29->recipe_id = 29;
        $recipe_nutrition_facts29->save();

        $recipe_nutrition_facts30= new RecipeNutritionFact;
        $recipe_nutrition_facts30->calories = $this->getRecipe30()['calories'];
        $recipe_nutrition_facts30->sodium = $this->getRecipe30()['sodium'];
        $recipe_nutrition_facts30->fat = $this->getRecipe30()['fat'];
        $recipe_nutrition_facts30->protein = $this->getRecipe30()['protein'];
        $recipe_nutrition_facts30->recipe_id = 30;
        $recipe_nutrition_facts30->save();

        $recipe_nutrition_facts31= new RecipeNutritionFact;
        $recipe_nutrition_facts31->calories = $this->getRecipe31()['calories'];
        $recipe_nutrition_facts31->sodium = $this->getRecipe31()['sodium'];
        $recipe_nutrition_facts31->fat = $this->getRecipe31()['fat'];
        $recipe_nutrition_facts31->protein = $this->getRecipe31()['protein'];
        $recipe_nutrition_facts31->recipe_id = 31;
        $recipe_nutrition_facts31->save();
        
        $recipe_nutrition_facts32= new RecipeNutritionFact;
        $recipe_nutrition_facts32->calories = $this->getRecipe32()['calories'];
        $recipe_nutrition_facts32->sodium = $this->getRecipe32()['sodium'];
        $recipe_nutrition_facts32->fat = $this->getRecipe32()['fat'];
        $recipe_nutrition_facts32->protein = $this->getRecipe32()['protein'];
        $recipe_nutrition_facts32->recipe_id = 32;
        $recipe_nutrition_facts32->save();

    }

    public function getRecipe1(){
        return  array(
            'calories'  => 330,
            'sodium'    => 330,
            'fat'       => 10,
            'protein'   => 5
        );
    }

    public function getRecipe2(){
        return array(
            'calories'  => 660,
            'sodium'    => 1550,
            'fat'       => 30,
            'protein'   => 46
        );
    }
    public function getRecipe3(){
        return array(
            'calories'  => 230,
            'sodium'    => 730,
            'fat'       => 10,
            'protein'   => 17
        );
    }
    public function getRecipe4(){
        return array(
            'calories'  => 230,
            'sodium'    => 810,
            'fat'       => 7,
            'protein'   => 28
        );
    }
    public function getRecipe5(){
        return array(
            'calories'  => 350,
            'sodium'    => 360,
            'fat'       => 16,
            'protein'   => 5
        );
    }
    public function getRecipe6(){
        return array(
            'calories'  => 250,
            'sodium'    => 250,
            'fat'       => 14,
            'protein'   => 4
        );
    }
    public function getRecipe7(){
        return array(
            'calories'  => 150,
            'sodium'    => 60,
            'fat'       => 2.5,
            'protein'   => 5
        );
    }
    public function getRecipe8(){
        return array(
            'calories'  => 860,
            'sodium'    => 1230,
            'fat'       => 49,
            'protein'   => 48
        );
    }
    public function getRecipe9(){
        return array(
            'calories'  => 1310,
            'sodium'    => 1280,
            'fat'       => 70,
            'protein'   => 36
        );
    }
    public function getRecipe10(){
        return array(
            'calories'  => 290,
            'sodium'    => 630,
            'fat'       => 20,
            'protein'   => 13
        );
    }
    public function getRecipe11(){
        return array(
            'calories'  => 140,
            'sodium'    => 25,
            'fat'       => 8,
            'protein'   => 3
        );
    }
    public function getRecipe12(){
        return array(
            'calories'  => 30,
            'sodium'    => 95,
            'fat'       => 2.5,
            'protein'   => 2
        );
    }
    public function getRecipe13(){
        return array(
            'calories'  => 750,
            'sodium'    => 1110,
            'fat'       => 67,
            'protein'   => 10
        );
    }
    public function getRecipe14(){
        return array(
            'calories'  => 100,
            'sodium'    => 15,
            'fat'       => 3,
            'protein'   => 3
        );
    }
    public function getRecipe15(){
        return array(
            'calories'  => 100,
            'sodium'    => 15,
            'fat'       => 3,
            'protein'   => 3
        );
    }
    
    public function getRecipe16(){
        return array(
            'calories'  => 230,
            'sodium'    => 380,
            'fat'       => 12,
            'protein'   => 22
        );
    }
    public function getRecipe17(){
        return array(
            'calories'  => 530,
            'sodium'    => 660,
            'fat'       => 29,
            'protein'   => 37
        );
    }
    public function getRecipe18(){
        return array(
            'calories'  => 280,
            'sodium'    => 700,
            'fat'       => 9,
            'protein'   => 31
        );
    }
    public function getRecipe19(){
        return array(
            'calories'  => 360,
            'sodium'    => 380,
            'fat'       => 20,
            'protein'   => 39
        );
    }
    public function getRecipe20(){
        return array(
            'calories'  => 70,
            'sodium'    => 60,
            'fat'       => 6,
            'protein'   => 3
        );
    }
    public function getRecipe21(){
        return array(
            'calories'  => 600,
            'sodium'    => 270,
            'fat'       => 33,
            'protein'   => 5
        );
    }
    public function getRecipe22(){
        return array(
            'calories'  => 320,
            'sodium'    => 90,
            'fat'       => 16,
            'protein'   => 4
        );
    }
    public function getRecipe23(){
        return array(
            'calories'  => 530,
            'sodium'    => 105,
            'fat'       => 19,
            'protein'   => 28
        );
    }
    public function getRecipe24(){
        return array(
            'calories'  => 260,
            'sodium'    => 2020,
            'fat'       => 6,
            'protein'   => 32
        );
    }
    public function getRecipe25(){
        return array(
            'calories'  => 460,
            'sodium'    => 1350,
            'fat'       => 28,
            'protein'   => 35
        );
    }
    public function getRecipe26(){
        return array(
            'calories'  => 180,
            'sodium'    => 65,
            'fat'       => 7,
            'protein'   => 2
        );
    }
    public function getRecipe27(){
        return array(
            'calories'  => 530,
            'sodium'    => 185,
            'fat'       => 40,
            'protein'   => 35
        );
    }
    public function getRecipe28(){
        return array(
            'calories'  => 470,
            'sodium'    => 270,
            'fat'       => 25,
            'protein'   => 6
        );
    }
    public function getRecipe29(){
        return array(
            'calories'  => 380,
            'sodium'    => 380,
            'fat'       => 15,
            'protein'   => 15
        );
    }
    public function getRecipe30(){
        return array(
            'calories'  => 460,
            'sodium'    => 1630,
            'fat'       => 31,
            'protein'   => 23
        );
    }
    public function getRecipe31(){
        return array(
            'calories'  => 410,
            'sodium'    => 460,
            'fat'       => 22,
            'protein'   => 8
        );
    }
    public function getRecipe32(){
        return array(
            'calories'  => 110,
            'sodium'    => 710,
            'fat'       => 3,
            'protein'   => 7
        );
    }
}
