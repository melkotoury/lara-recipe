<?php
use App\Recipe;
use App\RecipeImage;
use App\RecipeAdditionalInfo;
use App\Review;

?>
@extends('shared.master')

@section('content')
    {{--// browse recipe page content here--}}

    <!-- Titlebar
================================================== -->
    <section id="titlebar" class="browse-all">
        <!-- Container -->
        <div class="container">

            <div class="eight columns">
                <h2>Browse Recipes</h2>
            </div>

        </div>
        <!-- Container / End -->
    </section>


    <!-- Container -->
    <div class="advanced-search-container">
        <div class="container">
            <div class="sixteen columns">
                <div id="advanced-search">

                    <!-- Choose Category -->
                    <div class="select">
                        <label>Choose category</label>
                        <select data-placeholder="Choose Category" class="chosen-select-no-single">
                            <option value="1">All</option>
                            <option value="2">Breakfast</option>
                            <option value="3">Lunch</option>
                            <option value="4">Beverages</option>
                            <option value="5">Appetizers</option>
                            <option value="6">Soups</option>
                            <option value="7">Salads</option>
                            <option value="8">Beef</option>
                            <option value="9">Poultry</option>
                            <option value="10">Pork</option>
                            <option value="11">Seafood</option>
                            <option value="12">Vegetarian</option>
                            <option value="13">Vegetables</option>
                            <option value="14">Desserts</option>
                            <option value="15">Canning / Freezing</option>
                            <option value="16">Breads</option>
                            <option value="17">Holidays</option>
                        </select>
                    </div>

                    <!-- Choose ingredients -->
                    <div class="select included-ingredients">
                        <label>Select one or more ingredients that should be included in recipe</label>
                        <select data-placeholder="Included Ingredients" class="chosen-select" multiple>
                            <option value="sugar">sugar</option>
                            <option value="wheat-flour">wheat flour</option>
                            <option value="baking-powder">baking powder</option>
                            <option value="eggs">eggs</option><option value="salt">salt</option>
                            <option value="brown-sugar">brown sugar</option>
                            <option value="chicken-breast">chicken breast</option>
                            <option value="garlic">garlic</option>
                            <option value="milk">milk</option>
                            <option value="oil">oil</option>
                            <option value="sesame-oil">sesame oil</option>
                            <option value="soy-sauce">soy sauce</option>
                            <option value="butter">butter</option>
                            <option value="carrots">carrots</option>
                            <option value="coconut-flakes">coconut flakes</option>
                            <option value="honey">honey</option>
                            <option value="mung-bean-sprouts">mung bean sprouts</option>
                            <option value="noodles">noodles</option>
                            <option value="onion">onion</option>
                            <option value="potato-starch">potato starch</option>
                            <option value="red-bell-pepper">red bell pepper</option>
                            <option value="walnuts">walnuts</option>
                            <option value="water">water</option>
                            <option value="almonds">almonds</option>
                            <option value="baking-soda">baking soda</option>
                            <option value="beef-brisket">beef brisket</option>
                            <option value="beef-sirloin">beef sirloin</option>
                            <option value="bell-pepper">bell pepper</option>
                            <option value="broth">broth</option>
                            <option value="carrot">carrot</option>
                            <option value="cherries">cherries</option>
                            <option value="chocolate">chocolate</option>
                            <option value="cinnamon">cinnamon</option>
                            <option value="cinnamon-stick">cinnamon stick</option>
                            <option value="cocoa-powder">cocoa powder</option>
                            <option value="coconut">coconut</option>
                            <option value="corn-tortillas">corn tortillas</option>
                            <option value="dark-chocolate">dark chocolate</option>
                            <option value="dried-black-mushrooms">dried black mushrooms</option>
                            <option value="dried-soba">dried soba</option>
                            <option value="egg">egg</option>
                            <option value="five-spice-powder">five spice powder</option>
                            <option value="flour">flour</option>
                            <option value="ginger">ginger</option>
                            <option value="guilin-chili-sauce">guilin chili sauce</option>
                            <option value="leek">leek</option>
                            <option value="lettuce">lettuce</option>
                            <option value="olive-oil">olive oil</option>
                            <option value="oyster-sauce">oyster sauce</option>
                            <option value="pear-juice">pear juice</option>
                            <option value="pepper">pepper</option>
                            <option value="pineapple">pineapple</option>
                            <option value="red-onion">red onion</option>
                            <option value="redcurrant">redcurrant</option>
                            <option value="ribs-of-celery">ribs of celery</option>
                            <option value="sichuan-pepper">Sichuan pepper</option>
                            <option value="spring-onions">spring onions</option>
                            <option value="strawberries">strawberries</option>
                            <option value="taiwanese-golden-mushrooms">Taiwanese golden mushrooms</option>
                            <option value="yeast">yeast</option>
                            <option value="yellow-bell-pepper">yellow bell pepper</option>
                        </select>
                    </div>

                    <!-- Choose -->
                    <div class="select">
                        <label>Recipe needs to have</label>
                        <select data-placeholder="Choose Category" class="chosen-select">
                            <option value="1">All of selected ingredients </option>
                            <option value="2">Any of selected ingredients</option>
                        </select>
                    </div>

                    <div class="clearfix"></div>

                    <!-- Search Input -->
                    <nav class="search-by-keyword">
                        <form action="#" method="get">
                            <button><span>Search for Recipes</span><i class="fa fa-search"></i></button>
                            <input class="search-field" type="text" placeholder="Search by keyword" value=""/>
                        </form>
                    </nav>
                    <div class="clearfix"></div>


                    <!-- Advanced Search Button -->
                    <a href="#" class="adv-search-btn">Advanced Search <i class="fa fa-caret-down"></i></a>


                    <!-- Extra Search Options -->
                    <div class="extra-search-options closed">


                        <!-- Choose Excluded Ingredients -->
                        <div class="select excluded-ingredients">
                            <label>Select one or more ingredients that should be excluded from recipe</label>
                            <select data-placeholder="Excluded Ingredients" class="chosen-select" multiple>
                                <option value="sugar">sugar</option>
                                <option value="wheat-flour">wheat flour</option>
                                <option value="baking-powder">baking powder</option>
                                <option value="eggs">eggs</option><option value="salt">salt</option>
                                <option value="brown-sugar">brown sugar</option>
                                <option value="chicken-breast">chicken breast</option>
                                <option value="garlic">garlic</option>
                                <option value="milk">milk</option>
                                <option value="oil">oil</option>
                                <option value="sesame-oil">sesame oil</option>
                                <option value="soy-sauce">soy sauce</option>
                                <option value="butter">butter</option>
                                <option value="carrots">carrots</option>
                                <option value="coconut-flakes">coconut flakes</option>
                                <option value="honey">honey</option>
                                <option value="mung-bean-sprouts">mung bean sprouts</option>
                                <option value="noodles">noodles</option>
                                <option value="onion">onion</option>
                                <option value="potato-starch">potato starch</option>
                                <option value="red-bell-pepper">red bell pepper</option>
                                <option value="walnuts">walnuts</option>
                                <option value="water">water</option>
                                <option value="almonds">almonds</option>
                                <option value="baking-soda">baking soda</option>
                                <option value="beef-brisket">beef brisket</option>
                                <option value="beef-sirloin">beef sirloin</option>
                                <option value="bell-pepper">bell pepper</option>
                                <option value="broth">broth</option>
                                <option value="carrot">carrot</option>
                                <option value="cherries">cherries</option>
                                <option value="chocolate">chocolate</option>
                                <option value="cinnamon">cinnamon</option>
                                <option value="cinnamon-stick">cinnamon stick</option>
                                <option value="cocoa-powder">cocoa powder</option>
                                <option value="coconut">coconut</option>
                                <option value="corn-tortillas">corn tortillas</option>
                                <option value="dark-chocolate">dark chocolate</option>
                                <option value="dried-black-mushrooms">dried black mushrooms</option>
                                <option value="dried-soba">dried soba</option>
                                <option value="egg">egg</option>
                                <option value="five-spice-powder">five spice powder</option>
                                <option value="flour">flour</option>
                                <option value="ginger">ginger</option>
                                <option value="guilin-chili-sauce">guilin chili sauce</option>
                                <option value="leek">leek</option>
                                <option value="lettuce">lettuce</option>
                                <option value="olive-oil">olive oil</option>
                                <option value="oyster-sauce">oyster sauce</option>
                                <option value="pear-juice">pear juice</option>
                                <option value="pepper">pepper</option>
                                <option value="pineapple">pineapple</option>
                                <option value="red-onion">red onion</option>
                                <option value="redcurrant">redcurrant</option>
                                <option value="ribs-of-celery">ribs of celery</option>
                                <option value="sichuan-pepper">Sichuan pepper</option>
                                <option value="spring-onions">spring onions</option>
                                <option value="strawberries">strawberries</option>
                                <option value="taiwanese-golden-mushrooms">Taiwanese golden mushrooms</option>
                                <option value="yeast">yeast</option>
                                <option value="yellow-bell-pepper">yellow bell pepper</option>
                            </select>
                        </div>

                        <!-- Choose Alergens -->
                        <div class="select alergens">
                            <label>Choose alergens</label>
                            <select data-placeholder="Choose Alergens" class="chosen-select" multiple>
                                <option value="2">Peanut</option>
                                <option value="3">Tree nuts</option>
                                <option value="4">Milk</option>
                                <option value="5">Egg</option>
                                <option value="6">Wheat</option>
                                <option value="7">Soy</option>
                                <option value="8">Fish</option>
                                <option value="9">Shellfish</option>
                            </select>
                        </div>


                        <div class="clearfix"></div>




                        <!-- Choose time needed -->
                        <div class="select">
                            <label>Choose time needed</label>
                            <select data-placeholder="Choose time needed" class="chosen-select">
                                <option value="1">All</option>
                                <option value="2">Half an hour</option>
                                <option value="3">Less than hour</option>
                                <option value="3">More than hour</option>
                            </select>
                        </div>

                        <div class="clearfix"></div>
                        <div class="margin-top-10"></div>

                    </div>
                    <!-- Extra Search Options / End -->


                    <div class="clearfix"></div>
                </div>

            </div>
        </div>
    </div>


    <div class="margin-top-35"></div>


    <!-- Container -->
    <div class="container">

        <!-- Headline -->
        <div class="sixteen columns">
            <h3 class="headline">All Recipes</h3>
            <span class="line margin-bottom-35"></span>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>


        <!-- Isotope -->
        <div class="isotope">

            @foreach($recipes as $recipe)

                <?php
                        $recipe_img = RecipeImage::where('recipe_id',$recipe->id)->first();
                        $recipe_img_url = $recipe_img->img_url;
                        $review = new Review();
                        $review_recipe_avg = $review->reviews_avg($recipe->id);
                        $recipe_addition_info = RecipeAdditionalInfo::where('recipe_id', $recipe->id)->first();
                        $cooking_time = $recipe_addition_info->cooking_time;
                ?>
            <!-- Recipe #1 -->
            <div class="four isotope-box columns">

                <!-- Thumbnail -->
                <div class="thumbnail-holder">
                    <a href="{{url('/recipe/'.$recipe->id)}}">
                        <img src="{{asset('storage/images/recipes/'.$recipe_img_url)}}" alt=""/>
                        <div class="hover-cover"></div>
                        <div class="hover-icon">View Recipe</div>
                    </a>
                </div>

                <!-- Content -->
                <div class="recipe-box-content">
                    <h3><a href="{{url('/recipe/'.$recipe->id)}}">{{$recipe->title}}</a></h3>
                    @auth
                        <?php
                        $id = Auth::user()->id;
                        $like_check = DB::table('likes')->where('user_id',$id)->where('recipe_id',$recipe->id)->pluck('like')->first();
                        ?>
                        @if($like_check)
                            <span class="like"><i class="fa fa-heart"></i></span>
                        @else
                            <span class="like"><i class="fa fa-heart-o"></i></span>
                        @endif
                    @endauth

                    <div class="rating {{$review_recipe_avg}}">
                        <div class="star-rating"></div>
                        <div class="star-bg"></div>
                    </div>

                    <div class="recipe-meta"><i class="fa fa-clock-o"></i> {{$cooking_time}} min</div>

                    <div class="clearfix"></div>
                </div>
            </div>

            @endforeach

        </div>
        <div class="clearfix"></div>


        <!-- Pagination -->
        {{--<div class="sixteen columns">--}}
            {{--<div class="pagination-container">--}}
                {{--<nav class="pagination">--}}
                    {{--<ul>--}}
                        {{--<li><a href="#" class="current-page">1</a></li>--}}
                        {{--<li><a href="#">2</a></li>--}}
                        {{--<li><a href="#">3</a></li>--}}
                    {{--</ul>--}}
                {{--</nav>--}}

                {{--<nav class="pagination-next-prev">--}}
                    {{--<ul>--}}
                        {{--<li><a href="#" class="prev"></a></li>--}}
                        {{--<li><a href="#" class="next"></a></li>--}}
                    {{--</ul>--}}
                {{--</nav>--}}
            {{--</div>--}}
        {{--</div>--}}

    </div>


    </div>
    <!-- Wrapper / End -->

@endsection