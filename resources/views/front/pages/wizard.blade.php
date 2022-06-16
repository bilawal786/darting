@extends('front.layouts.layout')
@section('styles')
    <!-- BASE CSS -->
    <link href="/wizard/css/style.css" rel="stylesheet">
    <link href="/wizard/css/vendors.css" rel="stylesheet">
    <style>
        #left_form {
            background-color: #df314d;
        }
        button.forward, button.submit {
            background:  #df314d;
        }
        .container_check input:checked ~ .checkmark {
            background-color: #df314d;
        }
        #location {
            color: black;
        }
        .ui-widget-header {
            background: #df314d;
        }
    </style>
@endsection

    @section('content')

<body>
<div id="preloader">
    <div data-loader="circle-side"></div>
</div><!-- /Preload -->

<div id="loader_form">
    <div data-loader="circle-side-2"></div>
</div><!-- /loader_form -->

<div class="page-header-section style-1 login-section padding-t">

<div class="container">
    <div id="form_container">
        <div class="row no-gutters">
            <div class="col-lg-4">
                <div id="left_form">
                    <figure><img src="{{asset('logo.png')}}" alt="" width="100" height="100"></figure>
                    <h2>DARTING</h2>
                    <p>Donnez la réponse à quelques questions, en dernier vous trouverez une meilleure correspondance pour vous</p>
                    <a href="{{route('front.function')}}" class="btn_1 rounded yellow purchase" target="_parent">Lire la suite</a></div>
            </div>
            <div class="col-lg-8">
                <div id="wizard_container">
                    <div id="top-wizard">
                        <div id="progressbar"></div>
                        <span id="location"></span>
                    </div>
                    <!-- /top-wizard -->
                    <form id="wrapped" action="{{route('front.profiles')}}" method="post">
                        @csrf
                        <input id="website" name="website" type="text" value="">
                        <!-- Leave for security protection, read docs for details -->
                        <div id="middle-wizard">

                            <div class="step">
                                <h3 class="main_question"><i class="arrow_right"></i>Quel fruit aimez-vous le plus?</h3>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="container_radio version_2">Banane
                                                <input type="radio" name="question_1" value="Banane" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_radio version_2">Pomme
                                                <input type="radio" name="question_1" value="Pomme" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_radio version_2">Mangue
                                                <input type="radio" name="question_1" value="Mangue" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="container_radio version_2">Orange
                                                <input type="radio" name="question_1" value="Orange" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_radio version_2">Raisins
                                                <input type="radio" name="question_1" value="Raisins" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_radio version_2">Pêche
                                                <input type="radio" name="question_1" value="Pêche" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /row -->
                            </div>

                            <div class="step">
                                <h3 class="main_question"><i class="arrow_right"></i>Où tu veux aller??</h3>
                                <div class="form-group">
                                    <label class="container_radio version_2">Hôtel
                                        <input type="radio" name="question_2" value="Hôtel" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2">Plage
                                        <input type="radio" name="question_2" value="Plage" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2">Restaurant
                                        <input type="radio" name="question_2" value="Restaurant" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>

{{--                            <div class="step">--}}
{{--                                <h3 class="main_question"><i class="arrow_right"></i>Quel fruit aimez-vous le plus?</h3>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label class="container_check version_2">China--}}
{{--                                                <input type="radio" name="question_1[]" value="China" class="required">--}}
{{--                                                <span class="checkmark"></span>--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label class="container_check version_2">South Korea--}}
{{--                                                <input type="checkbox" name="question_1[]" value="South Korea" class="required">--}}
{{--                                                <span class="checkmark"></span>--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label class="container_check version_2">Iran--}}
{{--                                                <input type="checkbox" name="question_1[]" value="Iran" class="required">--}}
{{--                                                <span class="checkmark"></span>--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label class="container_check version_2">Europe--}}
{{--                                                <input type="checkbox" name="question_1[]" value="Europe" class="required">--}}
{{--                                                <span class="checkmark"></span>--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label class="container_check version_2">US States--}}
{{--                                                <input type="checkbox" name="question_1[]" value="US States" class="required">--}}
{{--                                                <span class="checkmark"></span>--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label class="container_check version_2">None of the above--}}
{{--                                                <input type="checkbox" name="question_1[]" value="Mobile Design" class="required">--}}
{{--                                                <span class="checkmark"></span>--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /row -->--}}
{{--                            </div>--}}
                            <!-- /step-->

                            <!-- /Start Branch ============================== -->
                            <div class="step">
                                <label class="custom add_top_10"></label>
                                <h3 class="main_question"><i class="arrow_right"></i>Combien de personnes souhaitez-vous rencontrer?</h3>
                                <div class="form-group">
                                    <label class="container_radio version_2">Seulement une personne
                                        <input type="radio" name="question_3" value="Seulement une personne" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2">2 à 3 personnes
                                        <input type="radio" name="question_3" value="2 à 3 personnes" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2">3 à 10 personnes
                                        <input type="radio" name="question_3" value="3 à 10 personnes" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <small>* Start branch radio based </small>
                            </div>

                            <div class="step" >
                                <h3 class="main_question"><i class="arrow_right"></i>Êtes-vous prêt à payer ?</h3>
                                <div class="form-group">
                                    <label class="container_radio version_2">Oui
                                        <input type="radio" name="question_5" value="Oui" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2">Non
                                        <input type="radio" name="question_5" value="Non" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="step">
                                <h3 class="main_question"><i class="arrow_right"></i>Aimes-tu les animaux de compagnie??</h3>
                                <div class="form-group">
                                    <label class="container_radio version_2">Oui
                                        <input type="radio" name="question_6" value="Oui" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2">Non
                                        <input type="radio" name="question_6" value="Non" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <!-- /step-->

                            <div class="step">
                                <h3 class="main_question"><i class="arrow_right"></i>Croyez-vous au coup de foudre?</h3>
                                <div class="form-group">
                                    <label class="container_radio version_2">Oui
                                        <input type="radio" name="question_7" value="Oui" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2">Non
                                        <input type="radio" name="question_7" value="Non" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <!-- /step-->

                            <div class="step">
                                <h3 class="main_question"><i class="arrow_right"></i>Depuis combien de temps es tu célibataire?</h3>
                                <div class="form-group">
                                    <label class="container_radio version_2">Quelques mois
                                        <input type="radio" name="question_8" value="Quelques mois" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2">Je ne suis pas célibataire
                                        <input type="radio" name="question_8" value="Je ne suis pas célibataire" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2">Pendant longtemps
                                        <input type="radio" name="question_8" value="Pendant longtemps" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="step">
                                <h3 class="main_question"><i class="arrow_right"></i>Combien de temps libre avez-vous ?</h3>
                                <div class="form-group">
                                    <label class="container_radio version_2">Je suis assez occupé comme ça
                                        <input type="radio" name="question_8" value="Je suis assez occupé comme ça" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2">Je n'ai que du temps libre
                                        <input type="radio" name="question_8" value="Je n'ai que du temps libre" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2">Je dirais que je suis dans la moyenne
                                        <input type="radio" name="question_8" value="je dirais que je suis dans la moyenne" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2">Je prendrais du temps pour la bonne personne
                                        <input type="radio" name="question_8" value="Je prendrais du temps pour la bonne personne" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <!-- /step-->

{{--                            <div class="step">--}}
{{--                                <h3 class="main_question"><i class="arrow_right"></i>Please fill with your personal data</h3>--}}
{{--                                <div class="form-group add_top_30">--}}
{{--                                    <label for="name">First and Last Name</label>--}}
{{--                                    <input type="text" name="name" id="name" class="form-control required" onchange="getVals(this, 'name_field');">--}}
{{--                                </div>--}}
{{--                                <br>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="email">Email Address</label>--}}
{{--                                    <input type="email" name="email" id="email" class="form-control required" onchange="getVals(this, 'email_field');">--}}
{{--                                </div>--}}
{{--                                <br>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="phone">Phone</label>--}}
{{--                                    <input type="text" name="phone" id="phone" class="form-control required">--}}
{{--                                </div>--}}
{{--                                <br>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-3 col-md-3 col-sm-3 col-4">--}}
{{--                                        <label for="age">Age</label>--}}
{{--                                        <div class="form-group radio_input">--}}
{{--                                            <input type="text" name="age" id="age" class="form-control required">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">--}}
{{--                                        <div class="form-group radio_input">--}}
{{--                                            <label class="container_radio mr-3">Male--}}
{{--                                                <input type="radio" name="gender" value="Male" class="required">--}}
{{--                                                <span class="checkmark"></span>--}}
{{--                                            </label>--}}
{{--                                            <label class="container_radio">Female--}}
{{--                                                <input type="radio" name="gender" value="Female" class="required">--}}
{{--                                                <span class="checkmark"></span>--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /row-->--}}
{{--                            </div>--}}
                            <!-- /step-->

                            <div class="submit step" id="end">
                                <div class="summary">
                                    <div class="wrapper">
                                        <h3 style="color: black">Je prendrais du temps pour la bonne personne<br><span id="name_field"></span></h3>
                                        <p style="color: black">En fonction de vos informations et de vos intérêts, nous faisons correspondre votre intérêt avec la même personne que votre intérêt après avoir soumis, vous afficherez les meilleures correspondances</p>
                                    </div>
                                    <div class="text-center">
                                        <div class="form-group terms">
                                            <label class="container_check">Veuillez accepterr <a href="#" data-toggle="modal" data-target="#terms-txt">Termes et conditions</a> avant de soumettre
                                                <input type="checkbox" name="terms" value="Yes" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /step last-->

                        </div>
                        <!-- /middle-wizard -->
                        <div id="bottom-wizard">
                            <button type="button" name="backward" class="backward">Précédent</button>
                            <button type="button" name="forward" class="forward">Prochain</button>
                            <button type="submit" name="process" class="submit">Soumettre</button>
                        </div>
                        <!-- /bottom-wizard -->
                    </form>
                </div>
                <!-- /Wizard container -->
            </div>
        </div><!-- /Row -->
    </div><!-- /Form_container -->
</div>
</div>

<div class="cd-overlay-nav">
    <span></span>
</div>
<!-- /cd-overlay-nav -->
<div class="cd-overlay-content">
    <span></span>
</div>
<!-- /cd-overlay-content -->

<!-- Modal terms -->
<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn_1" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


@endsection
@section('scripts')

    <!-- COMMON SCRIPTS -->
    <script src="/wizard/js/common_scripts.min.js"></script>
    <script src="/wizard/js/common_functions.js"></script>

    <!-- Wizard script with branch -->
    <script src="/wizard/js/wizard_with_branch.js"></script>

    @endsection
