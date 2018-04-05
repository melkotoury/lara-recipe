@extends('shared.master')


@section('content')
    {{--// Details Recipe page content here--}}
    <?php
//    dd($recipe);
//    dd($recipe_additional_info);
//    dd($recipe_image);
//    dd($recipe_medical_condition);
//    dd($recipe_allergen);
//    dd($recipe_nutrition_fact);
//    dd($recipe_review);
//    dd($recipe_ingredient);
    use App\Recipe;
    use App\RecipeAdditionalInfo;
    use App\RecipeImage;
    use App\RecipeMedicalCondition;
    use App\RecipeAllergen;
    use App\RecipeNutritionFact;
    use App\Review;
    use App\RecipeIngredient;
    use Illuminate\Support\Facades\DB;


    $review = new Review();
    $review_count = $review->reviews_count($recipe->id);
    $review_avg = $review->reviews_avg($recipe->id);
    $recipe_prep_time  =  DB::table('recipe_additional_infos')->where('recipe_id',$recipe->id)->pluck('preparation_time');

    $my_recommend_recipe = new Recipe();
    foreach ($recipe_allergen as $recipeAllergen) {
       $my_recommend_recipe_allergens = $my_recommend_recipe->recommend_recipe_allergens($recipeAllergen->name);
    }
    foreach ($recipe_medical_condition as $recipeMedicalCondition) {
        $my_recommend_recipe_medical_condition = $my_recommend_recipe->recommend_recipe_medical_conditions($recipeMedicalCondition->name);
    }
        $my_recommended_recipe_all = array_unique(array_merge($my_recommend_recipe_allergens,$my_recommend_recipe_medical_condition),SORT_REGULAR);
        $my_recommended_recipe_three = array_slice($my_recommended_recipe_all,0,3);

    ?>


    <!-- Recipe Background -->
    <div class="recipeBackground">
        <img src="{{asset('images/recipeBackground.jpg')}}" alt="" />
    </div>


    <!-- Content
    ================================================== -->
    <div class="container" itemscope itemtype="http://schema.org/Recipe">

        <!-- Recipe -->
        <div class="twelve columns">
            <div class="alignment">

                <!-- Header -->
                <section class="recipe-header">
                    <div class="title-alignment">
                        <h2>{{$recipe->title}}</h2>
                        <div class="rating {{$review_avg}}">
                            <div class="star-rating"></div>
                            <div class="star-bg"></div>
                        </div>
                        <span><a href="#reviews">({{$review_count}} reviews)</a></span>
                    </div>
                </section>


                <!-- Slider -->
                <div class="recipeSlider rsDefault">
                    @foreach($recipe_image as $img)
                        <img itemprop="image" class="rsImg" src="{{asset('storage/images/recipes/'.$img->img_url)}}" alt="" />
                    @endforeach
                </div>


                <!-- Details -->
                <section class="recipe-details" itemprop="nutrition">
                    <ul>
                        <li>Prep Time: <strong itemprop="prepTime">{{$recipe_additional_info->preparation_time}} min</strong></li>
                        <li>Cooking Time: <strong itemprop="cookTime">{{$recipe_additional_info->cooking_time}} min</strong></li>
                        <li>Calories: <strong itemprop="calories">{{$recipe_nutrition_fact->calories}} kcal</strong></li>
                        <li>Medical Conditions: <strong itemprop="medicalCondition">
                                @foreach($recipe_medical_condition as $recipeMedicalCondition)
                                    ({{$recipeMedicalCondition->name}})
                                @endforeach
                            </strong></li>
                        <li>Allergens: <strong itemprop="allergens">
                                @foreach($recipe_allergen as $recipeAllergen)
                                    ({{$recipeAllergen->name}})
                                @endforeach
                            </strong></li>
                    </ul>
                    <a href="#" class="print"><i class="fa fa-print"></i> Print</a>
                    <div class="clearfix"></div>
                </section>


                <!-- Text -->
                <p itemprop="description">{{$recipe->summary}}</p>


                <!-- Ingredients -->
                <h3>Ingredients</h3>
                <ul class="ingredients">
                    @for($i=0;$i<sizeof($recipe_ingredient);$i++)
                        <li>
                            <input id="check-{{$i+1}}" type="checkbox" name="check" value="check-{{$i+1}}">
                            <label itemprop="ingredients" for="check-{{$i+1}}">{{$recipe_ingredient[$i]->name}}</label>
                        </li>
                    @endfor

                </ul>


                <!-- Directions -->
                <h3>Directions</h3>
                <ol class="directions" itemprop="recipeInstructions">
                    @for($i=0;$i<sizeof($recipe_direction);$i++)
                    <li >{{$recipe_direction[$i]->name}}</li>
                    @endfor
                </ol>


                <!-- Share Post -->
                <ul class="share-post">
                    <li><a href="#" class="facebook-share">Facebook</a></li>
                    <li><a href="#" class="twitter-share">Twitter</a></li>
                    <li><a href="#" class="google-plus-share">Google Plus</a></li>
                    <li><a href="#" class="pinterest-share">Pinterest</a></li>

                    <!-- <li><a href="#add-review" class="rate-recipe">Add Review</a></li> -->
                </ul>
                <div class="clearfix"></div>


                <!-- Meta -->
                <!--  		<div class="post-meta">
                            By <a href="#" itemprop="author">Sandra Fortin</a>, on
                            <meta itemprop="datePublished" content="2014-30-10">30th November, 2014</meta>
                        </div>  -->


                <div class="margin-bottom-40"></div>


                <!-- Headline -->
                <h3 class="headline">You may also like</h3>
                <span class="line margin-bottom-35"></span>
                <div class="clearfix"></div>

                <div class="related-posts">
                    <!-- Recipe #1 -->
                    @foreach($my_recommended_recipe_three as $recommended_recipe_id)
                        <?php
                            $recommended_recipe = Recipe::find($recommended_recipe_id);
                            $recommended_recipe_img = RecipeImage::where('recipe_id',$recommended_recipe_id)->first();
                            $recommended_recipe_review = $review->reviews_avg($recipe->id);
                        ?>
                    <div class="four recipe-box columns">

                        <!-- Thumbnail -->
                        <div class="thumbnail-holder">
                            <a href="{{url('/recipe/'.$recommended_recipe_id)}}">
                                <img src="{{asset('storage/images/recipes/'.$recommended_recipe_img->img_url)}}" alt=""/>
                                <div class="hover-cover"></div>
                                <div class="hover-icon">View Recipe</div>
                            </a>
                        </div>

                        <!-- Content -->
                        <div class="recipe-box-content">
                            <h3><a href="{{url('/recipe/'.$recommended_recipe_id)}}">{{$recommended_recipe->title}}</a></h3>

                            <div class="rating {{$recommended_recipe_review}}">
                                <div class="star-rating"></div>
                                <div class="star-bg"></div>
                            </div>

                            <div class="recipe-meta"><i class="fa fa-clock-o"></i> 30 min</div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="clearfix"></div>


                <div class="margin-top-15"></div>


                <!-- Comments
                ================================================== -->
                <h3 class="headline">Reviews <span class="comments-amount">(4)</span></h3><span class="line"></span><div class="clearfix"></div>

                <!-- Reviews -->
                <section class="comments" id="reviews">

                    <ul>
                        <li>
                            <div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
                            <div class="comment-content"><div class="arrow-comment"></div>
                                <div class="comment-by"><strong>John Doe</strong><span class="date">7th, October 2014</span>
                                    <a href="#" class="reply"><i class="fa fa-reply"></i> Reply</a>
                                </div>
                                <p>Maecenas dignissim euismod nunc, in commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget just.</p>
                                <div class="rating five-stars">
                                    <div class="star-rating"></div>
                                    <div class="star-bg"></div>
                                </div>
                            </div>

                            <!-- Second Level -->
                            <ul>
                                <li>
                                    <div class="avatar"><img src="{{asset('images/author-photo.png')}}" alt="" /></div>
                                    <div class="comment-content"><div class="arrow-comment"></div>
                                        <div class="comment-by"><strong>Sandra Fortin</strong><span class="date">7th, October 2014</span>
                                            <a href="#" class="reply"><i class="fa fa-reply"></i> Reply</a>
                                        </div>
                                        <p>Donec porttitor tortor sit amet tortor egestas, id suscipit magna cursus. Nam facilisis, mi vel elementum porttitor, sapien magna posuere lorem, sed consectetur.</p>
                                    </div>
                                </li>
                            </ul>

                        </li>

                        <li>
                            <div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
                            <div class="comment-content"><div class="arrow-comment"></div>
                                <div class="comment-by"><strong>Kathy Brown</strong><span class="date">12th, October 2014</span>
                                    <a href="#" class="reply"><i class="fa fa-reply"></i> Reply</a>
                                </div>
                                <p>Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere tristique sem, eu ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus</p>
                                <div class="rating ive-stars">
                                    <div class="star-rating"></div>
                                    <div class="star-bg"></div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /> </div>
                            <div class="comment-content"><div class="arrow-comment"></div>
                                <div class="comment-by"><strong>John Doe</strong><span class="date">15th, October 2014</span>
                                    <a href="#" class="reply"><i class="fa fa-reply"></i> Reply</a>
                                </div>
                                <p>Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris.</p>
                                <div class="rating four-stars">
                                    <div class="star-rating"></div>
                                    <div class="star-bg"></div>
                                </div>
                            </div>

                        </li>
                    </ul>

                </section>
                <div class="clearfix"></div>
                <br>


                <!-- Add Comment
                ================================================== -->

                <h3 class="headline">Add Review</h3><span class="line margin-bottom-35"></span><div class="clearfix"></div>

                <!-- Add Comment Form -->
                <form id="add-review" class="add-comment">
                    <fieldset>

                        <div>
                            <label>Name:</label>
                            <input type="text" value=""/>
                        </div>

                        <div>
                            <label>Email: <span>*</span></label>
                            <input type="text" value=""/>
                        </div>

                        <div>
                            <label>Rating:</label>
                            <span class="rate">
						<span class="star"></span>
						<span class="star"></span>
						<span class="star"></span>
						<span class="star"></span>
						<span class="star"></span>
					</span>
                        </div>
                        <div class="clearfix"></div>

                        <div>
                            <label>Comment: <span>*</span></label>
                            <textarea cols="40" rows="3"></textarea>
                        </div>

                    </fieldset>

                    <a href="#" class="button medium color">Add Review</a>
                    <div class="clearfix"></div>

                </form>

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


            <!-- Author Box -->
            <div class="widget">
                <div class="author-box">
                    <span class="title">Author</span>
                    <span class="name">Sandra <br> Fortin</span>
                    <span class="contact"><a href="http://www.vasterad.com/cdn-cgi/l/email-protection#3546545b51475475565d5a421b565a58"><span class="__cf_email__" data-cfemail="0f7c6e616b7d6e4f6c676078216c6062">[email&#160;protected]</span></a></span>
                    <img src="{{asset('images/author-photo.png')}}" alt="">
                    <p>I'm Sandra and this is where I share my stuff. I am madly in love with food. You will find a balance of healthy recipes, comfort food and indulgent desserts.</p>
                </div>
            </div>


            <!-- Popular Recipes -->
            <div class="widget">
                <h4 class="headline">Popular Recipes</h4>
                <span class="line margin-bottom-30"></span>
                <div class="clearfix"></div>

                <!-- Recipe #1 -->
                <a href="#" class="featured-recipe">
                    <img src="{{asset('images/featuredRecipe-01.jpg')}}" alt="">

                    <div class="featured-recipe-content">
                        <h4>Choclate Cake With Green Tea Cream</h4>

                        <div class="rating five-stars">
                            <div class="star-rating"></div>
                            <div class="star-bg"></div>
                        </div>
                    </div>
                    <div class="post-icon"></div>
                </a>

                <!-- Recipe #2 -->
                <a href="#" class="featured-recipe">
                    <img src="{{asset('images/featuredRecipe-02.jpg')}}" alt="">

                    <div class="featured-recipe-content">
                        <h4>Mexican Grilled Corn Recipe</h4>

                        <div class="rating five-stars">
                            <div class="star-rating"></div>
                            <div class="star-bg"></div>
                        </div>
                    </div>
                    <div class="post-icon"></div>
                </a>

                <!-- Recipe #3 -->
                <a href="#" class="featured-recipe">
                    <img src="{{asset('images/featuredRecipe-03.jpg')}}" alt="">

                    <div class="featured-recipe-content">
                        <h4>Pollo Borracho With Homemade Tortillas</h4>

                        <div class="rating five-stars">
                            <div class="star-rating"></div>
                            <div class="star-bg"></div>
                        </div>
                    </div>
                    <div class="post-icon"></div>
                </a>

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