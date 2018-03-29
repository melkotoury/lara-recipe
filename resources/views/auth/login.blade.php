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
                <img class="rsImg" src="{{asset('images/contact.jpg')}}" alt="" />
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

                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">

                                <div class="card-body">
                                    <form method="POST" action="{{ route('login') }} " novalidate>
                                        @csrf

                                        <div class="form-group row">
                                            <label for="email">Email: <span>*</span></label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password">Password: <span>*</span></label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <input type="submit" class="submit" id="submit" value="Login">

                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



            </section>
            <!-- Contact Form / End -->
            <div class="margin-bottom-50"></div>
        </div>


    </div>
    <!-- Container / End -->


    </div>
    <!-- Wrapper / End -->




@endsection
