<?php
use App\Recipe;
use App\User;
use App\RecipeAdditionalInfo;
use App\RecipeImage;
use App\RecipeMedicalCondition;
use App\RecipeAllergen;
use App\RecipeNutritionFact;
use App\Review;
use App\RecipeIngredient;
use Illuminate\Support\Facades\DB;

$review = new Review();


?>

@extends('shared.master')

@section('content')
     {{--Home page content here--}}
    <!-- Slider
================================================== -->
     @if (session('status'))
         <div class="alert alert-success">
             {{ session('status') }}
         </div>
     @endif

    <div id="homeSlider" class="royalSlider rsDefaultInv">

        <!-- Slide #1 -->
        <div class="rsContent">
            <a class="rsImg" href="{{asset('storage/images/recipes/2.jpg')}}"></a>
            <i class="rsTmb">Crispy Shrimp Pasta</i>

            <!-- Slide Caption -->
            <div class="SlideTitleContainer rsABlock">
                <div class="CaptionAlignment">
                    <div class="rsSlideTitle tags">
                        <ul>
                            <li>Main Dish</li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <h2 class="rsSlideTitle title"><a href="{{url('recipe/2')}}">Crispy Shrimp Pasta</a></h2>

                    <div class="rsSlideTitle details">
                        <ul>
                            <li><i class="fa fa-cutlery"></i>  2 Servings</li>
                            <li><i class="fa fa-clock-o"></i> 35 Min</li>
                            <li><i class="fa fa-user"></i> by <a href="#">Sandra Fortin</a></li>
                        </ul>
                    </div>

                    <a href="{{url('recipe/2')}}" class="rsSlideTitle button">View Recipe</a>
                </div>
            </div>

        </div>

        <!-- Slide #2 -->
        <div class="rsContent">
            <a class="rsImg" href="{{asset('storage/images/recipes/20.jpg')}}"></a>
            <i class="rsTmb">Soft Frosted Sugar Cookies</i>

            <!-- Slide Caption -->
            <div class="SlideTitleContainer rsABlock">
                <div class="CaptionAlignment">
                    <div class="rsSlideTitle tags">
                        <ul>
                            <li>Dessert</li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <h2 class="rsSlideTitle title"><a href="{{url('recipe/20')}}">Soft Frosted Sugar Cookies</a></h2>


                    <div class="rsSlideTitle details">
                        <ul>
                            <li><i class="fa fa-cutlery"></i> 10 Servingss</li>
                            <li><i class="fa fa-clock-o"></i> 42 Min</li>
                            <li><i class="fa fa-user"></i> by <a href="#">Sandra Fortin</a></li>
                        </ul>
                    </div>

                    <a href="{{url('recipe/20')}}" class="rsSlideTitle button">View Recipe</a>
                </div>
            </div>

        </div>

        <!-- Slide #3 -->
        <div class="rsContent">
            <a class="rsImg" href="{{asset('storage/images/recipes/14.jpg')}}"></a>
            <i class="rsTmb">Strawberry, Banana and Almond Milk Smoothie</i>

            <!-- Slide Caption -->
            <div class="SlideTitleContainer rsABlock">
                <div class="CaptionAlignment">
                    <div class="rsSlideTitle tags">
                        <ul>
                            <li>Beverages</li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <h2 class="rsSlideTitle title"><a href="{{url('recipe/14')}}">Strawberry, Banana and Almond Milk Smoothie</a></h2>

                    <div class="rsSlideTitle details">
                        <ul>
                            <li><i class="fa fa-cutlery"></i> 4 Servings</li>
                            <li><i class="fa fa-clock-o"></i> 10 Min</li>
                            <li><i class="fa fa-user"></i> by <a href="#">Sandra Fortin</a></li>
                        </ul>
                    </div>

                    <a href="{{url('recipe/14')}}" class="rsSlideTitle button">View Recipe</a>
                </div>
            </div>

        </div>

        <!-- Slide #4 -->
        <div class="rsContent">
            <a class="rsImg" href="{{asset('storage/images/recipes/31.jpg')}}"></a>
            <i class="rsTmb">Simple Creamy Carrot Soup</i>

            <!-- Slide Caption -->
            <div class="SlideTitleContainer rsABlock">
                <div class="CaptionAlignment">
                    <div class="rsSlideTitle tags">
                        <ul>
                            <li>Soups</li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <h2 class="rsSlideTitle title"><a href="{{url('recipe/31')}}">Simple Creamy Carrot Soup</a></h2>

                    <div class="rsSlideTitle details">
                        <ul>
                            <li><i class="fa fa-cutlery"></i> 6 Servings</li>
                            <li><i class="fa fa-clock-o"></i> 45 Min</li>
                            <li><i class="fa fa-user"></i> by <a href="#">Sandra Fortin</a></li>
                        </ul>
                    </div>

                    <a href="{{url('recipe/31')}}" class="rsSlideTitle button">View Recipe</a>
                </div>
            </div>

        </div>

        <!-- Slide #5 -->
        <div class="rsContent">
            <a class="rsImg" href="{{asset('storage/images/recipes/26.jpg')}}"></a>
            <i class="rsTmb">Slow Cooker Creamy Ranch Chicken</i>


            <!-- Slide Caption -->
            <div class="SlideTitleContainer rsABlock">
                <div class="CaptionAlignment">
                    <div class="rsSlideTitle tags">
                        <ul>
                            <li>Poultry</li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <h2 class="rsSlideTitle title"><a href="{{url('recipe/26')}}">Slow Cooker Creamy Ranch Chicken</a></h2>

                    <div class="rsSlideTitle details">
                        <ul>
                            <li><i class="fa fa-cutlery"></i> 5 Servings</li>
                            <li><i class="fa fa-clock-o"></i> 8 Hr</li>
                            <li><i class="fa fa-user"></i> by <a href="#">Sandra Fortin</a></li>
                        </ul>
                    </div>

                    <a href="{{url('recipe/26')}}"class="rsSlideTitle button">View Recipe</a>
                </div>
            </div>

        </div>

    </div>



    <!-- Content
    ================================================== -->
    <div class="container">

        <!-- Masonry -->
        <div class="twelve columns">

            <!-- Headline -->
            <h3 class="headline">Latest Recipes</h3>
            <span class="line rb margin-bottom-35"></span>
            <div class="clearfix"></div>

            <!-- Isotope -->
            <div class="isotope">

                @foreach($recipes as $recipe)
                <!-- Recipe #1 -->
                <div class="four recipe-box columns">

                    <?php
                    $recipe_img = DB::table('recipe_images')->where('recipe_id',$recipe->id)->pluck('img_url')->first();

                    ?>
                    <!-- Thumbnail -->
                    <div class="thumbnail-holder">
                        <a href="{{url('recipe/'.$recipe->id)}}">
                            <img src="{{asset('storage/images/recipes/'.$recipe_img)}}" alt=""/>
                            <div class="hover-cover"></div>
                            <div class="hover-icon">View Recipe</div>
                        </a>
                    </div>

                    <!-- Content -->
                    <div class="recipe-box-content">
                        <h3><a href="{{url('recipe/'.$recipe->id)}}">{{$recipe->title}}</a></h3>
                        @auth
                                <?php
                                $id = Auth::user()->id;
                                $currentuser = User::find($id);
                                $user_allergens = \App\UserAllergen::where('user_id',$id)->pluck('name');
                                $user_medical_condition = \App\UserMedicalCondition::where('user_id',$id)->pluck('name');
                                $like_check = DB::table('likes')->where('user_id',$id)->where('recipe_id',$recipe->id)->pluck('like')->first();
                                ?>
                            @if($like_check)
                                <span class="like"><i class="fa fa-heart"></i></span>
                            @else
                                <span class="like"><i class="fa fa-heart-o"></i></span>
                            @endif
                        @endauth
<?php
                            $review = new Review();
                            $review_avg = $review->reviews_avg($recipe->id);
                            $recipe_prep_time  =  DB::table('recipe_additional_infos')->where('recipe_id',$recipe->id)->pluck('preparation_time');

?>
                        <div class="rating  {{$review_avg}}">
                            <div class="star-rating"></div>
                            <div class="star-bg"></div>
                        </div>



                        <div class="recipe-meta"><i class="fa fa-clock-o"></i> {{$recipe_prep_time}} min</div>

                        <div class="clearfix"></div>
                    </div>
                </div>



            <div class="clearfix"></div>

                    @endforeach

        </div>

        </div>


        <!-- Sidebar
        ================================================== -->
        <div class="four columns">

            <!-- Search Form -->
            <div class="widget search-form">
                <nav class="search">
                    <form action="#" method="get">
                        <button><i class="fa fa-search"></i></button>
                        <input class="search-field" type="text" placeholder="Search for recipes" value=""/>
                    </form>
                </nav>
                <div class="clearfix"></div>
            </div>


        @auth

            <!-- Author Box -->
                <div class="widget">
                    <div class="author-box">
                        <span class="title">Hello</span>
                        <span class="name">{{$currentuser->name}}</span>
                        <span class="contact"><a href="">{{$currentuser->email}}</a></span>
                        <img src="{{asset('storage/images/profile_pic/'.$currentuser->profile_pic)}}" alt="">
                        <p><strong>Allergen Preference:</strong></p>
                        <p>
                            @foreach($user_allergens as $userAllergen)
                                ({{$userAllergen}})
                            @endforeach
                        </p>
                        <p><strong>Medical Condition Preference:</strong></p>
                        <p>
                            @foreach($user_medical_condition as $userMedicalCondition)
                                ({{$userMedicalCondition}})
                            @endforeach
                        </p>
                    </div>
                </div>
        @endauth

        <!-- Popular Recipes -->
            <div class="widget">
                <h4 class="headline">Popular Recipes</h4>
                <span class="line margin-bottom-30"></span>
                <div class="clearfix"></div>
            <?php
            $popular_recipes_all = Recipe::all();
            foreach ($popular_recipes_all as $popular_recipe_one){
            $review_recipes_avg = Review::where('recipe_id',$popular_recipe_one->id)
                ->pluck('review_stars')
                ->avg();
            if ($review_recipes_avg >= 3){
            $popular_recipe_img = RecipeImage::where('recipe_id',$popular_recipe_one->id)->first();
            $popular_recipe_review = $review->reviews_avg($popular_recipe_one->id);

            ?>
            <!-- Recipe #1 -->
                <a href="{{url('/recipe/'.$popular_recipe_one->id)}}" class="featured-recipe">
                    <img src="{{asset('storage/images/recipes/'.$popular_recipe_img->img_url)}}" alt="">

                    <div class="featured-recipe-content">
                        <h4>{{$popular_recipe_one->title}}</h4>

                        <div class="rating {{$popular_recipe_review}}">
                            <div class="star-rating"></div>
                            <div class="star-bg"></div>
                        </div>
                        @auth
                            <?php
                            $like_check = DB::table('likes')->where('user_id',$id)->where('recipe_id',$recipe->id)->pluck('like')->first();
                            ?>
                            @if($like_check)
                                <span class="like"><i class="fa fa-heart"></i></span>
                            @else
                                <span class="like"><i class="fa fa-heart-o"></i></span>
                            @endif
                        @endauth
                    </div>
                    <div class="post-icon"></div>
                </a>
                <?php
                }

                }
                ?>








                <div class="clearfix"></div>
            </div>


            <!-- Popular Recipes -->
            <div class="widget">
                <h4 class="headline">Share</h4>
                <span class="line margin-bottom-30"></span>
                <div class="clearfix"></div>

                <ul class="share-buttons">
                    <li class="facebook-share">
                        <a href="#">
                            <span class="counter">1,234</span>
                            <span class="counted">Fans</span>
                            <span class="action-button">Like</span>
                        </a>
                    </li>

                    <li class="twitter-share">
                        <a href="#">
                            <span class="counter">863</span>
                            <span class="counted">Followers</span>
                            <span class="action-button">Follow</span>
                        </a>
                    </li>

                    <li class="google-plus-share">
                        <a href="#">
                            <span class="counter">902</span>
                            <span class="counted">Followers</span>
                            <span class="action-button">Follow</span>
                        </a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

        </div>


    </div>
     <!-- Container / End -->


     </div>
     <!-- Wrapper / End -->

@endsection