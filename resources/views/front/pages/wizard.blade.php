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
        hr {
           margin: 5px !important;
        }
        .main_question{
            text-align: left;
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
                                <h3  class="main_question"><i class="arrow_right"></i>Je suis?</h3>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="container_radio version_2">Un Particulier
                                                <input type="radio" name="gender" value="Un Particulier" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_radio version_2">Une femme
                                                <input type="radio" name="gender" value="ne femme" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="container_radio version_2">Un pro / Une asso
                                                <input type="radio" name="gender" value="Un pro / Une asso" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_radio version_2">Un homme
                                                <input type="radio" name="gender" value="Un homme" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h3 class="main_question"><i class="arrow_right"></i>Ne(e) le</h3>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                                <input type="date" name="date" value="Un Particulier" class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h3 class="main_question"><i class="arrow_right"></i>Prénom</h3>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <input type="text" name="fname" id="fname" class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h3 class="main_question"><i class="arrow_right"></i>Nom</h3>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <input type="text" name="lname" id="lname" class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h3 class="main_question"><i class="arrow_right"></i>Ma ville</h3>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <input type="text" name="city" id="city" class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                <!-- /row -->
                            </div>

                            <div class="step">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3 class="main_question"><i class="arrow_right"></i>Téléphone</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="number" name="phone" placeholder="Téléphonerr" class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3 class="main_question"><i class="arrow_right"></i>À propos de moi</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                            <textarea style="height: 130px" class="form-control" name="about" id="" cols="30" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="step">
                                <h3 class="main_question"><i class="arrow_right"></i>Sports</h3>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="container_check version_2">Fitness Musculation
                                                <input type="radio" name="sport[]" value="Fitness Musculation" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Foot en plein air
                                                <input type="checkbox" name="sport[]" value="Foot en plein air" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Foot en salle
                                                <input type="checkbox" name="sport[]" value="Foot en salle" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Handball
                                                <input type="checkbox" name="sport[]" value="Handball" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Jogging
                                                <input type="checkbox" name="sport[]" value="Jogging" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Karting
                                                <input type="checkbox" name="sport[]" value="Karting" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Natation
                                                <input type="checkbox" name="sport[]" value="Natation" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Boldairetudiant
                                                <input type="checkbox" name="sport[]" value="Boldairetudiant" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Bowling
                                                <input type="checkbox" name="sport[]" value="Bowling" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Brunch
                                                <input type="checkbox" name="sport[]" value="Brunch" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="container_check version_2">Football américain
                                                <input type="checkbox" name="sport[]" value="Football américain" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Golf
                                                <input type="checkbox" name="sport[]" value="Golf" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Gymnastique
                                                <input type="checkbox" name="sport[]" value="Gymnastique" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Soirées en Visio
                                                <input type="checkbox" name="sport[]" value="Soirées en Visio" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Accrobranche
                                                <input type="checkbox" name="sport[]" value="Accrobranche" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Afterwork
                                                <input type="checkbox" name="sport[]" value="Afterwork" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Balade Visite
                                                <input type="checkbox" name="sport[]" value="Balade Visite" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Barbecue
                                                <input type="checkbox" name="sport[]" value="Barbecue" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Boire un verre
                                                <input type="checkbox" name="sport[]" value="Boire un verre" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Basketball
                                                <input type="checkbox" name="sport[]" value="Basketball" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /row -->
                            </div>

                            <div class="step">
                                <h3 class="main_question"><i class="arrow_right"></i>Sorties</h3>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="container_check version_2">Shopping Boutique
                                                <input type="radio" name="sortie[]" value="Shopping Boutique" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Soirée dansante
                                                <input type="checkbox" name="sortie[]" value="Soirée dansante" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Soirée étudiante
                                                <input type="checkbox" name="sortie[]" value="Soirée étudiante" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Sortie à moto
                                                <input type="checkbox" name="sortie[]" value="Sortie à moto" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Sortie avec enfants
                                                <input type="checkbox" name="sortie[]" value="Sortie avec enfants" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Spectacle Théâtre - Opéra
                                                <input type="checkbox" name="sortie[]" value="Spectacle Théâtre - Opéra" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Tapas con amigos
                                                <input type="checkbox" name="sortie[]" value="Tapas con amigos" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Vide dressing - Vide greniers
                                                <input type="checkbox" name="sortie[]" value="Vide dressing - Vide greniers" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Zoo - Fermes
                                                <input type="checkbox" name="sortie[]" value="Zoo - Fermes" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Autre sortie & soirée
                                                <input type="checkbox" name="sortie[]" value="Autre sortie & soirée" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="container_check version_2">Soirées en Visio
                                                <input type="checkbox" name="sortie[]" value="Soirées en Visio" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Accrobranche
                                                <input type="checkbox" name="sortie[]" value="Accrobranche" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Afterwork
                                                <input type="checkbox" name="sortie[]" value="Afterwork" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Balade Visite
                                                <input type="checkbox" name="sortie[]" value="Balade Visite" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Balade canine
                                                <input type="checkbox" name="sortie[]" value="Balade canine" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Barbecue
                                                <input type="checkbox" name="sortie[]" value="Barbecue" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Boire un verre
                                                <input type="checkbox" name="sortie[]" value="Boire un verre" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Boldairetudiant
                                                <input type="checkbox" name="sortie[]" value="Boldairetudiant" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Bowling
                                                <input type="checkbox" name="sortie[]" value="Bowling" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Brunch
                                                <input type="checkbox" name="sortie[]" value="Brunch" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /row -->
                            </div>

                            <div class="step">
                                <h3 class="main_question"><i class="arrow_right"></i>Jeux</h3>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="container_check version_2">Jeux en Visio
                                                <input type="radio" name="game[]" value="Jeux en Visio" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Baby foot Billard Fléchettes
                                                <input type="checkbox" name="game[]" value="Baby foot Billard Fléchettes" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Escape game
                                                <input type="checkbox" name="game[]" value="Escape game" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Jeux de cartes
                                                <input type="checkbox" name="game[]" value="Jeux de cartes" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Jeux de société - Echecs - Dames
                                                <input type="checkbox" name="game[]" value="Jeux de société" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="container_check version_2">Jeux vidéo
                                                <input type="checkbox" name="game[]" value="Jeux vidéo" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Laser game
                                                <input type="checkbox" name="game[]" value="Laser game" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Loto
                                                <input type="checkbox" name="game[]" value="Loto" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Autre jeu
                                                <input type="checkbox" name="game[]" value="Autre jeu" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /row -->
                            </div>

                            <div class="step">
                                <h3 class="main_question"><i class="arrow_right"></i>Divers</h3>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="container_check version_2">Cuisine
                                                <input type="radio" name="divers[]" value="Cuisine" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Littérature
                                                <input type="checkbox" name="divers[]" value="Littérature" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Musique
                                                <input type="checkbox" name="divers[]" value="Musique" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Œnologie
                                                <input type="checkbox" name="divers[]" value="Œnologie" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Peinture
                                                <input type="checkbox" name="divers[]" value="Peinture" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Sculpture
                                                <input type="checkbox" name="divers[]" value="Sculpture" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Architecture
                                                <input type="checkbox" name="divers[]" value="Architecture" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Photographie
                                                <input type="checkbox" name="divers[]" value="Photographie" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Salon Séminaire
                                                <input type="checkbox" name="divers[]" value="Salon Séminaire" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Télévision Série - Mangas
                                                <input type="checkbox" name="divers[]" value="Télévision Série - Mangas" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Voyage - Séjours
                                                <input type="checkbox" name="divers[]" value="Voyage - Séjours" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="container_check version_2">Divers en Visio
                                                <input type="checkbox" name="divers[]" value="Divers en Visio" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Anniversaire
                                                <input type="checkbox" name="question_1[]" value="Anniversaire" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Apprentissage - Atelier
                                                <input type="checkbox" name="divers[]" value="Apprentissage - Atelier" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Bénévolat Caritatif
                                                <input type="checkbox" name="divers[]" value="Bénévolat Caritatif" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Bien être Balnéo - Beauté Soins du corps
                                                <input type="checkbox" name="divers[]" value="Bien être Balnéo - Beauté Soins du corps" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Bricolage - Jardinage
                                                <input type="checkbox" name="divers[]" value="Bricolage - Jardinage" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Chasse pêche
                                                <input type="checkbox" name="divers[]" value="Chasse pêche" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Couture Broderie
                                                <input type="checkbox" name="divers[]" value="Couture Broderie" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Conférence
                                                <input type="checkbox" name="divers[]" value="Conférence" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Cuisine
                                                <input type="checkbox" name="divers[]" value="Cuisine" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Autre
                                                <input type="checkbox" name="divers[]" value="Autre" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /row -->
                            </div>

                            <div class="step">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3 class="main_question"><i class="arrow_right"></i>Email</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email" class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3 class="main_question"><i class="arrow_right"></i>Mot de passe</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="password" name="password" placeholder="Mot de passe" class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <hr> <div class="row">
                                    <div class="col-lg-12">
                                        <h3 class="main_question"><i class="arrow_right"></i>Confirmez le mot de passe</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="password" name="password_confirmation" placeholder="Confirmez le mot de passe" class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <hr>
                            </div>


                            <div class="submit step" id="end">
                                <div class="summary">
                                    <div class="wrapper">
                                        <h3 style="color: black">Je prendrais du temps pour la bonne personne<br><span id="name_field"></span></h3>
                                    </div>
                                    <div class="text-center">
                                        <div class="form-group terms">
                                            <label class="container_check">Je certifie avoir au moins l'âge de 16 ans révolus. Je comprends qu'en me connectant au service Darting, j'accepte de fait, et sans réserves, les Conditions Générales d'utilisation, la Politique de confidentialité, la Charte d'utilisation des cookies et la Charte de bonne conduite de Frimake consultables sur le site www.frimake.com
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
