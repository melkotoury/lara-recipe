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


        for ($i=0;$i<sizeof($this->getRecipe1());$i++){
            $recipe_direction1 = new RecipeDirection;
            $recipe_direction1->name = $this->getRecipe1()[$i];
            $recipe_direction1->recipe_id = 1;
            $recipe_direction1->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe2());$i++){
            $recipe_direction2 = new RecipeDirection;
            $recipe_direction2->name = $this->getRecipe2()[$i];
            $recipe_direction2->recipe_id = 2;
            $recipe_direction2->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe3());$i++){
            $recipe_direction3 = new RecipeDirection;
            $recipe_direction3->name = $this->getRecipe3()[$i];
            $recipe_direction3->recipe_id = 3;
            $recipe_direction3->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe4());$i++){
            $recipe_direction4 = new RecipeDirection;
            $recipe_direction4->name = $this->getRecipe4()[$i];
            $recipe_direction4->recipe_id = 4;
            $recipe_direction4->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe5());$i++){
            $recipe_direction5 = new RecipeDirection;
            $recipe_direction5->name = $this->getRecipe5()[$i];
            $recipe_direction5->recipe_id = 5;
            $recipe_direction5->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe6());$i++){
            $recipe_direction6 = new RecipeDirection;
            $recipe_direction6->name = $this->getRecipe6()[$i];
            $recipe_direction6->recipe_id = 6;
            $recipe_direction6->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe7());$i++){
            $recipe_direction7 = new RecipeDirection;
            $recipe_direction7->name = $this->getRecipe7()[$i];
            $recipe_direction7->recipe_id = 7;
            $recipe_direction7->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe8());$i++){
            $recipe_direction8 = new RecipeDirection;
            $recipe_direction8->name = $this->getRecipe8()[$i];
            $recipe_direction8->recipe_id = 8;
            $recipe_direction8->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe9());$i++){
            $recipe_direction9 = new RecipeDirection;
            $recipe_direction9->name = $this->getRecipe9()[$i];
            $recipe_direction9->recipe_id = 9;
            $recipe_direction9->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe10());$i++){
            $recipe_direction10 = new RecipeDirection;
            $recipe_direction10->name = $this->getRecipe10()[$i];
            $recipe_direction10->recipe_id = 10;
            $recipe_direction10->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe11());$i++){
            $recipe_direction11 = new RecipeDirection;
            $recipe_direction11->name = $this->getRecipe11()[$i];
            $recipe_direction11->recipe_id = 11;
            $recipe_direction11->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe12());$i++){
            $recipe_direction12 = new RecipeDirection;
            $recipe_direction12->name = $this->getRecipe12()[$i];
            $recipe_direction12->recipe_id = 12;
            $recipe_direction12->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe13());$i++){
            $recipe_direction13 = new RecipeDirection;
            $recipe_direction13->name = $this->getRecipe13()[$i];
            $recipe_direction13->recipe_id = 13;
            $recipe_direction13->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe14());$i++){
            $recipe_direction14 = new RecipeDirection;
            $recipe_direction14->name = $this->getRecipe14()[$i];
            $recipe_direction14->recipe_id = 14;
            $recipe_direction14->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe15());$i++){
            $recipe_direction15 = new RecipeDirection;
            $recipe_direction15->name = $this->getRecipe15()[$i];
            $recipe_direction15->recipe_id = 15;
            $recipe_direction15->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe16());$i++){
            $recipe_direction16 = new RecipeDirection;
            $recipe_direction16->name = $this->getRecipe16()[$i];
            $recipe_direction16->recipe_id = 16;
            $recipe_direction16->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe17());$i++){
            $recipe_direction17 = new RecipeDirection;
            $recipe_direction17->name = $this->getRecipe17()[$i];
            $recipe_direction17->recipe_id = 17;
            $recipe_direction17->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe18());$i++){
            $recipe_direction18 = new RecipeDirection;
            $recipe_direction18->name = $this->getRecipe18()[$i];
            $recipe_direction18->recipe_id = 18;
            $recipe_direction18->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe19());$i++){
            $recipe_direction19 = new RecipeDirection;
            $recipe_direction19->name = $this->getRecipe19()[$i];
            $recipe_direction19->recipe_id = 19;
            $recipe_direction19->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe20());$i++){
            $recipe_direction20 = new RecipeDirection;
            $recipe_direction20->name = $this->getRecipe20()[$i];
            $recipe_direction20->recipe_id = 20;
            $recipe_direction20->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe21());$i++){
            $recipe_direction21 = new RecipeDirection;
            $recipe_direction21->name = $this->getRecipe20()[$i];
            $recipe_direction21->recipe_id = 21;
            $recipe_direction21->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe22());$i++){
            $recipe_direction22 = new RecipeDirection;
            $recipe_direction22->name = $this->getRecipe22()[$i];
            $recipe_direction22->recipe_id = 22;
            $recipe_direction22->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe23());$i++){
            $recipe_direction23 = new RecipeDirection;
            $recipe_direction23->name = $this->getRecipe23()[$i];
            $recipe_direction23->recipe_id = 23;
            $recipe_direction23->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe24());$i++){
            $recipe_direction24 = new RecipeDirection;
            $recipe_direction24->name = $this->getRecipe24()[$i];
            $recipe_direction24->recipe_id = 24;
            $recipe_direction24->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe25());$i++){
            $recipe_direction25 = new RecipeDirection;
            $recipe_direction25->name = $this->getRecipe25()[$i];
            $recipe_direction25->recipe_id = 25;
            $recipe_direction25->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe26());$i++){
            $recipe_direction26 = new RecipeDirection;
            $recipe_direction26->name = $this->getRecipe26()[$i];
            $recipe_direction26->recipe_id = 26;
            $recipe_direction26->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe27());$i++){
            $recipe_direction27 = new RecipeDirection;
            $recipe_direction27->name = $this->getRecipe27()[$i];
            $recipe_direction27->recipe_id = 27;
            $recipe_direction27->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe28());$i++){
            $recipe_direction28 = new RecipeDirection;
            $recipe_direction28->name = $this->getRecipe28()[$i];
            $recipe_direction28->recipe_id = 28;
            $recipe_direction28->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe29());$i++){
            $recipe_direction29 = new RecipeDirection;
            $recipe_direction29->name = $this->getRecipe29()[$i];
            $recipe_direction29->recipe_id = 29;
            $recipe_direction29->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe30());$i++){
            $recipe_direction30 = new RecipeDirection;
            $recipe_direction30->name = $this->getRecipe30()[$i];
            $recipe_direction30->recipe_id = 30;
            $recipe_direction30->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe31());$i++){
            $recipe_direction31 = new RecipeDirection;
            $recipe_direction31->name = $this->getRecipe31()[$i];
            $recipe_direction31->recipe_id = 31;
            $recipe_direction31->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe32());$i++){
            $recipe_direction32 = new RecipeDirection;
            $recipe_direction32->name = $this->getRecipe32()[$i];
            $recipe_direction32->recipe_id = 32;
            $recipe_direction32->save();
        }
    }

    public function getRecipe1(){
        return  array(
            'Preheat the oven to 180C/350F/Gas 4.',
            'Sift the flour, bicarbonate of soda and salt into a large mixing bowl. ',
            'In a separate bowl, cream the butter and sugar together until light and fluffy.',
            'Add the eggs, mashed bananas, buttermilk and vanilla extract to the butter and sugar mixture and mix well. Fold in the flour mixture.',
            'Grease a 20cm x 12.5cm/8in x 5in loaf tin and pour the cake mixture into the tin.',
            'Transfer to the oven and bake for about an hour, or until well-risen and golden-brown.',
            'Remove from the oven and cool in the tin for a few minutes, then turn out onto a wire rack to cool completely before serving.'
        );
    }

    public function getRecipe2(){
        return array(
            'Cook pasta according to package directions. Sprinkle shrimp with salt, pepper, and toss to combine. Sprinkle 1 tablespoon flour over the shrimp, and toss to coat the shrimp. Sprinkle 1 more tablespoon flour and toss to evenly coat the shrimp.',
            'Melt butter and olive oil in a large skillet over medium high heat. When hot, add the shrimp in a single layer and cook on each side, flipping once, until golden brown, approximately 2-3 minutes per side. Remove to plate.',
            'Pour the chicken broth into the skillet and cook for about 5 minutes, whisking the bottom of the pan to deglaze. Reduce heat to medium and pour in cream, whisking constantly. Cook sauce over medium heat until bubbly and the cream starts to thicken the mixture, about 5 minutes.',
            'Taste the sauce and add seasonings as desired (salt, pepper, cajun seasonings, etc.) Add the drained pasta and shrimp to the sauce, and stir to combine.'
        );
    }
    public function getRecipe3(){
        return array(
            'Heat oven to 400°F.',
            'Lightly spray olive oil spray in a medium nonstick skillet and heat on a medium heat.',
            'Add onion, garlic and cilantro and saute about 2 minutes, add ground turkey, salt, garlic powder, cumin and cook meat for 4 to 5 minutes until meat is completely cooked through.',
            'Add 1/4 cup of tomato sauce and 1/2 cup of chicken broth, mix well and simmer on low for about 5 minutes.',
            'Combine cooked rice and meat together.',
            'Cut the bell peppers in half lengthwise, and remove all seeds. Spoon 2/3 cup meat mixture into each pepper half and place in a 9 x 13-inch baking dish. Top each with 1 tbsp cheese.',
            'Pour the remainder of the chicken broth on the bottom of the pan. Cover tightly with aluminum foil and bake for about 45 minutes.',
            'Carefully remove the foil and serve right away.'
        );
    }
    public function getRecipe4(){
        return array(
            'In a large bowl, combine cornstarch and water until smooth. Add the beef and mix until fully coated. Set aside for 2 minutes.',
            'Heat 1 tablespoon oil in a large skillet on medium-high heat. Add beef and stir-fry for 3-5 minutes or until its no longer pink. Remove from pan and set aside.',
            'In the same pan, stir-fry garlic, broccoli, onion, bell peppers and mushrooms in the remaining oil, for 3-5 minutes. Return beef to pan.',
            'In small bowl, whisk all the ingredients for the sauce and pour into pan. Stir-fry for 2-3 minutes or until everything is fully combines and the mixture as simmered.',
            'Serve hot over rice or noodles. Enjoy!',
            'Refrigerate leftovers within 2-3 hours.'
        );
    }
    public function getRecipe5(){
        return array(
            'Preheat oven to 350°F. Spray a standard-size muffin pan generously with nonstick cooking spray.',
            'Combine milk and lemon juice in a measuring cup and set aside.',
            'In a stand mixer or large bowl, beat the butter and sugar until light and fluffy, about 2 minutes. Beat in the eggs, one at a time, until just mixed in. Stir in the vanilla.',
            'In a medium bowl, combine the flour, baking powder, baking soda, salt, and nutmeg. Stir with a whisk until well combined.',
            'Using a rubber spatula, mix a quarter of the dry ingredients into the butter mixture. Then mix in a third of the milk mixture. Continue mixing in the remaining dry and wet ingredients alternately, ending with the dry. Mix until well combined and smooth, but dont over-mix. The batter will be very thick.',
            'Scoop enough batter into each tin so that the top of the batter is even with the rim of the cup. (I like to use an ice cream scoop with a wire scraper for this.) Bake the muffins until firm to the touch, 25-30 minutes. Set pan on rack to cool for a few minutes.',
            'In the meantime, prepare the topping: melt the butter in a small dish and combine the cinnamon and sugar in another small dish.',
            'When the muffins are cool enough to handle, use a pastry brush to paint the top of each muffin with butter, then sprinkle generously with cinnamon-sugar. If you have cinnamon-sugar left over, sprinkle muffins again. Serve warm, or cool on a rack and wrap airtight. Store at room temperature. Reheat muffins briefly in microwave for that fresh out of the oven taste.'
        );
    }
    public function getRecipe6(){
        return array(
            'Preheat oven to 350 degrees. Spray a 9x13 pan with cooking spray.',
            'In a large bowl, combine cake mix, eggs, oil, and 1 can of crushed pineapple with the juice. Mix well.',
            'Pour into prepared baking pan and bake for 25-30 minutes, or until toothpick inserted in center of cake comes out clean. Allow to cool completely on a wire rack.',
            'In a medium sized bowl, fold together whipped topping, box of vanilla pudding, and 1 can crushed pineapple with the juice. Spread over the top of cooled cake. Enjoy!'
        );
    }
    public function getRecipe7(){
        return array(
            'Place all of the above ingredients in a blender and blend until smooth. Serve immediately.'
        );
    }
    public function getRecipe8(){
        return array(
            'Preheat oven to 350 degrees. Spray a 9x13 pan with cooking spray.',
            'Mix chicken and 1 cup cheese. Roll up in tortillas and place in pan seam side down.',
            'In a small sauce pan over medium heat, melt butter.  Whisk in flour and cook 1 minute. Add broth and whisk until smooth. Allow sauce to thicken.  Remove from heat and stir in sour cream and chilies.',
            'Pour sauce over enchiladas and top with remaining cheese. Bake 20-25 minutes and then broil for a few minutes to brown the cheese.'
        );
    }
    public function getRecipe9(){
        return array(
            'Butter a 9×13 inch baking dish. Arrange the slices of bread in the bottom. In a large bowl, beat together eggs, milk, cream, vanilla and cinnamon. Pour over bread slices, cover, and refrigerate overnight.',
            'The next morning, preheat oven to 350 degrees F (175 degrees C). In a small saucepan, combine butter, brown sugar and corn syrup; heat until bubbling. Pour over bread and egg mixture.',
            'Bake in preheated oven, uncovered, for 40 minutes.'
        );
    }
    public function getRecipe10(){
        return array(
            'Preheat your oven to 375° F. Lightly butter/ spray 6 cups of a muffin tin.',
            'Roll out your slices of bread with a rolling pin to make them rather thin.',
            'Cut out a ~4-5 inch circle from the corner of each piece of bread. Save the scraps of bread as you’ll need them to fill in a few holes in your toast cups.',
            'Cut the circles in half and lightly butter/ spray each piece.',
            'Place a small scrap of bread in each muffin tin to cover about 2/3 of the bottom.',
            'Place 2 circle halves of bread into each cup and position them so that there are minimal holes.',
            'Next, load in your remaining ingredients with the egg going in last. I put 3-4 leaves of spinach at the very bottom with a layer of cheese on top of that.',
            'Position the bacon where you want it and crack one egg over each muffin tin.',
            'Bake in the oven until the egg whites have set and are thoroughly white, roughly 15 minutes',
            'Once out of the oven, sprinkle with a bit of salt and pepper. Serve immediately and ENJOY!'
        );
    }
    public function getRecipe11(){
        return array(
            'Add the almond butter and brown rice syrup to a small bowl and stir until combined. Set aside.',
            'Combine the oat flour, coconut flour, quick oats, and crispy rice cereal in a large mixing bowl, stirring until well combined. Pour the wet ingredients into the dry ingredients and mix until fully incorporated. The mix might seem a little dry and tough to work with at first, but continue mixing until the ingredients start to incorporate, adding 1-2 tbsp (15-30 ml) of almond milk to soften it up, if needed.',
            'Using a heaping tablespoon, roll the dough between your hands to form individual balls. Set them aside on a large baking sheet lined with parchment paper, and repeat with the remaining dough.',
            'To prepare the chocolate drizzle, melt the chocolate chips in the microwave or over a double broiler, stirring periodically to ensure no clumps remain. Use a spoon to drizzle the chocolate over each ball, and sprinkle with any desired toppings.',
            'Refrigerate for ~15 minutes, or until the chocolate has set. Store the bites in an airtight container in the fridge for up to 2 weeks.'
        );
    }
    public function getRecipe12(){
        return array(
            'Heat oven to 400°F. Lightly grease cookie sheets.',
            'Separate dough into 10 biscuits. Separate each biscuit into 4 layers; place on greased cookie sheets. Spread each biscuit layer with 1 teaspoon pizza sauce. Top each with 2 pepperoni slices and about 2 teaspoons cheese.',
            'Bake at 400°F. for 7 to 9 minutes or until biscuits are golden brown.'
        );
    }
    public function getRecipe13(){
        return array(
            'Toss broccoli with bacon, onion, cranberries and sunflower kernels.',
            'Whisk together mayo, sugar and vinegar. Toss dressing in with broccoli salad an hour or two before serving. Refrigerate until ready to serve. Stir before serving. Enjoy!'
        );
    }
    public function getRecipe14(){
        return array(
            'Add all the ingredients in the blender and blend until the mixture is smooth. If you like your smoothie to be a little less thick, then add a little more almond milk.',
            'Serve the banana and almond milk smoothie in a glass and add a few strawberries on the top'
        );
    }
    public function getRecipe15(){
        return array(
            'Preheat oven to 425 degrees. Line a rimmed baking sheet with foil. Lightly spray foil with non stick cooking spray.',
            'In a bowl, combine Parmesan cheese and mayonnaise. Spread on top of each chicken breast.',
            'Then, sprinkle each with bread crumbs.',
            'Bake for 30-35 minutes or chicken is fully cooked.'
        );
    }
    
    public function getRecipe16(){
        return array(
            'Preheat oven to 375 convection or 400 conventional.',
            'Trim and dice about 1 (or 2) pound skinless boneless chicken breast into about 1/2 inch or smaller pieces. Dice one medium onion.',
            'Add one tablespoon oil to a large fry pan over medium-high heat and when hot add chicken and onion together. Cook until chicken is done. About 5 minutes. (I checked the chicken with an instant read thermometer for 165. Only for the paranoid, it will also be cooked in the oven.)',
            'Spray a 9 by 13 baking dish with PAM. Heat 8 tortillas (8 inches) in a microwave for 15-20 seconds to soften.',
            'Assemble the enchiladas. On a tortilla add about 1/4 cup of chicken/onion (more if you increased the chicken) and about two tablespoons of Monterey Jack cheese. Place this not in the center but about at the 1/3 mark then roll over the short end and roll tightly. Place seam down in the baking pan. Repeat until done.',
            'In a medium saucepan melt four tablespoons ( 1/2 stick) butter over medium heat. When melted, add 1/4 cup flour. Whisk together and cook for a few minutes then add one can chicken broth and continuously whisk until thickened then a few minutes more.',
            'Remove from heat and add 1 cup sour cream and 1 (4 ounces) can chopped green chilis',
            'Pour over the assembled enchiladas. Top with 1 cup Monterey Jack cheese.',
            'Bake until golden brown and bubbling. About 20 minutes.'
        );
    }
    public function getRecipe17(){
        return array(
            'Heat olive oil in a 12-inch non-stick skillet over medium-high heat.',
            'Add in chicken and let brown on bottom about 3 - 4 minutes then flip and continue to cook until center registers about 160 degrees, about 3 minutes longer.',
            'While chicken is cooking, in a small mixing bowl (or liquid measuring cup) whisk together soy sauce, water, honey, brown sugar, rice vinegar, sesame oil, ginger, garlic and cornstarch.',
            'Stir the sauce in with the cooked chicken and continue to cook and toss until sauce has thickened, about 30 - 60 seconds longer.',
            'Serve warm garnished with green onions and sesame seeds if desired.'
        );
    }
    public function getRecipe18(){
        return array(
            'Preheat oven to 375F/190C.  Spray a small casserole dish with non-stick spray or oil.',
            'Trim any visible fat from chicken breasts, then put them one at a time inside a heavy plastic bag and pound with meat mallet (or something heavy) until the chicken is as thin as you can get it.  Don’t worry too much about the shape or whether there are some loose pieces, you can tuck them in when you roll up the chicken.',
            'In a small bowl mix together the basil pesto, sour cream, and grated mozzarella.',
            'Prepare two bowls, one with the two beaten eggs and one with a mixture of the finely-grated Parmesan and the almond flour.',
            'Use a rubber scraper to spread a thin layer of the pesto mixture over each chicken breast, stopping about 1/2 inch from the edge of the chicken. (This will help prevent too much of the pesto mixture from running out when it cooks.',
            'Roll up the chicken breasts lengthwise and secure them with a couple of toothpicks.  (I roll them so the finished piece is as thin as I can get it so they will cook quickly.)',
            'Dip each chicken breast roll first into the egg mixture and then into the Parmesan-almond flour mixture, patting it on so each chicken breast roll is well-coated with the mixture.',
            'Put chicken breasts into the casserole dish and bake until the chicken is firm and lightly browned.  (Start checking after about 25 minutes. If it seems like the chicken is not browning quickly enough, you can turn up the heat for the last 5-10 minutes of cooking time, but don’t overcook or the chicken will be dry. Total baking time will be about 30-35 minutes unless your chicken breasts are really large.)',
            'Some chicken breasts sold in U.S. stores have added water. If there is some water in the bottom of the baking dish after the chicken has baked for a while, just spoon it out and discard.)',
            'Serve hot.'
        );
    }
    public function getRecipe19(){
        return array(
            'Pour all the ingredients into blender except for 1½ tsp melted coconut oil.',
            'Blend 30 seconds or until ingredients are thoroughly blended and frothy.',
            'Pour remaining oil in nonstick pan or griddle. (Griddle is best.)',
            'Cook pancakes over medium heat in about 4 inch rounds.',
            'Wait to turn them until the bubbles begin to pop on top, using a thin and wide pancake turner.'
        );
    }
    public function getRecipe20(){
        return array(
            'Place the softened butter and granulated sugar into a large bowl. Using a hand mixer or stand mixer fitted with a whisk attachment, cream together the butter and sugar on medium speed for 1 minute, or until pale and fluffy',
            'Add the egg, sour cream, vanilla extract, and almond extract, and continue to beat on medium speed for 30 seconds to one minute, until light and fluffy.',
            'Turn the mixer to low, and add the flour, baking soda, baking powder, and salt to the bowl. Beat the mixture for about 1 minute, until all ingredients are combined.',
            'Shape the cookie dough into three portions. Flatten into rough circles approximately 1” thick and wrap each in plastic wrap.',
            'Refrigerate the cookie dough for 30 minutes to 1 hour.',
            'Line two baking sheets with silicone baking mats or parchment paper. Set aside.',
            'Preheat the oven to 350° F.',
            'Remove the chilled cookie dough from the refrigerator. Generously dust a clean work surface with flour',
            'Unwrap one portion of cookie dough. Using a rolling pin, roll the dough to 1/2” thickness.',
            'Using a 3” round cookie cutter, cut the cookie dough into circles, and transfer onto the prepared baking sheets',
            'Repeat the rolling and cutting process with the remaining 2 portions of cookie dough',
            'Transfer the baking sheets to the preheated oven. Bake the cookies for 11-12 minutes, until puffy and slightly golden brown at the edges',
            'Remove the baking sheets from the oven. Allow the cookies to cool for 5 minutes on the sheets, then transfer them to cooling racks to cool completely before frosting and decorating',
            'While the cookies cool, make the frosting. Using either a hand mixer or a stand mixer fitted with a whisk attachment, cream together the butter and cream cheese until smooth.',
            'With the mixer on the lowest speed, add half of the powdered sugar. Mix until combined, then add the remaining powdered sugar, vanilla, heavy cream, salt, and desired food coloring to the bowl.',
            'Beat on high speed for 2-3 minutes, until the frosting is light and fluffy',
            'Once the cookies are completely cool, spread each with 1-2 Tbs. of buttercream. Top with sprinkles, if desired.',
            'Store cookies in the refrigerator. For best flavor and texture, allow the cookies to sit at room temperature for 10-15 minutes before eating'
        );
    }
    public function getRecipe21(){
        return array(
            'Preheat oven to 175°C | 350°F.',
            'Lightly grease an 8x12-inch square baking pan* with cooking oil spray. Line with parchment paper (or baking paper); set aside.',
            'Combine melted butter, oil and sugars together in a medium-sized bowl. Whisk well to combine. Add the eggs and vanilla; beat until lighter in colour (another minute).',
            'Sift in flour, cocoa powder and salt. Gently fold the dry ingredients into the wet ingredients until JUST combined (do NOT over beat as doing so well affect the texture of your brownies).',
            'Fold in 3/4 of the chocolate pieces.',
            'Pour batter into prepared pan, smoothing the top out evenly, and top with remaining chocolate pieces.',
            'Bake for 25-30 minutes or until the centre of the brownies in the pan no longer jiggles and is just set to the touch (the brownies will keep baking in the hot pan out of the oven). If testing with a toothpick, the toothpick should come out dirty for fudge-textured brownies.',
            'After 10 minutes, carefully remove them out of the pan and allow to cool to room temperature before slicing into 16 brownies.'
        );
    }
    public function getRecipe22(){
        return array(
            'In a large pot (you will need a lid), brown ground beef with minced garlic and onion powder until no longer pink. If necessary, drain, then, return to pot.',
            'Add spaghetti sauce, chicken broth and water into pot. Bring to a boil.',
            'Add spaghetti noodles.',
            'Reduce heat and cook covered for 20 minutes or until pasta noodles are tender.',
            'You will need to stir noodles occasionally. If necessary, add additional water in small amounts.',
            'Stir in Parmesan cheese before serving.'
        );
    }
    public function getRecipe23(){
        return array(
            'To make sauce add soy sauce, sesame oil, ginger, sugar, and cornstarch to a small bowl. Stir to combine. (Alternatively sometimes I make the sauce ahead of time by adding everything to a jar, refrigerating it and just giving it a good shake before adding to the skillet).',
            'Clean and cut vegetables into bite size pieces. I cut the carrots into matchsticks, the broccoli into small florets, and the bell pepper into strips.',
            'Lightly grease a large skillet or wok over medium-high heat. Add chicken and cook 3-4 minutes until the outside is no loner pink.',
            'Add carrots, broccoli, and pepper to the skillet. Stir Fry for 5-8 minutes until the vegetables start getting tender.',
            'Add spinach and sauce to the skillet. Reduce heat to medium-low. Stir Fry about 5 minutes until the spinach has wilted and the sauce has thickened slightly.'
        );
    }
    public function getRecipe24(){
        return array(
            'Place soups, chicken broth, salt, and garlic seasoning into a crock-pot over low heat. Whisk until smooth. Place chicken in, pressing to the bottom. Cover lid and cook on low for 6 hours or on high for 3 hours.',
            'When chicken is cooked, use 2 forks to shred into bite size pieces. Stir in sour cream and broccoli.',
            'Serve over steamed rice and sprinkle with cheese.  4-6 servings',
            'Add carrots, broccoli, and pepper to the skillet. Stir Fry for 5-8 minutes until the vegetables start getting tender.',
            'Add spinach and sauce to the skillet. Reduce heat to medium-low. Stir Fry about 5 minutes until the spinach has wilted and the sauce has thickened slightly.'
        );
    }
    public function getRecipe25(){
        return array(
            'Preheat oven to 350',
            'In a large microwave safe bowl, melt the butter and white chocolate in 30 second bursts, stirring each time until melted. Stir in the sugar. ',
            'Mix in the mashed bananas, Add eggs, salt, and vanilla and stir until well combined. Mix in the flour until completely incorporated. ',
            'Spread batter into a 8" square pan and bake 15-20 minutes or until tester comes out clean. Cool completely and store covered.'
        );
    }
    public function getRecipe26(){
        return array(
            'Mix soup and ranch seasoning in the crock of a 5-7 quart slow cooker.',
            'Gradually add the water, stirring so it doesnt get lumpy.',
            'Stir in the red pepper.',
            'Add the chicken, cover and cook on low 6-8 hours, high 3-5 hours',
            'About 1/2 hour before the minimum cook time, add the cubed cream cheese and the Parmesan cheese.',
            'Cover and continue cooking for about 30 minutes.',
            'Stir well so the cream cheese is well blended into sauce.'
        );
    }
    public function getRecipe27(){
        return array(
            'Preheat the oven to 180C/160C Fan/Gas 4. Grease and line two 20cm/8in sandwich tins.',
            'For the cake, place all of the cake ingredients, except the boiling water, into a large mixing bowl. Using a wooden spoon, or electric whisk, beat the mixture until smooth and well combined.',
            'Add the boiling water to the mixture, a little at a time, until smooth. (The cake mixture will now be very liquid.)',
            'Divide the cake batter between the sandwich tins and bake in the oven for 25–35 minutes, or until the top is firm to the touch and a skewer inserted into the centre of the cake comes out clean.',
            'Remove the cakes from the oven and allow to cool completely, still in their tins, before icing.',
            'For the chocolate icing, heat the chocolate and cream in a saucepan over a low heat until the chocolate melts. Remove the pan from the heat and whisk the mixture until smooth, glossy and thickened. Set aside to cool for 1–2 hours, or until thick enough to spread over the cake.',
            'To assemble the cake, run a round-bladed knife around the inside of the cake tins to loosen the cakes. Carefully remove the cakes from the tins.',
            'Spread a little chocolate icing over the top of one of the chocolate cakes, then carefully top with the other cake.',
            'Transfer the cake to a serving plate and ice the cake all over with the chocolate icing, using a palette knife.'
        );
    }
    public function getRecipe28(){
        return array(
            'Heat olive oil in a large skillet over medium high heat. Add garlic and cook, stirring frequently, until fragrant, about 1-2 minutes.',
            'Stir in chicken broth, milk, butter and fettuccine; season with salt and pepper, to taste.',
            'Bring to a boil; reduce heat and simmer, stirring occasionally, until pasta is cooked through, about 18-20 minutes. Stir in Parmesan. If the mixture is too thick, add more milk as needed until desired consistency is reached.',
            'Serve immediately, garnished with parsley, if desired.'
        );
    }
    public function getRecipe29(){
        return array(
            'Combine first 3 ingredients in a pot. Heat until warm. ',
            'Add the cheese, stir – and cook until the cheese is melted & mixture is hot.',
            'Add extra milk if you want a thinner consistency.'
        );
    }
    public function getRecipe30(){
        return array(
            'Melt butter in a large pot over medium heat, meanwhile add canned tomatoes along with the juices to a blender and process until well pureed (if you like your soup with more texture you can go ahead and leave some small chunks). ',
            'Add garlic to pot and saute 30 seconds then pour in tomatoes and chicken stock and bring to a gentle bubble. ',
            'Reduce heat and simmer 10 minutes.',
            'Stir in half of the basil, season with salt and pepper if desired.',
            'Plate and drizzle each serving with cream if using then sprinkle with remaining basil.',
            'Serve warm.'
        );
    }
    public function getRecipe31(){
        return array(
            'Place oil in large pot over medium heat.',
            'Add carrots, onions, garlic, thyme and rosemary. ',
            'Cook for 15 minutes, until carrots are fork tender. ',
            'Remove herb sprigs and transfer carrots and vegetables to blender (I used our Blendtec). ',
            'Puree, using the soup button. ',
            'Add chicken broth and continue to puree.',
            'Transfer to large saucepan over medium heat and add bacon strips.',
            'Season with salt, pepper and hot sauce.',
            'Simmer until ready to serve.'
        );
    }
    public function getRecipe32(){
        return array(
            'Rinse the chicken and remove the inside parts.',
            'Place the chicken in a large stockpot, add the chicken broth, and then add enough water to cover the chicken.',
            'Bring the chicken in broth to a boil, if there is visible fat, skim it and discard. ',
            'Then add the onion, carrot, celery, garlic and parsnip.',
            'Simmer until chicken is tender- about 2 1/2 hours. ',
            'Remove the chicken to a cutting board and let rest until its cool enough to handle. ',
            'Shred the chicken apart, then add back to the soup.',
            'Stir in the parsley and dill.',
            'Taste and add salt and pepper. ',
            'If you want noodles in the soup, add them to the broth, bring to a boil again and simmer for 8 to 10 minutes (or until noodles are tender).'
        );
    }
}
