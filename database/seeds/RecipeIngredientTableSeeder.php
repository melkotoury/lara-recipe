<?php

use Illuminate\Database\Seeder;
use App\RecipeIngredient;

class RecipeIngredientTableSeeder extends Seeder
{



    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for ($i=0;$i<sizeof($this->getRecipe1());$i++){
            $recipe_ingredient1 = new RecipeIngredient;
            $recipe_ingredient1->name = $this->getRecipe1()[$i];
            $recipe_ingredient1->recipe_id = 1;
            $recipe_ingredient1->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe2());$i++){
            $recipe_ingredient2 = new RecipeIngredient;
            $recipe_ingredient2->name = $this->getRecipe2()[$i];
            $recipe_ingredient2->recipe_id = 2;
            $recipe_ingredient2->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe3());$i++){
            $recipe_ingredient3 = new RecipeIngredient;
            $recipe_ingredient3->name = $this->getRecipe3()[$i];
            $recipe_ingredient3->recipe_id = 3;
            $recipe_ingredient3->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe4());$i++){
            $recipe_ingredient4 = new RecipeIngredient;
            $recipe_ingredient4->name = $this->getRecipe4()[$i];
            $recipe_ingredient4->recipe_id = 4;
            $recipe_ingredient4->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe5());$i++){
            $recipe_ingredient5 = new RecipeIngredient;
            $recipe_ingredient5->name = $this->getRecipe5()[$i];
            $recipe_ingredient5->recipe_id = 5;
            $recipe_ingredient5->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe6());$i++){
            $recipe_ingredient6 = new RecipeIngredient;
            $recipe_ingredient6->name = $this->getRecipe6()[$i];
            $recipe_ingredient6->recipe_id = 6;
            $recipe_ingredient6->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe7());$i++){
            $recipe_ingredient7 = new RecipeIngredient;
            $recipe_ingredient7->name = $this->getRecipe7()[$i];
            $recipe_ingredient7->recipe_id = 7;
            $recipe_ingredient7->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe8());$i++){
            $recipe_ingredient8 = new RecipeIngredient;
            $recipe_ingredient8->name = $this->getRecipe8()[$i];
            $recipe_ingredient8->recipe_id = 8;
            $recipe_ingredient8->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe9());$i++){
            $recipe_ingredient9 = new RecipeIngredient;
            $recipe_ingredient9->name = $this->getRecipe9()[$i];
            $recipe_ingredient9->recipe_id = 9;
            $recipe_ingredient9->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe10());$i++){
            $recipe_ingredient10 = new RecipeIngredient;
            $recipe_ingredient10->name = $this->getRecipe10()[$i];
            $recipe_ingredient10->recipe_id = 10;
            $recipe_ingredient10->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe11());$i++){
            $recipe_ingredient11 = new RecipeIngredient;
            $recipe_ingredient11->name = $this->getRecipe11()[$i];
            $recipe_ingredient11->recipe_id = 11;
            $recipe_ingredient11->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe12());$i++){
            $recipe_ingredient12 = new RecipeIngredient;
            $recipe_ingredient12->name = $this->getRecipe12()[$i];
            $recipe_ingredient12->recipe_id = 12;
            $recipe_ingredient12->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe13());$i++){
            $recipe_ingredient13 = new RecipeIngredient;
            $recipe_ingredient13->name = $this->getRecipe13()[$i];
            $recipe_ingredient13->recipe_id = 13;
            $recipe_ingredient13->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe14());$i++){
            $recipe_ingredient14 = new RecipeIngredient;
            $recipe_ingredient14->name = $this->getRecipe14()[$i];
            $recipe_ingredient14->recipe_id = 14;
            $recipe_ingredient14->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe15());$i++){
            $recipe_ingredient15 = new RecipeIngredient;
            $recipe_ingredient15->name = $this->getRecipe15()[$i];
            $recipe_ingredient15->recipe_id = 15;
            $recipe_ingredient15->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe16());$i++){
            $recipe_ingredient16 = new RecipeIngredient;
            $recipe_ingredient16->name = $this->getRecipe16()[$i];
            $recipe_ingredient16->recipe_id = 16;
            $recipe_ingredient16->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe17());$i++){
            $recipe_ingredient17 = new RecipeIngredient;
            $recipe_ingredient17->name = $this->getRecipe17()[$i];
            $recipe_ingredient17->recipe_id = 17;
            $recipe_ingredient17->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe18());$i++){
            $recipe_ingredient18 = new RecipeIngredient;
            $recipe_ingredient18->name = $this->getRecipe18()[$i];
            $recipe_ingredient18->recipe_id = 18;
            $recipe_ingredient18->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe19());$i++){
            $recipe_ingredient19 = new RecipeIngredient;
            $recipe_ingredient19->name = $this->getRecipe19()[$i];
            $recipe_ingredient19->recipe_id = 19;
            $recipe_ingredient19->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe20());$i++){
            $recipe_ingredient20 = new RecipeIngredient;
            $recipe_ingredient20->name = $this->getRecipe20()[$i];
            $recipe_ingredient20->recipe_id = 20;
            $recipe_ingredient20->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe21());$i++){
            $recipe_ingredient21 = new RecipeIngredient;
            $recipe_ingredient21->name = $this->getRecipe21()[$i];
            $recipe_ingredient21->recipe_id = 21;
            $recipe_ingredient21->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe22());$i++){
            $recipe_ingredient22 = new RecipeIngredient;
            $recipe_ingredient22->name = $this->getRecipe22()[$i];
            $recipe_ingredient22->recipe_id = 22;
            $recipe_ingredient22->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe23());$i++){
            $recipe_ingredient23 = new RecipeIngredient;
            $recipe_ingredient23->name = $this->getRecipe23()[$i];
            $recipe_ingredient23->recipe_id = 23;
            $recipe_ingredient23->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe24());$i++){
            $recipe_ingredient24 = new RecipeIngredient;
            $recipe_ingredient24->name = $this->getRecipe24()[$i];
            $recipe_ingredient24->recipe_id = 24;
            $recipe_ingredient24->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe25());$i++){
            $recipe_ingredient25 = new RecipeIngredient;
            $recipe_ingredient25->name = $this->getRecipe25()[$i];
            $recipe_ingredient25->recipe_id = 25;
            $recipe_ingredient25->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe26());$i++){
            $recipe_ingredient26 = new RecipeIngredient;
            $recipe_ingredient26->name = $this->getRecipe26()[$i];
            $recipe_ingredient26->recipe_id = 26;
            $recipe_ingredient26->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe27());$i++){
            $recipe_ingredient27 = new RecipeIngredient;
            $recipe_ingredient27->name = $this->getRecipe27()[$i];
            $recipe_ingredient27->recipe_id = 27;
            $recipe_ingredient27->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe28());$i++){
            $recipe_ingredient28 = new RecipeIngredient;
            $recipe_ingredient28->name = $this->getRecipe28()[$i];
            $recipe_ingredient28->recipe_id = 28;
            $recipe_ingredient28->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe29());$i++){
            $recipe_ingredient29 = new RecipeIngredient;
            $recipe_ingredient29->name = $this->getRecipe29()[$i];
            $recipe_ingredient29->recipe_id = 29;
            $recipe_ingredient29->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe30());$i++){
            $recipe_ingredient30 = new RecipeIngredient;
            $recipe_ingredient30->name = $this->getRecipe30()[$i];
            $recipe_ingredient30->recipe_id = 30;
            $recipe_ingredient30->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe31());$i++){
            $recipe_ingredient31 = new RecipeIngredient;
            $recipe_ingredient31->name = $this->getRecipe31()[$i];
            $recipe_ingredient31->recipe_id = 31;
            $recipe_ingredient31->save();
        }
        for ($i=0;$i<sizeof($this->getRecipe32());$i++){
            $recipe_ingredient32 = new RecipeIngredient;
            $recipe_ingredient32->name = $this->getRecipe32()[$i];
            $recipe_ingredient32->recipe_id = 32;
            $recipe_ingredient32->save();
        }
    }

    public function getRecipe1(){
        return  array(
            '285g/10oz plain flour',
            '1 tsp bicarbonate of soda',
            '½ tsp salt',
            '110g/4oz butter, plus extra for greasing',
            '225g/8oz caster sugar',
            '2 free-range eggs',
            '4 ripe bananas, mashed',
            '85ml/3fl oz buttermilk (or normal milk mixed with 1½ tsp lemon juice or vinegar)',
            '1 tsp vanilla extract'
        );
    }

    public function getRecipe2(){
        return array(
            '4 oz fettuccine pasta',
            '3/4 lb raw shrimp, peeled, deveined and tails removed',
            '1 teaspoon kosher salt',
            '1 teaspoon freshly ground pepper',
            '2 tablespoon flour',
            '1 tablespoon olive oil',
            '1 tablespoon butter',
            '1 1/4 cups low-sodium chicken broth',
            '1/2 cup whipping cream',
            '1/2 teaspoon cajun seasoning'
        );
    }
    public function getRecipe3(){
        return array(
            '1 lb 93% lean ground turkey',
            '1 garlic, minced',
            '1/4 onion, minced',
            '1 tbsp chopped fresh cilantro or parsley',
            '1 tsp garlic powder',
            '1 tsp cumin powder',
            '1 tsp kosher salt',
            '3 large sweet red bell peppers, washed',
            '1 cup reduced sodium chicken broth, divided',
            '1/4 cup tomato sauce',
            '1 1/2 cups cooked brown rice',
            'Olive oil spray',
            '6 tbsp part skim shredded cheddar cheese'
        );
    }
    public function getRecipe4(){
        return array(
            '1 lb boneless round chuck steak, flat iron, or flank steak, cut into thin 3-inch strips',
            '1 tablespoon cornstarch',
            '2 tablespoons water',
            '1 tablespoon olive vegetable, or sesame oil',
            '3 cloves garlic minced',
            '4 cups broccoli florets',
            '1 small onion cut into strips',
            '1/2 cup mushrooms sliced',
            'hot cooked rice or noodles for serving',
            'For the sauce:',
            '1/3 cup reduced sodium soy sauce',
            '1/3 cup water',
            '1 tablespoon brown sugar or honey',
            '1 teaspoon ground ginger',
            '1 teaspoon corn starch'
        );
    }
    public function getRecipe5(){
        return array(
            'For Muffin Batter',
            '1 cup milk (low-fat is fine)',
            '2 teaspoons lemon juice',
            '12 tablespoons (1-1/2 sticks) unsalted butter, softened but still cool',
            '1 cup granulated sugar',
            '2 large eggs',
            '1-1/2 teaspoons vanilla extract',
            '3 cups all-purpose flour, spooned into measuring cup and leveled-off',
            '2-1/2 teaspoons baking powder',
            '1/4 teaspoon baking soda',
            '1 teaspoon salt',
            '2 teaspoons grated nutmeg',
            'For Muffin Topping',
            '3 tablespoons unsalted butter',
            '3 tablespoons granulated sugar',
            '2-1/4 teaspoons cinnamon'
        );
    }
    public function getRecipe6(){
        return array(
            'Cake:',
            '1 box yellow cake mix',
            '4 eggs',
            '1/2 cup oil (I used vegetable oil)',
            '1 (8 oz) can crushed pineapple with juice',
            'Frosting:',
            '1 (8 oz) container whipped topping, thawed',
            '1 small box instant vanilla pudding',
            '1 (8 oz) can crushed pineapple with juice'
        );
    }
    public function getRecipe7(){
        return array(
            '1 cup milk, any kind',
            '1/2 cup plain or vanilla yogurt',
            '2 bananas, chopped',
            '6 strawberries, chopped',
            'Splash of orange juice or any kind of other juice you have on hand'
        );
    }
    public function getRecipe8(){
        return array(
            '8 flour tortillas, soft taco size',
            '2 cups cooked, shredded chicken (I used half of a rotisserie chicken)',
            '2 cups shredded Monterey Jack cheese',
            '3 Tbsp butter',
            '3 Tbsp flour',
            '2 cups chicken broth',
            '1 cup sour cream',
            '1 (4-oz) can diced green chilies'
        );
    }
    public function getRecipe9(){
        return array(
            '1 (1 pound) loaf French bread, cut diagonally in 1 inch slices',
            '8 eggs',
            '2 cups milk',
            '1 1/2 cups half-and-half cream',
            '2 teaspoons vanilla extract',
            '1/4 teaspoon ground cinnamon',
            '3/4 cup butter',
            '1 1/3 cups brown sugar',
            '3 tablespoons light corn syrup'
        );
    }
    public function getRecipe10(){
        return array(
            '6 slices- Bread of your choice',
            'Large handful of spinach',
            '1/4 cup cheese',
            '6 Eggs',
            '6 Slices of Bacon, cooked',
            'Salt & Pepper to taste',
            '2 tablespoons of butter OR butter cooking spray'
        );
    }
    public function getRecipe11(){
        return array(
            '1/2 cup (128 g) almond butter',
            '6 tbsp (120 g) brown rice syrup',
            '1 cup (80 g) oats, ground into a flour',
            '1/4 cup (28 g) coconut flour',
            '1/2 cup (40 g) quick oats',
            '1/2 cup (15 g) crispy rice cereal',
            '1 - 2 tbsp (15 - 30 ml) unsweetened almond milk, if needed',
            '1/4 cup (40 g) chocolat chips, for melting'
        );
    }
    public function getRecipe12(){
        return array(
            '2 (6 oz) cans Pillsbury™ Grands!™ Jr. Golden Layers™ refrigerated buttermilk biscuits',
            '3/4 cup pizza sauce',
            '80 pepperoni slices (from two 3.5-oz. pkg.)',
            '4 oz. (1 cup) shredded mozzarella cheese'
        );
    }
    public function getRecipe13(){
        return array(
            '1 lb. fresh broccoli, cut into bite sized pieces',
            '1 lb. bacon, cooked and crumbled',
            '1 small red onion, diced finely',
            '½ cup dried cranberries',
            '¾ cup sunflower seed kernels',
            '1 cup light mayonnaise',
            '¼ cup Truvia Baking Blend (or ½ cup sugar)',
            '2 tsp. white vinegar'
        );
    }
    public function getRecipe14(){
        return array(
            '1&1/2 ripe banana',
            '1 cup of strawberries',
            '1/2 cup of almond milk',
            '2 tablespoons of ground flaxseed meal'
        );
    }
    public function getRecipe15(){
        return array(
            '3-4 boneless chicken breasts',
            '1/2 cup mayonnaise',
            '1/4 cup grated Parmesan cheese',
            '2-3 TBSP dried bread crumbs'
        );
    }
    
    public function getRecipe16(){
        return array(
            '2 lb chicken breast diced. Could use as little as 1 pound',
            '1 onion medium',
            '1 tablespoon vegetable oil',
            '8 flour tortillas 8 inch each',
            '2 cups Monterey Jack cheese shredded',
            '1/4 cup butter',
            '1/4 cup flour',
            '15 ounce chicken broth',
            '1 cup sour cream',
            '4 ounce chopped green chilis'
        );
    }
    public function getRecipe17(){
        return array(
            '1 1/4 lbs. boneless skinless chicken breasts, diced into 1-inch cubes',
            '1 Tbsp olive oil',
            '1/4 cup low-sodium soy sauce',
            '1/4 cup water',
            '2 Tbsp honey',
            '1 1/2 Tbsp packed light brown sugar',
            '1 Tbsp rice vinegar',
            '1/4 tsp sesame oil (optional)',
            '2 tsp peeled and minced fresh ginger',
            '2 tsp peeled and minced fresh garlic (2 cloves)',
            '2 tsp cornstarch',
            'Sesame seeds and chopped green onions, for serving (optional)'
        );
    }
    public function getRecipe18(){
        return array(
            '4 large boneless, skinless chicken breasts',
            '4 T Basil Pesto with Lemon or your favorite commercial pesto',
            '4 T sour cream',
            '4 T finely grated Mozzarella',
            '2 eggs, beaten well',
            '4 T finely grated Parmesan cheese',
            '4 T almond flour',
            'fresh-ground black pepper to taste'
        );
    }
    public function getRecipe19(){
        return array(
            '3 large eggs,',
            '1/2 cup low fat Ricotta',
            '1/3 cup almond flour',
            '2 T. coconut flour',
            '1 pinch salt',
            '1/4 tsp baking powder',
            '1 T. coconut oil, melted (divided)'
        );
    }
    public function getRecipe20(){
        return array(
            '1 cup unsalted butter (softened)',
            '1 cup granulated sugar',
            '1 eggs',
            '1/2 cup sour cream',
            '1 teaspoon vanilla extract',
            '1/4 teaspoon almond extract',
            '3 cups all-purpose flour',
            '1/2 teaspoon baking soda',
            '1/2 teaspoon baking powder',
            '1/2 teaspoon salt',
            '1/2 cup unsalted butter (softened)',
            '1 ounce cream cheese (softened)',
            '1 3/4 cups powdered sugar (sifted)',
            '1 teaspoon vanilla extract',
            '2 tablespoons heavy cream',
            '1/8 teaspoon salt',
            'food coloring (if desired)',
            'sprinkles (if desired)'
        );
    }
    public function getRecipe21(){
        return array(
            '1 cup 8oz/240g butter, melted and cooled',
            '2 tablespoons (30ml) vegetable oil',
            '1 1/4 cups (9oz/260g) white sugar',
            '1 cup (7oz/200g) packed light brown sugar',
            '4 (2oz/57g each) large eggs, at room temperature',
            '1 tablespoon (15ml) pure vanilla extract',
            '3/4 teaspoon salt',
            '1 cup (3.5oz/130g) all purpose flour',
            '1 cup (3.5oz/100g) good quality, unsweetened cocoa powder',
            '7 oz (200g) roughly chopped chocolate or large chocolate chips'
        );
    }
    public function getRecipe22(){
        return array(
            '1 lb ground beef ( or turkey )',
            '1/2 tsp minced garlic',
            '1 tsp onion powder',
            '28 oz spaghetti sauce',
            '12 oz dry spaghetti noodles, broken into pieces',
            '14 oz chicken broth',
            '1/4 cup grated Parmesan cheese',
            '1/2 cup water'
        );
    }
    public function getRecipe23(){
        return array(
            '1 pound chicken breast, cut into stir fry strips',
            '2 large carrots',
            '1 head broccoli, or about 2 cups broccoli florets',
            '1 red bell pepper',
            '1-2 cups fresh spinach, or a large handful or 2 (it wilts down)',
            'GARNISHES: lemon juice, sesame seeds, & serve over Rice',
            'For the Sauce:',
            '1/2 cup soy sauce',
            '1 teaspoon sesame oil',
            '1/2 teaspoon ground ginger',
            '1 teaspoon sugar',
            '2 teaspoons cornstarch'
        );
    }
    public function getRecipe24(){
        return array(
            '3-4 boneless chicken breasts',
            '1 10oz can cream of chicken soup',
            '1 10 oz can cheddar soup',
            '1 14 oz can chicken broth',
            '1/2 teaspoon salt',
            '1/4 teaspoon garlic salt seasoning',
            '1 cup sour cream',
            '6 cups broccoli florets, just fork tender (I cooked it in boiling water for 3-4 minutes)',
            '1 cup shredded cheddar cheese'
        );
    }
    public function getRecipe25(){
        return array(
            '1/4 cup unsalted butter',
            '4oz white chocolate',
            '2 Medium mashed bananas',
            '1/2 cup granulated sugar',
            '1 egg',
            '1/4 teaspoon salt',
            '1 teaspoon vanilla extract',
            '1 cup all purpose flour'
        );
    }
    public function getRecipe26(){
        return array(
            '2 lbs boneless skinless chicken thighs or breast',
            '1 can (10.75 oz) cream of chicken soup (low sodium preferred)',
            '1 envelope dry ranch dressing/seasoning mix -OR- 1/4 cup homemade ranch seaoning',
            '1/2 cup water',
            '1/4 cup finely diced sweet red bell pepper',
            '4 oz cream cheese, cut in small cubes',
            '3 tbs grated Parmesan cheese'
        );
    }
    public function getRecipe27(){
        return array(
            'For the cake',
            '225g/8oz plain flour',
            '350g/12 1/2 oz caster sugar',
            '85g/3oz cocoa powder',
            '1 1/2 tsp baking powder',
            '1 1/2 tsp bicarbonate of soda',
            '2 free-range eggs',
            '250ml/9fl oz milk',
            '125ml/4 1/2 fl oz vegetable oil',
            '2 tsp vanilla extract',
            '250ml/9fl oz boiling water',
            'For the chocolate icing',
            '200g/7oz plain chocolate',
            '200ml/7fl oz double cream'
        );
    }
    public function getRecipe28(){
        return array(
            '1 tablespoon olive oil',
            '4 cloves garlic, minced',
            '2 cups chicken broth',
            '1 cup milk, or more, as needed',
            '2 tablespoons unsalted butter',
            '8 ounces uncooked fettuccine',
            'Kosher salt and freshly ground black pepper, to taste',
            '1/4 cup freshly grated Parmesan cheese',
            '2 tablespoons chopped fresh parsley leaves'
        );
    }
    public function getRecipe29(){
        return array(
            '10 to 12oz of fresh broccoli, cooked',
            '1 family sized cream of chicken soup',
            '2 cups chicken broth',
            '1 cup (or more to taste) of milk',
            '2 cups shredded cheddar cheese'
        );
    }
    public function getRecipe30(){
        return array(
            '2 (28 oz) cans Whole Plum or San Marzano Tomatoes',
            '4 Tbsp salted butter',
            '3 cloves garlic , minced',
            '2 cups Progresso™ Chicken Stock',
            '1/4 cup chopped fresh basil',
            'Salt and freshly ground black pepper (optional)',
            '1/3 cup heavy cream (optional)'
        );
    }
    public function getRecipe31(){
        return array(
            '3 tablespoons extra virgin olive oil',
            '2 pounds peeled carrots, cut into 1 inch pieces',
            '1 large onion, thinly sliced',
            '2 tablespoons minced garlic',
            '1 sprig of fresh thyme',
            '1 sprig of fresh rosemary',
            '32 ounces chicken broth',
            '2 strips precooked bacon',
            '1 teaspoon kosher salt',
            '1/2 teaspoon freshly ground black pepper',
            '1/2 teaspoon hot sauce'
        );
    }
    public function getRecipe32(){
        return array(
            '4 to 5 pound whole chicken',
            '4 to 6 cups chicken broth',
            '1 large onion, diced',
            '3 large carrots, peeled and chopped',
            '3 stalks celery, chopped',
            '1 clove garlic, minced',
            '1 large parsnip, peeled and chopped (optional)',
            '2 heaping tablespoons chopped fresh Italian parsley',
            '1/2 teaspoon dried dill',
            '1/2 tablespoon kosher salt',
            '1/2 teaspoon black pepper',
            'noodles, optional!'
        );
    }
}
