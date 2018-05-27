<?php

use Illuminate\Database\Seeder;
use App\RecipeAdditionalInfo;

class RecipeAdditionalInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $recipe_additional_info1 = new RecipeAdditionalInfo;
        $recipe_additional_info1->preparation_time = $this->getRecipe1()['preparation_time'];
        $recipe_additional_info1->cooking_time = $this->getRecipe1()['cooking_time'];
        $recipe_additional_info1->recipe_id = 1;
        $recipe_additional_info1->save();

        $recipe_additional_info2 = new RecipeAdditionalInfo;
        $recipe_additional_info2->preparation_time = $this->getRecipe2()['preparation_time'];
        $recipe_additional_info2->cooking_time = $this->getRecipe2()['cooking_time'];
        $recipe_additional_info2->recipe_id = 2;
        $recipe_additional_info2->save();

        $recipe_additional_info3 = new RecipeAdditionalInfo;
        $recipe_additional_info3->preparation_time = $this->getRecipe3()['preparation_time'];
        $recipe_additional_info3->cooking_time = $this->getRecipe3()['cooking_time'];
        $recipe_additional_info3->recipe_id = 3;
        $recipe_additional_info3->save();

        $recipe_additional_info4 = new RecipeAdditionalInfo;
        $recipe_additional_info4->preparation_time = $this->getRecipe4()['preparation_time'];
        $recipe_additional_info4->cooking_time = $this->getRecipe4()['cooking_time'];
        $recipe_additional_info4->recipe_id = 4;
        $recipe_additional_info4->save();

        $recipe_additional_info5 = new RecipeAdditionalInfo;
        $recipe_additional_info5->preparation_time = $this->getRecipe5()['preparation_time'];
        $recipe_additional_info5->cooking_time = $this->getRecipe5()['cooking_time'];
        $recipe_additional_info5->recipe_id = 5;
        $recipe_additional_info5->save();

        $recipe_additional_info6 = new RecipeAdditionalInfo;
        $recipe_additional_info6->preparation_time = $this->getRecipe6()['preparation_time'];
        $recipe_additional_info6->cooking_time = $this->getRecipe6()['cooking_time'];
        $recipe_additional_info6->recipe_id = 6;
        $recipe_additional_info6->save();

        $recipe_additional_info7 = new RecipeAdditionalInfo;
        $recipe_additional_info7->preparation_time = $this->getRecipe7()['preparation_time'];
        $recipe_additional_info7->cooking_time = $this->getRecipe7()['cooking_time'];
        $recipe_additional_info7->recipe_id = 7;
        $recipe_additional_info7->save();

        $recipe_additional_info8 = new RecipeAdditionalInfo;
        $recipe_additional_info8->preparation_time = $this->getRecipe8()['preparation_time'];
        $recipe_additional_info8->cooking_time = $this->getRecipe8()['cooking_time'];
        $recipe_additional_info8->recipe_id = 8;
        $recipe_additional_info8->save();

        $recipe_additional_info9 = new RecipeAdditionalInfo;
        $recipe_additional_info9->preparation_time = $this->getRecipe9()['preparation_time'];
        $recipe_additional_info9->cooking_time = $this->getRecipe9()['cooking_time'];
        $recipe_additional_info9->recipe_id = 9;
        $recipe_additional_info9->save();

        $recipe_additional_info10 = new RecipeAdditionalInfo;
        $recipe_additional_info10->preparation_time = $this->getRecipe10()['preparation_time'];
        $recipe_additional_info10->cooking_time = $this->getRecipe10()['cooking_time'];
        $recipe_additional_info10->recipe_id = 10;
        $recipe_additional_info10->save();

        $recipe_additional_info11 = new RecipeAdditionalInfo;
        $recipe_additional_info11->preparation_time = $this->getRecipe11()['preparation_time'];
        $recipe_additional_info11->cooking_time = $this->getRecipe11()['cooking_time'];
        $recipe_additional_info11->recipe_id = 11;
        $recipe_additional_info11->save();

        $recipe_additional_info12 = new RecipeAdditionalInfo;
        $recipe_additional_info12->preparation_time = $this->getRecipe12()['preparation_time'];
        $recipe_additional_info12->cooking_time = $this->getRecipe12()['cooking_time'];
        $recipe_additional_info12->recipe_id = 12;
        $recipe_additional_info12->save();

        $recipe_additional_info13 = new RecipeAdditionalInfo;
        $recipe_additional_info13->preparation_time = $this->getRecipe13()['preparation_time'];
        $recipe_additional_info13->cooking_time = $this->getRecipe13()['cooking_time'];
        $recipe_additional_info13->recipe_id = 13;
        $recipe_additional_info13->save();

        $recipe_additional_info14 = new RecipeAdditionalInfo;
        $recipe_additional_info14->preparation_time = $this->getRecipe14()['preparation_time'];
        $recipe_additional_info14->cooking_time = $this->getRecipe14()['cooking_time'];
        $recipe_additional_info14->recipe_id = 14;
        $recipe_additional_info14->save();

        $recipe_additional_info15 = new RecipeAdditionalInfo;
        $recipe_additional_info15->preparation_time = $this->getRecipe15()['preparation_time'];
        $recipe_additional_info15->cooking_time = $this->getRecipe15()['cooking_time'];
        $recipe_additional_info15->recipe_id = 15;
        $recipe_additional_info15->save();

        $recipe_additional_info16 = new RecipeAdditionalInfo;
        $recipe_additional_info16->preparation_time = $this->getRecipe16()['preparation_time'];
        $recipe_additional_info16->cooking_time = $this->getRecipe16()['cooking_time'];
        $recipe_additional_info16->recipe_id = 16;
        $recipe_additional_info16->save();

        $recipe_additional_info17 = new RecipeAdditionalInfo;
        $recipe_additional_info17->preparation_time = $this->getRecipe17()['preparation_time'];
        $recipe_additional_info17->cooking_time = $this->getRecipe17()['cooking_time'];
        $recipe_additional_info17->recipe_id = 17;
        $recipe_additional_info17->save();

        $recipe_additional_info18 = new RecipeAdditionalInfo;
        $recipe_additional_info18->preparation_time = $this->getRecipe18()['preparation_time'];
        $recipe_additional_info18->cooking_time = $this->getRecipe18()['cooking_time'];
        $recipe_additional_info18->recipe_id = 18;
        $recipe_additional_info18->save();

        $recipe_additional_info19 = new RecipeAdditionalInfo;
        $recipe_additional_info19->preparation_time = $this->getRecipe19()['preparation_time'];
        $recipe_additional_info19->cooking_time = $this->getRecipe19()['cooking_time'];
        $recipe_additional_info19->recipe_id = 19;
        $recipe_additional_info19->save();

        $recipe_additional_info20 = new RecipeAdditionalInfo;
        $recipe_additional_info20->preparation_time = $this->getRecipe20()['preparation_time'];
        $recipe_additional_info20->cooking_time = $this->getRecipe20()['cooking_time'];
        $recipe_additional_info20->recipe_id = 20;
        $recipe_additional_info20->save();

        $recipe_additional_info21 = new RecipeAdditionalInfo;
        $recipe_additional_info21->preparation_time = $this->getRecipe21()['preparation_time'];
        $recipe_additional_info21->cooking_time = $this->getRecipe21()['cooking_time'];
        $recipe_additional_info21->recipe_id = 21;
        $recipe_additional_info21->save();

        $recipe_additional_info22 = new RecipeAdditionalInfo;
        $recipe_additional_info22->preparation_time = $this->getRecipe22()['preparation_time'];
        $recipe_additional_info22->cooking_time = $this->getRecipe22()['cooking_time'];
        $recipe_additional_info22->recipe_id = 22;
        $recipe_additional_info22->save();

        $recipe_additional_info23 = new RecipeAdditionalInfo;
        $recipe_additional_info23->preparation_time = $this->getRecipe23()['preparation_time'];
        $recipe_additional_info23->cooking_time = $this->getRecipe23()['cooking_time'];
        $recipe_additional_info23->recipe_id = 23;
        $recipe_additional_info23->save();

        $recipe_additional_info24 = new RecipeAdditionalInfo;
        $recipe_additional_info24->preparation_time = $this->getRecipe24()['preparation_time'];
        $recipe_additional_info24->cooking_time = $this->getRecipe24()['cooking_time'];
        $recipe_additional_info24->recipe_id = 24;
        $recipe_additional_info24->save();

        $recipe_additional_info25 = new RecipeAdditionalInfo;
        $recipe_additional_info25->preparation_time = $this->getRecipe25()['preparation_time'];
        $recipe_additional_info25->cooking_time = $this->getRecipe25()['cooking_time'];
        $recipe_additional_info25->recipe_id = 25;
        $recipe_additional_info25->save();

        $recipe_additional_info26 = new RecipeAdditionalInfo;
        $recipe_additional_info26->preparation_time = $this->getRecipe26()['preparation_time'];
        $recipe_additional_info26->cooking_time = $this->getRecipe26()['cooking_time'];
        $recipe_additional_info26->recipe_id = 26;
        $recipe_additional_info26->save();

        $recipe_additional_info27 = new RecipeAdditionalInfo;
        $recipe_additional_info27->preparation_time = $this->getRecipe27()['preparation_time'];
        $recipe_additional_info27->cooking_time = $this->getRecipe27()['cooking_time'];
        $recipe_additional_info27->recipe_id = 27;
        $recipe_additional_info27->save();

        $recipe_additional_info28 = new RecipeAdditionalInfo;
        $recipe_additional_info28->preparation_time = $this->getRecipe28()['preparation_time'];
        $recipe_additional_info28->cooking_time = $this->getRecipe28()['cooking_time'];
        $recipe_additional_info28->recipe_id = 28;
        $recipe_additional_info28->save();

        $recipe_additional_info29 = new RecipeAdditionalInfo;
        $recipe_additional_info29->preparation_time = $this->getRecipe29()['preparation_time'];
        $recipe_additional_info29->cooking_time = $this->getRecipe29()['cooking_time'];
        $recipe_additional_info29->recipe_id = 29;
        $recipe_additional_info29->save();

        $recipe_additional_info30 = new RecipeAdditionalInfo;
        $recipe_additional_info30->preparation_time = $this->getRecipe30()['preparation_time'];
        $recipe_additional_info30->cooking_time = $this->getRecipe30()['cooking_time'];
        $recipe_additional_info30->recipe_id = 30;
        $recipe_additional_info30->save();

        $recipe_additional_info31 = new RecipeAdditionalInfo;
        $recipe_additional_info31->preparation_time = $this->getRecipe31()['preparation_time'];
        $recipe_additional_info31->cooking_time = $this->getRecipe31()['cooking_time'];
        $recipe_additional_info31->recipe_id = 31;
        $recipe_additional_info31->save();

        $recipe_additional_info32 = new RecipeAdditionalInfo;
        $recipe_additional_info32->preparation_time = $this->getRecipe32()['preparation_time'];
        $recipe_additional_info32->cooking_time = $this->getRecipe32()['cooking_time'];
        $recipe_additional_info32->recipe_id = 32;
        $recipe_additional_info32->save();
        
    }


    public function getRecipe1(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }

    public function getRecipe2(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    public function getRecipe3(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    public function getRecipe4(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    public function getRecipe5(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    public function getRecipe6(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    public function getRecipe7(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    public function getRecipe8(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    public function getRecipe9(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    public function getRecipe10(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    public function getRecipe11(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    public function getRecipe12(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    public function getRecipe13(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    public function getRecipe14(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    
    public function getRecipe15(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    
    public function getRecipe16(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    public function getRecipe17(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    public function getRecipe18(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    public function getRecipe19(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    public function getRecipe20(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    public function getRecipe21(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    public function getRecipe22(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    public function getRecipe23(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    public function getRecipe24(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    public function getRecipe25(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    public function getRecipe26(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    public function getRecipe27(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    public function getRecipe28(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    public function getRecipe29(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    public function getRecipe30(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    public function getRecipe31(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
    public function getRecipe32(){
        return array(
            'preparation_time'=> rand(0,60),
            'cooking_time' => rand(0,60)
        );
    }
}
