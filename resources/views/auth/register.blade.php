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
                <form method="POST" name="contactform" id="contactform" action="{{ route('register') }}">
                    @csrf
                    <fieldset>

                        <div>
                            <label>Name: <span>*</span></label>
                            <input name="name" type="text" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"/>
                        </div>

                        <div>
                            <label >Email: <span>*</span></label>
                            <input name="email" type="email" id="email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" />
                        </div>
                        <div>
                            <label>Age: <span>*</span></label>
                            <input name="age" type="text" id="age" pattern="^\d" class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}"/>
                        </div>
                        <div>
                            <label for="gender">Gender: <span>*</span></label>
                            <input type="radio" name="gender" value="male" id="gender" class="gender" style="width: 10px;"> Male
                            <input type="radio" name="gender" value="female" id="gender" class="gender" style="width: 10px;"> Female
                            <input type="radio" name="gender" value="other" id="gender" class="gender" style="width: 10px;"> Other
                        </div>

                        <div>
                            <label for="password">Password: <span>*</span></label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        </div>
                        <div>
                            <label for="password-confirm">Confirm Password: <span>*</span></label>
                            <input id="password-confirm" type="password" class="form-control{{ $errors->has('password-confirm') ? ' is-invalid' : '' }}" name="password-confirm" required>
                        </div>

                        <div>
                            <label >Allergens:
                                <span>*</span>
                            </label>
                        </div>
                        <select data-placeholder="Choose Allergens" class="chosen-select"  name="user_allergen" multiple>
                            <option value="Peanut">Peanut</option>
                            <option value="Tree nuts">Tree nuts</option>
                            <option value="Milk">Milk</option>
                            <option value="Egg">Egg</option>
                            <option value="Wheat">Wheat</option>
                            <option value="Soy">Soy</option>
                            <option value="Fish">Fish</option>
                            <option value="Shellfish">Shellfish</option>
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
                        <select data-placeholder="Choose Medical Condition" class="chosen-select"  name="user_medical_condition" multiple>
                            <option value="Blood Pressure">Blood Pressure</option>
                            <option value="Diabetics">Diabetics</option>
                            <option value="Uric Acid">Uric Acid</option>
                            <option value="Rheumatoid">Rheumatoid</option>
                            <option value="Anemia">Anemia</option>
                            <option value="Kidney failure">Kidney failure</option>
                            <option value="Fatty liver">Fatty liver</option>
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

@endsection
