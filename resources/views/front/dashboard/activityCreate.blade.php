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
        .container_check.version_2 {
            text-align: left !important;
        }
    </style>
@endsection
@section('content')
    <div class="banner-section page-header-section style-1 login-section padding-tb">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('front.dashboard.include.sidebar')
                </div>
                <div class="col-md-9">
                    <div class="section-wrapper">
                        <div class="row g-4" id="typerow">
                            <div class="col-md-12">
                                <h3 class="ptm" style="text-align: left">Sélectionnez le type d'activité</h3>
                            </div>
                           <div class="col-md-6">
                               <a class="type"><img src="{{asset('assets/images/03.jpeg')}}" style="width: 100%; border-radius: 10px" alt=""></a>
                           </div>
                           <div class="col-md-6">
                               <a class="type"><img src="{{asset('assets/images/04.jpeg')}}" style="width: 100%; border-radius: 10px" alt=""></a>
                           </div>
                        </div>
                        <div class="row g-4" id="subtyperow" style="display: none">
                            <div class="col-md-12">
                                <h3 class="ptm" style="text-align: left">Sélectionnez le type de sous-activité</h3>
                            </div>
                           <div class="col-md-6">
                               <a class="subitem" data-type="sports"><img src="{{asset('assets/images/05.png')}}" style="width: 100%; border-radius: 10px" alt=""></a>
                           </div>
                           <div class="col-md-6">
                               <a class="subitem" data-type="sorties"><img src="{{asset('assets/images/06.png')}}" style="width: 100%; border-radius: 10px" alt=""></a>
                           </div>
                           <div class="col-md-6">
                               <a class="subitem" data-type="games"> <img src="{{asset('assets/images/07.png')}}" style="width: 100%; border-radius: 10px" alt=""></a>
                           </div>
                           <div class="col-md-6">
                               <a class="subitem" data-type="divers"><img src="{{asset('assets/images/08.png')}}" style="width: 100%; border-radius: 10px" alt=""></a>
                           </div>
                        </div>
                        <div class="row g-4" id="form" style="display: none">
                            <div class="col-md-12">
                                <h3 class="ptm" style="text-align: left">Ajouter une nouvelle activité</h3>
                            </div>
                            <div id="form_container">
                                <div class="row no-gutters">
                                    <div class="col-lg-12">
                                        <div id="wizard_container">
                                            <div id="top-wizard">
                                                <div id="progressbar"></div>
                                                <span id="location"></span>
                                            </div>
                                            <!-- /top-wizard -->
                                            <form id="wrapped" action="#" method="post">
                                                @csrf
                                                <input id="website" name="website" type="text" value="">
                                                <!-- Leave for security protection, read docs for details -->
                                                <div id="middle-wizard">

                                                    <div class="step" id="sports">
                                                        <h3 class="main_question"><i class="arrow_right"></i>Sports</h3>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Football_%28soccer_ball%29.svg/1200px-Football_%28soccer_ball%29.svg.png" alt="">
                                                                        Fitness Musculation
                                                                        <input type="radio" name="sport[]" value="Fitness Musculation" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Football_%28soccer_ball%29.svg/1200px-Football_%28soccer_ball%29.svg.png" alt="">
                                                                        Foot en plein air
                                                                        <input type="checkbox" name="sport[]" value="Foot en plein air" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Football_%28soccer_ball%29.svg/1200px-Football_%28soccer_ball%29.svg.png" alt="">
                                                                        Foot en salle
                                                                        <input type="checkbox" name="sport[]" value="Foot en salle" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Football_%28soccer_ball%29.svg/1200px-Football_%28soccer_ball%29.svg.png" alt="">
                                                                        Handball
                                                                        <input type="checkbox" name="sport[]" value="Handball" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Football_%28soccer_ball%29.svg/1200px-Football_%28soccer_ball%29.svg.png" alt="">
                                                                        Jogging
                                                                        <input type="checkbox" name="sport[]" value="Jogging" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Football_%28soccer_ball%29.svg/1200px-Football_%28soccer_ball%29.svg.png" alt="">
                                                                        Karting
                                                                        <input type="checkbox" name="sport[]" value="Karting" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Football_%28soccer_ball%29.svg/1200px-Football_%28soccer_ball%29.svg.png" alt="">
                                                                        Natation
                                                                        <input type="checkbox" name="sport[]" value="Natation" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Football_%28soccer_ball%29.svg/1200px-Football_%28soccer_ball%29.svg.png" alt="">
                                                                        Boldairetudiant
                                                                        <input type="checkbox" name="sport[]" value="Boldairetudiant" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Football_%28soccer_ball%29.svg/1200px-Football_%28soccer_ball%29.svg.png" alt="">
                                                                        Bowling
                                                                        <input type="checkbox" name="sport[]" value="Bowling" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Football_%28soccer_ball%29.svg/1200px-Football_%28soccer_ball%29.svg.png" alt="">
                                                                        Brunch
                                                                        <input type="checkbox" name="sport[]" value="Brunch" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Football_%28soccer_ball%29.svg/1200px-Football_%28soccer_ball%29.svg.png" alt="">
                                                                        Football américain
                                                                        <input type="checkbox" name="sport[]" value="Football américain" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Football_%28soccer_ball%29.svg/1200px-Football_%28soccer_ball%29.svg.png" alt="">
                                                                        Golf
                                                                        <input type="checkbox" name="sport[]" value="Golf" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Football_%28soccer_ball%29.svg/1200px-Football_%28soccer_ball%29.svg.png" alt="">
                                                                        Gymnastique
                                                                        <input type="checkbox" name="sport[]" value="Gymnastique" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Football_%28soccer_ball%29.svg/1200px-Football_%28soccer_ball%29.svg.png" alt="">
                                                                        Soirées en Visio
                                                                        <input type="checkbox" name="sport[]" value="Soirées en Visio" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Football_%28soccer_ball%29.svg/1200px-Football_%28soccer_ball%29.svg.png" alt="">
                                                                        Accrobranche
                                                                        <input type="checkbox" name="sport[]" value="Accrobranche" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Football_%28soccer_ball%29.svg/1200px-Football_%28soccer_ball%29.svg.png" alt="">
                                                                        Afterwork
                                                                        <input type="checkbox" name="sport[]" value="Afterwork" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Football_%28soccer_ball%29.svg/1200px-Football_%28soccer_ball%29.svg.png" alt="">
                                                                        Balade Visite
                                                                        <input type="checkbox" name="sport[]" value="Balade Visite" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Football_%28soccer_ball%29.svg/1200px-Football_%28soccer_ball%29.svg.png" alt="">
                                                                        Barbecue
                                                                        <input type="checkbox" name="sport[]" value="Barbecue" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Football_%28soccer_ball%29.svg/1200px-Football_%28soccer_ball%29.svg.png" alt="">
                                                                        Boire un verre
                                                                        <input type="checkbox" name="sport[]" value="Boire un verre" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Football_%28soccer_ball%29.svg/1200px-Football_%28soccer_ball%29.svg.png" alt="">
                                                                        Basketball
                                                                        <input type="checkbox" name="sport[]" value="Basketball" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /row -->
                                                    </div>

                                                    <div class="step" id="sorties">
                                                        <h3 class="main_question"><i class="arrow_right"></i>Sorties</h3>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://cdn4.iconfinder.com/data/icons/shopping-e-commerce-41/512/shoping-512.png" alt="">
                                                                        Shopping Boutique
                                                                        <input type="radio" name="sortie[]" value="Shopping Boutique" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://cdn4.iconfinder.com/data/icons/shopping-e-commerce-41/512/shoping-512.png" alt="">
                                                                        Soirée dansante
                                                                        <input type="checkbox" name="sortie[]" value="Soirée dansante" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://cdn4.iconfinder.com/data/icons/shopping-e-commerce-41/512/shoping-512.png" alt="">
                                                                        Soirée étudiante
                                                                        <input type="checkbox" name="sortie[]" value="Soirée étudiante" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://cdn4.iconfinder.com/data/icons/shopping-e-commerce-41/512/shoping-512.png" alt="">
                                                                        Sortie à moto
                                                                        <input type="checkbox" name="sortie[]" value="Sortie à moto" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://cdn4.iconfinder.com/data/icons/shopping-e-commerce-41/512/shoping-512.png" alt="">
                                                                        Sortie avec enfants
                                                                        <input type="checkbox" name="sortie[]" value="Sortie avec enfants" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://cdn4.iconfinder.com/data/icons/shopping-e-commerce-41/512/shoping-512.png" alt="">
                                                                        Spectacle Théâtre - Opéra
                                                                        <input type="checkbox" name="sortie[]" value="Spectacle Théâtre - Opéra" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://cdn4.iconfinder.com/data/icons/shopping-e-commerce-41/512/shoping-512.png" alt="">
                                                                        Tapas con amigos
                                                                        <input type="checkbox" name="sortie[]" value="Tapas con amigos" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://cdn4.iconfinder.com/data/icons/shopping-e-commerce-41/512/shoping-512.png" alt="">
                                                                        Vide dressing - Vide greniers
                                                                        <input type="checkbox" name="sortie[]" value="Vide dressing - Vide greniers" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://cdn4.iconfinder.com/data/icons/shopping-e-commerce-41/512/shoping-512.png" alt="">
                                                                        Zoo - Fermes
                                                                        <input type="checkbox" name="sortie[]" value="Zoo - Fermes" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://cdn4.iconfinder.com/data/icons/shopping-e-commerce-41/512/shoping-512.png" alt="">
                                                                        Autre sortie & soirée
                                                                        <input type="checkbox" name="sortie[]" value="Autre sortie & soirée" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://cdn4.iconfinder.com/data/icons/shopping-e-commerce-41/512/shoping-512.png" alt="">
                                                                        Soirées en Visio
                                                                        <input type="checkbox" name="sortie[]" value="Soirées en Visio" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://cdn4.iconfinder.com/data/icons/shopping-e-commerce-41/512/shoping-512.png" alt="">
                                                                        Accrobranche
                                                                        <input type="checkbox" name="sortie[]" value="Accrobranche" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://cdn4.iconfinder.com/data/icons/shopping-e-commerce-41/512/shoping-512.png" alt="">
                                                                        Afterwork
                                                                        <input type="checkbox" name="sortie[]" value="Afterwork" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://cdn4.iconfinder.com/data/icons/shopping-e-commerce-41/512/shoping-512.png" alt="">
                                                                        Balade Visite
                                                                        <input type="checkbox" name="sortie[]" value="Balade Visite" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://cdn4.iconfinder.com/data/icons/shopping-e-commerce-41/512/shoping-512.png" alt="">
                                                                        Balade canine
                                                                        <input type="checkbox" name="sortie[]" value="Balade canine" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://cdn4.iconfinder.com/data/icons/shopping-e-commerce-41/512/shoping-512.png" alt="">
                                                                        Barbecue
                                                                        <input type="checkbox" name="sortie[]" value="Barbecue" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://cdn4.iconfinder.com/data/icons/shopping-e-commerce-41/512/shoping-512.png" alt="">
                                                                        Boire un verre
                                                                        <input type="checkbox" name="sortie[]" value="Boire un verre" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://cdn4.iconfinder.com/data/icons/shopping-e-commerce-41/512/shoping-512.png" alt="">
                                                                        Boldairetudiant
                                                                        <input type="checkbox" name="sortie[]" value="Boldairetudiant" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://cdn4.iconfinder.com/data/icons/shopping-e-commerce-41/512/shoping-512.png" alt="">
                                                                        Bowling
                                                                        <input type="checkbox" name="sortie[]" value="Bowling" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://cdn4.iconfinder.com/data/icons/shopping-e-commerce-41/512/shoping-512.png" alt="">
                                                                        Brunch
                                                                        <input type="checkbox" name="sortie[]" value="Brunch" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /row -->
                                                    </div>

                                                    <div class="step" style="display: none" id="games">
                                                        <h3 class="main_question"><i class="arrow_right"></i>Jeux</h3>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://st.depositphotos.com/1005920/4386/i/600/depositphotos_43862183-stock-photo-game-icon.jpg" alt="">
                                                                        Jeux en Visio
                                                                        <input type="radio" name="game[]" value="Jeux en Visio" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://st.depositphotos.com/1005920/4386/i/600/depositphotos_43862183-stock-photo-game-icon.jpg" alt="">
                                                                        Baby foot Billard Fléchettes
                                                                        <input type="checkbox" name="game[]" value="Baby foot Billard Fléchettes" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://st.depositphotos.com/1005920/4386/i/600/depositphotos_43862183-stock-photo-game-icon.jpg" alt="">
                                                                        Escape game
                                                                        <input type="checkbox" name="game[]" value="Escape game" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://st.depositphotos.com/1005920/4386/i/600/depositphotos_43862183-stock-photo-game-icon.jpg" alt="">
                                                                        Jeux de cartes
                                                                        <input type="checkbox" name="game[]" value="Jeux de cartes" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://st.depositphotos.com/1005920/4386/i/600/depositphotos_43862183-stock-photo-game-icon.jpg" alt="">
                                                                        Jeux de société - Echecs - Dames
                                                                        <input type="checkbox" name="game[]" value="Jeux de société" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://st.depositphotos.com/1005920/4386/i/600/depositphotos_43862183-stock-photo-game-icon.jpg" alt="">
                                                                        Jeux vidéo
                                                                        <input type="checkbox" name="game[]" value="Jeux vidéo" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://st.depositphotos.com/1005920/4386/i/600/depositphotos_43862183-stock-photo-game-icon.jpg" alt="">
                                                                        Laser game
                                                                        <input type="checkbox" name="game[]" value="Laser game" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://st.depositphotos.com/1005920/4386/i/600/depositphotos_43862183-stock-photo-game-icon.jpg" alt="">
                                                                        Loto
                                                                        <input type="checkbox" name="game[]" value="Loto" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://st.depositphotos.com/1005920/4386/i/600/depositphotos_43862183-stock-photo-game-icon.jpg" alt="">
                                                                        Autre jeu
                                                                        <input type="checkbox" name="game[]" value="Autre jeu" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /row -->
                                                    </div>

                                                    <div class="step" style="display: none" id="divers">
                                                        <h3 class="main_question"><i class="arrow_right"></i>Divers</h3>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://pbs.twimg.com/profile_images/941020935611731969/yjcd1MV-_400x400.jpg" alt="">
                                                                        Cuisine
                                                                        <input type="radio" name="divers[]" value="Cuisine" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://pbs.twimg.com/profile_images/941020935611731969/yjcd1MV-_400x400.jpg" alt="">
                                                                        Littérature
                                                                        <input type="checkbox" name="divers[]" value="Littérature" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://pbs.twimg.com/profile_images/941020935611731969/yjcd1MV-_400x400.jpg" alt="">
                                                                        Musique
                                                                        <input type="checkbox" name="divers[]" value="Musique" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://pbs.twimg.com/profile_images/941020935611731969/yjcd1MV-_400x400.jpg" alt="">
                                                                        Œnologie
                                                                        <input type="checkbox" name="divers[]" value="Œnologie" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://pbs.twimg.com/profile_images/941020935611731969/yjcd1MV-_400x400.jpg" alt="">
                                                                        Peinture
                                                                        <input type="checkbox" name="divers[]" value="Peinture" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://pbs.twimg.com/profile_images/941020935611731969/yjcd1MV-_400x400.jpg" alt="">
                                                                        Sculpture
                                                                        <input type="checkbox" name="divers[]" value="Sculpture" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://pbs.twimg.com/profile_images/941020935611731969/yjcd1MV-_400x400.jpg" alt="">
                                                                        Architecture
                                                                        <input type="checkbox" name="divers[]" value="Architecture" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://pbs.twimg.com/profile_images/941020935611731969/yjcd1MV-_400x400.jpg" alt="">
                                                                        Photographie
                                                                        <input type="checkbox" name="divers[]" value="Photographie" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://pbs.twimg.com/profile_images/941020935611731969/yjcd1MV-_400x400.jpg" alt="">
                                                                        Salon Séminaire
                                                                        <input type="checkbox" name="divers[]" value="Salon Séminaire" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://pbs.twimg.com/profile_images/941020935611731969/yjcd1MV-_400x400.jpg" alt="">
                                                                        Télévision Série - Mangas
                                                                        <input type="checkbox" name="divers[]" value="Télévision Série - Mangas" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://pbs.twimg.com/profile_images/941020935611731969/yjcd1MV-_400x400.jpg" alt="">
                                                                        Voyage - Séjours
                                                                        <input type="checkbox" name="divers[]" value="Voyage - Séjours" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://pbs.twimg.com/profile_images/941020935611731969/yjcd1MV-_400x400.jpg" alt="">
                                                                        Divers en Visio
                                                                        <input type="checkbox" name="divers[]" value="Divers en Visio" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://pbs.twimg.com/profile_images/941020935611731969/yjcd1MV-_400x400.jpg" alt="">
                                                                        Anniversaire
                                                                        <input type="checkbox" name="question_1[]" value="Anniversaire" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://pbs.twimg.com/profile_images/941020935611731969/yjcd1MV-_400x400.jpg" alt="">
                                                                        Apprentissage - Atelier
                                                                        <input type="checkbox" name="divers[]" value="Apprentissage - Atelier" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://pbs.twimg.com/profile_images/941020935611731969/yjcd1MV-_400x400.jpg" alt="">
                                                                        Bénévolat Caritatif
                                                                        <input type="checkbox" name="divers[]" value="Bénévolat Caritatif" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://pbs.twimg.com/profile_images/941020935611731969/yjcd1MV-_400x400.jpg" alt="">
                                                                        Bien être Balnéo - Beauté Soins du corps
                                                                        <input type="checkbox" name="divers[]" value="Bien être Balnéo - Beauté Soins du corps" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://pbs.twimg.com/profile_images/941020935611731969/yjcd1MV-_400x400.jpg" alt="">
                                                                        Bricolage - Jardinage
                                                                        <input type="checkbox" name="divers[]" value="Bricolage - Jardinage" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://pbs.twimg.com/profile_images/941020935611731969/yjcd1MV-_400x400.jpg" alt="">
                                                                        Chasse pêche
                                                                        <input type="checkbox" name="divers[]" value="Chasse pêche" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://pbs.twimg.com/profile_images/941020935611731969/yjcd1MV-_400x400.jpg" alt="">
                                                                        Couture Broderie
                                                                        <input type="checkbox" name="divers[]" value="Couture Broderie" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://pbs.twimg.com/profile_images/941020935611731969/yjcd1MV-_400x400.jpg" alt="">
                                                                        Conférence
                                                                        <input type="checkbox" name="divers[]" value="Conférence" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://pbs.twimg.com/profile_images/941020935611731969/yjcd1MV-_400x400.jpg" alt="">
                                                                        Cuisine
                                                                        <input type="checkbox" name="divers[]" value="Cuisine" class="required">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="container_check version_2">
                                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="https://pbs.twimg.com/profile_images/941020935611731969/yjcd1MV-_400x400.jpg" alt="">
                                                                        Autre
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
                                                                    <label class="container_check">Je certifie avoir au moins l'âge de 16 ans révolus.
                                                                        Je comprends qu'en me connectant au service Dating, j'accepte
                                                                        de fait, et sans réserves, les Conditions Générales d'Utilisation, la
                                                                        Politique de confidentialité, la Charte d'utilisation des cookies et la
                                                                        Charte de bonne conduite de Dating consultables sur le site
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
                                                    <button type="button" name="forward" class="forward">Suivant</button>
                                                    <button type="submit" name="process" class="submit">Soumettre</button>
                                                </div>
                                                <!-- /bottom-wizard -->
                                            </form>
                                        </div>
                                        <!-- /Wizard container -->
                                    </div>
                                </div><!-- /Row -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(".type").click(function (){
            $("#typerow").hide();
            $("#subtyperow").show();
        })
        $(".subitem").click(function (){
            $("#typerow").hide();
            $("#subtyperow").hide();
            $("#form").show();
            // var dataId = $(this).attr("data-type");
            // if(dataId == "sports"){
            //     $("#sports").show();
            // }else if(dataId == "sorties"){
            //     $("#sorties").show();
            // }else if(dataId == "games"){
            //     $("#games").show();
            // }else if(dataId == "divers"){
            //     $("#divers").show();
            // }
        })
    </script>
    <!-- COMMON SCRIPTS -->
    <script src="/wizard/js/common_scripts.min.js"></script>
    <script src="/wizard/js/common_functions.js"></script>

    <!-- Wizard script with branch -->
    <script src="/wizard/js/wizard_with_branch.js"></script>

@endsection