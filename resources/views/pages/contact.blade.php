@extends('shared.master')

@section('content')
    {{--// Contact page content here--}}

    <!-- Titlebar
================================================== -->
    <section id="titlebar">
        <!-- Container -->
        <div class="container">

            <div class="eight columns">
                <h2>Contact</h2>
            </div>

            <div class="eight columns">
                <nav id="breadcrumbs">
                    <ul>
                        <li>You are here:</li>
                        <li><a href="#">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </nav>
            </div>

        </div>
        <!-- Container / End -->
    </section>



    <!-- Content
    ================================================== -->

    <!-- Container -->
    <div class="container">
        <div class="sixteen columns">
            <div class="image-with-caption contact">
                <img class="rsImg" src="images/contact.jpg" alt="" />
                <span>Contact me with any questions</span>
            </div>
        </div>
    </div>
    <!-- Container / End -->


    <div class="margin-top-10"></div>


    <!-- Container -->
    <div class="container">

        <!-- Contact Form -->
        <div class="twelve columns">
            <h3 class="headline">Contact Form</h3><span class="line margin-bottom-25"></span><div class="clearfix"></div>

            <!-- Contact Form -->
            <section id="contact">

                <!-- Success Message -->
                <mark id="message"></mark>

                <!-- Form -->
                <form method="post" name="contactform" id="contactform">

                    <fieldset>

                        <div>
                            <label>Name:</label>
                            <input name="name" type="text" id="name" />
                        </div>

                        <div>
                            <label >Email: <span>*</span></label>
                            <input name="email" type="email" id="email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" />
                        </div>

                        <div>
                            <label>Message: <span>*</span></label>
                            <textarea name="comment" cols="40" rows="3" id="comment" spellcheck="true"></textarea>
                        </div>

                    </fieldset>
                    <div id="result"></div>
                    <input type="submit" class="submit" id="submit" value="Send Message" />
                    <div class="clearfix"></div>
                </form>

            </section>
            <!-- Contact Form / End -->
            <div class="margin-bottom-50"></div>
        </div>


    </div>
    <!-- Container / End -->


    </div>
    <!-- Wrapper / End -->
@endsection