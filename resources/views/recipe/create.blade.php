@extends('shared.master')

@section('content')
    {{--// create recipe page content here--}}

    <!-- Titlebar
================================================== -->
    <section id="titlebar">
        <!-- Container -->
        <div class="container">

            <div class="eight columns">
                <h2>Submit Recipe</h2>
            </div>

            <div class="eight columns">
                <nav id="breadcrumbs">
                    <ul>
                        <li>You are here:</li>
                        <li><a href="#">Home</a></li>
                        <li>Submit Recipe</li>
                    </ul>
                </nav>
            </div>

        </div>
        <!-- Container / End -->
    </section>



    <!-- Content
    ================================================== -->
    <div class="container">
        <div class="sixteen columns">
            <div class="submit-recipe-form">


                <!-- Recipe Title -->
                <h4>Recipe Title</h4>
                <nav class="title">
                    <input class="search-field" type="text" placeholder="" value=""/>
                </nav>
                <div class="clearfix"></div>


                <div class="margin-top-25"></div>


                <!-- Choose Category -->
                <div class="select">
                    <h4>Choose Category</h4>
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


                <div class="margin-top-25"></div>


                <!-- Short Summary -->
                <h4>Short summary</h4>
                <textarea class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>


                <div class="margin-top-25"></div>


                <!-- Upload Photos -->
                <h4>Upload your photos</h4>

                <ul class="recipe-gallery">
                    <li>No photos uploaded yet</li>
                </ul>

                <label class="upload-btn">
                    <input type="file" multiple />
                    <i class="fa fa-upload"></i> Upload
                </label>


                <div class="clearfxix"></div>
                <div class="margin-top-15"></div>


                <!-- Ingredients -->
                <fieldset class="addrecipe-cont" name="ingredients">
                    <h4>Ingredients:</h4>

                    <table id="ingredients-sort">

                        <tr class="ingredients-cont ing">
                            <td class="icon"><i class="fa fa-arrows"></i></td>
                            <td><input name="ingredient_name" tabindex="5" type="text" placeholder="Name of ingredient" /> </td>
                            <td><input name="ingredient_note" tabindex="6" type="text" placeholder="Notes (quantity, additional info)" /></td>
                            <td class="action"><a title="Delete" class="delete" href="#"><i class="fa fa-remove"></i></a> </td>
                        </tr>

                    </table>

                    <a href="#" class="button color add_ingredient">Add new ingredient</a>
                    <a href="#" class="button add_separator">Add separator</a>
                </fieldset>


                <div class="margin-top-25"></div>


                <!-- Directions -->
                <h4>Directions</h4>
                <textarea class="WYSIWYG" name="directions" cols="40" rows="3" id="directions" spellcheck="true"></textarea>


                <div class="margin-top-25 clearfix"></div>


                <!-- Additional Informations -->
                <h4>Additional Informations</h4>

                <fieldset class="additional-info">
                    <table>

                        <!--
                                        <tr class="ingredients-cont">
                                            <td class="label"><label for="4">Yield</label></td>
                                            <td><input id="4" type="text" /></td>
                                        </tr>
                        -->

                        <tr class="ingredients-cont">
                            <td class="label"><label for="1">Preparation Time</label></td>
                            <td><input id="1" type="text" /></td>
                        </tr>

                        <tr class="ingredients-cont">
                            <td class="label"><label for="2">Cooking Time</label></td>
                            <td><input id="2" type="text" /></td>
                        </tr>

                        <!--
                                        <tr class="ingredients-cont">
                                            <td class="label"><label for="4">Level</label></td>
                                            <td>
                                                <select data-placeholder="Choose Level" class="chosen-select-no-single">
                                                    <option value="1">&nbsp;</option>
                                                    <option value="2">Easy</option>
                                                    <option value="3">Medium</option>
                                                    <option value="4">Hard</option>
                                                    <option value="5">Master</option>
                                                </select>
                                            </td>
                                        </tr>
                        -->
                        <!--
                                    blood pressure, diabetics,uric acid,rheumatoid,Anemia,Kidney failure,fatty liver
                                    -->
                        <tr class="ingredients-cont">
                            <td class="label"><label for="4">Medical Conditions</label></td>
                            <td>
                                <select data-placeholder="Choose Medical Conditions" class="chosen-select" multiple>
                                    <option value="2">Blood Pressure</option>
                                    <option value="3">Diabetics</option>
                                    <option value="4">Uric Acid</option>
                                    <option value="5">Rheumatoid</option>
                                    <option value="6">Anemia</option>
                                    <option value="7">Kidney failure</option>
                                    <option value="8">Fatty liver</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="ingredients-cont">
                            <td class="label"><label for="5">Allergens</label></td>
                            <td>
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
                            </td>
                        </tr>

                    </table>
                </fieldset>


                <div class="margin-top-25"></div>


                <!-- Nutrition Facts -->
                <h4>Nutrition Facts</h4>

                <fieldset class="additional-info">
                    <table>

                        <tr class="ingredients-cont">
                            <td class="label"><label for="5">Calories</label></td>
                            <td><input id="5" type="text" /></td>
                        </tr>
                        <!--

                                        <tr class="ingredients-cont">
                                            <td class="label"><label for="6">Total Carbohydrate</label></td>
                                            <td><input id="6" type="text" /></td>
                                        </tr>
                        -->

                        <tr class="ingredients-cont">
                            <td class="label"><label for="6">Total Sodium</label></td>
                            <td><input id="6" type="text" /></td>
                        </tr>

                        <tr class="ingredients-cont">
                            <td class="label"><label for="7">Total Fat</label></td>
                            <td><input id="7" type="text" /></td>
                        </tr>

                        <tr class="ingredients-cont">
                            <td class="label"><label for="8">Protein</label></td>
                            <td><input id="8" type="text" /></td>
                        </tr>

                        <!--
                                        <tr class="ingredients-cont">
                                            <td class="label"><label for="9">Cholesterol</label></td>
                                            <td><input id="9" type="text" /></td>
                                        </tr>
                        -->

                    </table>
                </fieldset>

                <div class="margin-top-30"></div>
                <a href="#" class="button color big">Submit Recipe</a>

            </div>
        </div>
    </div>
    <!-- Container / End -->


    <div class="margin-top-50"></div>

    </div>
    <!-- Wrapper / End -->
@endsection