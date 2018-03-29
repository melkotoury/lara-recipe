@extends('shared.master')

@section('content')



    <!-- Titlebar
================================================== -->
    <section id="titlebar">
        <!-- Container -->
        <div class="container">

            <div class="eight columns">
                <h2>Register</h2>
            </div>

            <div class="eight columns">
                <nav id="breadcrumbs">
                    <ul>
                        <li>You are here:</li>
                        <li><a href="#">Home</a></li>
                        <li>Register</li>
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
                <span>Please Register a new account</span>
            </div>
        </div>
    </div>
    <!-- Container / End -->


    <div class="margin-top-10"></div>


    <!-- Container -->
    <div class="container">

        <!-- Contact Form -->
        <div class="twelve columns">
            <h3 class="headline">Registration Form</h3><span class="line margin-bottom-25"></span><div class="clearfix"></div>

            <!-- Contact Form -->
            <section id="contact">

                <!-- Success Message -->
                <mark id="message"></mark>

                <!-- Form -->
                <form method="post" name="contactform" id="contactform">

                    <fieldset>

                        <div>
                            <label>Name: <span>*</span></label>
                            <input name="name" type="text" id="name" />
                        </div>

                        <div>
                            <label >Email: <span>*</span></label>
                            <input name="email" type="email" id="email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" />
                        </div>
                        <div>
                            <label>Age: <span>*</span></label>
                            <input name="age" type="text" id="age" pattern="^\d"/>
                        </div>
                        <div>
                            <label for="gender">Gender: <span>*</span></label>
                            <input type="radio" name="gender" value="male" id="gender" class="gender" style="width: 10px;"> Male
                            <input type="radio" name="gender" value="female" id="gender" class="gender" style="width: 10px;"> Female
                            <input type="radio" name="gender" value="other" id="gender" class="gender" style="width: 10px;"> Other
                        </div>

                        <div>
                            <label >Allergens:
                                <span>*</span>
                            </label>
                        </div>
                        <select data-placeholder="Choose Allergens" class="chosen-select" multiple>
                            <option value="2">Peanut</option>
                            <option value="3">Tree nuts</option>
                            <option value="4">Milk</option>
                            <option value="5">Egg</option>
                            <option value="6">Wheat</option>
                            <option value="7">Soy</option>
                            <option value="8">Fish</option>
                            <option value="9">Shellfish</option>
                        </select>
                        <!--
                                            <div>
                                                <label>Message: <span>*</span></label>
                                                <textarea name="comment" cols="40" rows="3" id="comment" spellcheck="true"></textarea>
                                            </div>
                        -->
                        <div>
                            <label >Medical Conditions:
                                <span>*</span>
                            </label>
                        </div>
                        <select data-placeholder="Choose Medical Condition" class="chosen-select" multiple>
                            <option value="2">Blood Pressure</option>
                            <option value="3">Diabetics</option>
                            <option value="4">Uric Acid</option>
                            <option value="5">Rheumatoid</option>
                            <option value="6">Anemia</option>
                            <option value="7">Kidney failure</option>
                            <option value="8">Fatty liver</option>
                        </select>
                    </fieldset>
                    <div id="result"></div>
                    <input type="submit" class="submit" id="submit" value="Register" />
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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
