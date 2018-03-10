@extends('shared.master')

@section('content')

    <!-- Titlebar
================================================== -->
    <section id="titlebar">
        <!-- Container -->
        <div class="container">

            <div class="eight columns">
                <h2>Login</h2>
            </div>

            <div class="eight columns">
                <nav id="breadcrumbs">
                    <ul>
                        <li>You are here:</li>
                        <li><a href="#">Home</a></li>
                        <li>Login</li>
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
                <span>Please put your Login Credentials</span>
            </div>
        </div>
    </div>
    <!-- Container / End -->


    <div class="margin-top-10"></div>


    <!-- Container -->
    <div class="container">

        <!-- Contact Form -->
        <div class="twelve columns">
            <h3 class="headline">Login Form</h3><span class="line margin-bottom-25"></span><div class="clearfix"></div>

            <!-- Contact Form -->
            <section id="contact">

                <!-- Success Message -->
                <mark id="message"></mark>

                <!-- Form -->
                <form method="post" name="contactform" id="contactform">

                    <fieldset>

                        <!--
                                            <div>
                                                <label>Name:</label>
                                                <input name="name" type="text" id="name" />
                                            </div>
                        -->

                        <div>
                            <label >Email: <span>*</span></label>
                            <input name="email" type="email" id="email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" />
                        </div>
                        <div>
                            <label >Password: <span>*</span></label>
                            <input name="password" type="password">
                        </div>

                        <!--
                                            <div>
                                                <label>Message: <span>*</span></label>
                                                <textarea name="comment" cols="40" rows="3" id="comment" spellcheck="true"></textarea>
                                            </div>
                        -->

                    </fieldset>
                    <div id="result"></div>
                    <input type="submit" class="submit" id="submit" value="Login" />
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




{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Login') }}</div>--}}

                {{--<div class="card-body">--}}
                    {{--<form method="POST" action="{{ route('login') }}">--}}
                        {{--@csrf--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="invalid-feedback">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="invalid-feedback">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<div class="checkbox">--}}
                                    {{--<label>--}}
                                        {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row mb-0">--}}
                            {{--<div class="col-md-8 offset-md-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--{{ __('Login') }}--}}
                                {{--</button>--}}

                                {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                    {{--{{ __('Forgot Your Password?') }}--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
@endsection
