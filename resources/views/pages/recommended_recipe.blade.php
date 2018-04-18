<?php
use App\Recipe;
use App\RecipeImage;
use App\RecipeAdditionalInfo;
use App\Review;
use App\User;
use App\UserAllergen;
use App\UserMedicalCondition;




$id = Auth::user()->id;
$currentuser = User::find($id);
$user_allergens = UserAllergen::where('user_id',$id)->get();
$user_medical_conditions = UserMedicalCondition::where('user_id',$id)->get();
?>

@extends('shared.master')

@section('content')
    {{--// Recommended recipe page content here--}}
    @auth

    <!-- Titlebar
================================================== -->
    <section id="titlebar" class="browse-all">
        <!-- Container -->
        <div class="container">

            <div class="eight columns">
                <h2>{{$currentuser->name}}  Recommended Recipes</h2>
            </div>

        </div>
        <!-- Container / End -->
    </section>


    <!-- Container -->
    <div class="advanced-search-container">
        <div class="container">
            <div class="sixteen columns">
                <p><strong>{{$currentuser->name}} Allergens Preference:</strong></p>
                <p>
                    @foreach($user_allergens as $user_allergen)
                       ({{$user_allergen->name}})
                    @endforeach
                </p>

                <p><strong>{{$currentuser->name}} Medical Conditions Preference:</strong></p>
                <p>
                    @foreach($user_medical_conditions as $user_medical_condition)
                        ({{$user_medical_condition->name}})
                    @endforeach
                </p>

            </div>
        </div>
    </div>


    <div class="margin-top-35"></div>


    <!-- Container -->
    <div class="container">

        <!-- Headline -->
        <div class="sixteen columns">
            <h3 class="headline">Recommended Recipes</h3>
            <span class="line margin-bottom-35"></span>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>


        <!-- Isotope -->
        <div class="isotope">

        @foreach($recipe_id as $recipeId)

            <?php
            $recipe = Recipe::find($recipeId);
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







        <!-- Headline -->
        <div class="sixteen columns">
            <h3 class="headline">Because of recipes you loved </h3>
            <span class="line margin-bottom-35"></span>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>


        <!-- Isotope -->
        <div class="isotope">

        @foreach($recipe_likes_id as $recipeId)

            <?php
            $recipe = Recipe::find($recipeId);
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
    @endauth
@endsection
