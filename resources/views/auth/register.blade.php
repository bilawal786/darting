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
                            <p>Ton inscription va prendre 2 min.
                                Commence par nous dire qui es-tu
                                ?</p>
                            <a href="{{route('front.function')}}" class="btn_1 rounded yellow purchase" target="_parent">Lire la suite</a></div>
                    </div>
                    <div class="col-lg-8">
                        <div id="wizard_container">
                            <div id="top-wizard">
                                <div id="progressbar"></div>
                                <span id="location"></span>
                            </div>
                            <!-- /top-wizard -->
                            <form id="wrapped" action="{{route('register')}}" method="post">
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
                                                        <input type="radio" name="gender" value="Ne Femme" class="required">
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
                                                <h3 class="main_question"><i class="arrow_right"></i>Ma Pays</h3>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="form-group">
                                                    <select name="country" class="form-control" id="">
                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                        <option value="Martinique">Martinique</option>
                                                        <option value="Guyane">Guyane</option>
                                                        <option value="Réunion">Réunion</option>
                                                    </select>
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
                                                    <input type="number" name="phone" placeholder="Téléphone" class="form-control required">
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
                                            <?php $sport = \App\Sport::all();?>
                                            @foreach( $sport as $row)
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                            <label class="container_check version_2">
                                                                <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="{{$row->image}}" alt="">
                                                                {{$row->name}}
                                                                <input type="checkbox" name="sport[]" value="{{$row->id}}" class="required">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <!-- /row -->
                                    </div>

                                    <div class="step">
                                        <h3 class="main_question"><i class="arrow_right"></i>Sorties</h3>
                                        <div class="row">
                                            <?php $sortie = \App\Sorties::all();?>
                                            @foreach($sortie as $sort)
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="container_check version_2">
                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="{{asset($sort->image)}}" alt="">
                                                        {{$sort->name}}
                                                        <input type="checkbox" name="sortie[]" value=" {{$sort->id}}" class="required">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                                @endforeach
                                        </div>
                                        <!-- /row -->
                                    </div>

                                    <div class="step">
                                        <h3 class="main_question"><i class="arrow_right"></i>Jeux</h3>
                                        <div class="row">
                                            <?php $games = \App\Jeux::all();?>
                                            @foreach($games as $game)
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="container_check version_2">
                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="{{asset($game->image)}}" alt="">
                                                        {{$game->name}}
                                                        <input type="radio" name="game[]" value="{{$game->id}}" class="required">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                                @endforeach
                                        </div>
                                        <!-- /row -->
                                    </div>

                                    <div class="step">
                                        <h3 class="main_question"><i class="arrow_right"></i>Divers</h3>
                                        <div class="row">
                                            <?php $divers = \App\Divers::all();?>
                                            @foreach($divers as $diver)
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="container_check version_2">
                                                        <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="{{asset($diver->image)}}" alt="">
                                                        {{$diver->name}}
                                                        <input type="radio" name="divers[]" value="{{$diver->id}}" class="required">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            @endforeach
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
