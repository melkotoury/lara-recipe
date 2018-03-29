@extends('shared.master')

@section('content')


    <!-- Recipe Background -->
    <div class="recipeBackground">
        <img src="{{asset('images/recipeBackground.jpg')}}" alt="" />
    </div>


    <!-- Content
    ================================================== -->
    <div class="container" itemscope itemtype="http://schema.org/Recipe">

        <!-- Recipe -->
        <div class="twelve columns">




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
                                <a href="#" class="reply"><i class="fa fa-reply"></i> Open Recipe</a>
                            </div>
                            <p>Maecenas dignissim euismod nunc, in commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget just.</p>
                            <div class="rating five-stars">
                                <div class="star-rating"></div>
                                <div class="star-bg"></div>
                            </div>
                        </div>

                        <!-- Second Level -->
                        <!--
                                                <ul>
                                                    <li>
                                                        <div class="avatar"><img src="images/author-photo.png" alt="" /></div>
                                                        <div class="comment-content"><div class="arrow-comment"></div>
                                                        <div class="comment-by"><strong>Sandra Fortin</strong><span class="date">7th, October 2014</span>
                                                        <a href="#" class="reply"><i class="fa fa-reply"></i> Reply</a>
                                                        </div>
                                                        <p>Donec porttitor tortor sit amet tortor egestas, id suscipit magna cursus. Nam facilisis, mi vel elementum porttitor, sapien magna posuere lorem, sed consectetur.</p>
                                                        </div>
                                                    </li>
                                                </ul>
                        -->

                    </li>

                    <li>
                        <div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
                        <div class="comment-content"><div class="arrow-comment"></div>
                            <div class="comment-by"><strong>Kathy Brown</strong><span class="date">12th, October 2014</span>
                                <a href="#" class="reply"><i class="fa fa-reply"></i> Open Recipe</a>
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
                                <a href="#" class="reply"><i class="fa fa-reply"></i> Open Recipe</a>
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


        </div>
    </div>





    </div>
    <!-- Container / End -->


    </div>
    <!-- Wrapper / End -->


@endsection