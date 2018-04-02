<?php

use Illuminate\Database\Seeder;
use App\RecipeDirection;

class RecipeDirectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recipe1 = array(
            'Preheat oven to 350 degrees F. ',
            'Cover a cookie sheet with foil and spray with nonstick cooking spray. ',
            'In a medium-size saucepan, heat chili and refried beans until warm (do not boil).',
            'Spoon about half of the chili mixture evenly onto the tortillas, sprinkle with cheese, and roll up.',
            'Place side by side on the cookie sheet with seam side down.',
            'Top tortillas with remaining chili mixture. Sprinkle with remaining cheese. ',
            'Bake for 10 minutes until cheese is melted.'
        );

        $recipe2= array(
            'Heat oil in a skillet at a medium-high setting.',
            'Add chicken and cook for ten minutes.',
            'Remove chicken from pan and set aside.',
            'Stir the soup and water together in the skillet and heat it to a boil.',
            'Return the chicken to the skillet. Reduce the heat to low and simmer for an additional 10 minutes, or until the chicken reaches an internal temperature of 165°F.'
        );
        $recipe3 = array(
            'Preheat oven to 400°F.',
            'Place 6 cupcake holders in baking tin.',
            'In a mixing bowl, add milk and applesauce. Stir until blended.',
            'Stir in flour, oats, sugar, baking powder, and cinnamon. Mix until moistened (do not over mix).',
            'Gently stir in the chopped apples.',
            'Spoon into cupcake holders.',
            'Bake for 15-20 minutes or until an inserted toothpick comes out clean.',
            'Cool in pan 5 minutes before serving. Store unused portions in an airtight container.'
        );
        $recipe4 = array(
            'Heat pan over medium-high heat (350 degrees in an electric skillet). Add vegetable oil and chicken and cook until the chicken reaches an internal temperature of 165°F (3-5 minutes).',
            'Reduce heat to medium (300 degrees in electric skillet).',
            'Add tomatoes with juice, chili sauce, green pepper, celery, onion, garlic, basil, parsley, cayenne pepper, and salt.',
            'Bring to a boil; reduce heat to low and simmer, covered for 10-15 minutes.',
            'Serve over hot, cooked rice or whole wheat pasta.',
            'Refrigerate leftovers within 2-3 hours.'
        );
        $recipe5 = array(
            'Wash all of the vegetables and mix them together in a large mixing bowl. Top this colorful meal with the nonfat or low-fat dressing of your choice.'
        );
        $recipe6 = array(
            'Heat pan over medium-high heat (350 degrees in an electric skillet). Add vegetable oil and chicken and cook until the chicken reaches an internal temperature of 165°F (3-5 minutes).',
            'Reduce heat to medium (300 degrees in electric skillet).',
            'Add tomatoes with juice, chili sauce, green pepper, celery, onion, garlic, basil, parsley, cayenne pepper, and salt.',
            'Bring to a boil; reduce heat to low and simmer, covered for 10-15 minutes.',
            'Serve over hot, cooked rice or whole wheat pasta.',
            'Refrigerate leftovers within 2-3 hours.'
        );
        $recipe7 = array(
            'Lightly coat a griddle or skillet with cooking spray and heat over medium heat.',
            'Peel, core and thinly slice apple into rings.',
            'In a large mixing bowl, combine ingredients for pancake batter. Stir until ingredients are evenly moist. (Small lumps are ok! Over-mixing makes pancakes tough.)',
            'For each pancake, place apple ring on griddle and pour about 1/4 cup batter over apple ring, starting in the center and covering the apple.',
            'Cook until bubbles appear. Turn and cook other side until lightly brown.'
        );
        $recipe8 = array(
            'Preheat the oven to 325°F. In a large mixing bowl, beat the egg whites until they are foamy.',
            'Add the cream of tartar and beat until stiff, but not dry. Gradually beat in the sugar',
            'Add the vanilla and salt and then gently fold in the flour.',
            'Pour the mix into an angel food tubular pan and bake for 1 hour and 15 minutes, or until the top is nicely browned.'
        );
        $recipe9 = array(
            'Drain pineapple and oranges. Use juice as beverage.',
            'Combine fruit with marshmallows and coconut.',
            'Fold in yogurt.',
            'Chill.',
            'Serve.'
        );
        $recipe10 = array(
            'Preheat oven to 400°F.',
            'Place 6 cupcake holders in baking tin.',
            'In a mixing bowl, add milk and applesauce. Stir until blended.',
            'Stir in flour, oats, sugar, baking powder, and cinnamon. Mix until moistened (do not over mix).',
            'Gently stir in the chopped apples.',
            'Spoon into cupcake holders.',
            'Bake for 15-20 minutes or until an inserted toothpick comes out clean.',
            'Cool in pan 5 minutes before serving. Store unused portions in an airtight container.'
        );


        for ($i=0;$i<sizeof($recipe1);$i++){
            $recipe_direction1 = new RecipeDirection;
            $recipe_direction1->name = $recipe1[$i];
            $recipe_direction1->recipe_id = 1;
            $recipe_direction1->save();
        }

        for ($i=0;$i<sizeof($recipe2);$i++){
            $recipe_direction2 = new RecipeDirection;
            $recipe_direction2->name = $recipe2[$i];
            $recipe_direction2->recipe_id = 2;
            $recipe_direction2->save();
        }

        for ($i=0;$i<sizeof($recipe3);$i++){
            $recipe_direction3 = new RecipeDirection;
            $recipe_direction3->name = $recipe3[$i];
            $recipe_direction3->recipe_id = 3;
            $recipe_direction3->save();
        }

        for ($i=0;$i<sizeof($recipe4);$i++){
            $recipe_direction4 = new RecipeDirection;
            $recipe_direction4->name = $recipe4[$i];
            $recipe_direction4->recipe_id = 4;
            $recipe_direction4->save();
        }

        for ($i=0;$i<sizeof($recipe5);$i++){
            $recipe_direction5 = new RecipeDirection;
            $recipe_direction5->name = $recipe5[$i];
            $recipe_direction5->recipe_id = 5;
            $recipe_direction5->save();
        }

        for ($i=0;$i<sizeof($recipe6);$i++){
            $recipe_direction6 = new RecipeDirection;
            $recipe_direction6->name = $recipe6[$i];
            $recipe_direction6->recipe_id = 6;
            $recipe_direction6->save();
        }

        for ($i=0;$i<sizeof($recipe7);$i++){
            $recipe_direction7 = new RecipeDirection;
            $recipe_direction7->name = $recipe7[$i];
            $recipe_direction7->recipe_id = 7;
            $recipe_direction7->save();
        }

        for ($i=0;$i<sizeof($recipe8);$i++){
            $recipe_direction8 = new RecipeDirection;
            $recipe_direction8->name = $recipe8[$i];
            $recipe_direction8->recipe_id = 8;
            $recipe_direction8->save();
        }

        for ($i=0;$i<sizeof($recipe9);$i++){
            $recipe_direction9 = new RecipeDirection;
            $recipe_direction9->name = $recipe9[$i];
            $recipe_direction9->recipe_id = 9;
            $recipe_direction9->save();
        }

        for ($i=0;$i<sizeof($recipe10);$i++){
            $recipe_direction10 = new RecipeDirection;
            $recipe_direction10->name = $recipe10[$i];
            $recipe_direction10->recipe_id = 10;
            $recipe_direction10->save();
        }

    }
}
