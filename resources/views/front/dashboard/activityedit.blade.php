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
                        @if(Auth::user()->hasSubscription())
                            <div class="row g-4" id="typerow">
                                <div class="col-md-12">
                                    <h3 class="ptm" style="text-align: left">Sélectionnez le type d'activité</h3>
                                </div>
                                <div class="col-md-6">
                                    <a class="type" data-type=Real"><img src="{{asset('assets/images/03.jpeg')}}" style="width: 100%; border-radius: 10px" alt=""></a>
                                </div>
                                <div class="col-md-6">
                                    <a class="type" data-type="Visual"><img src="{{asset('assets/images/04.jpeg')}}" style="width: 100%; border-radius: 10px" alt=""></a>
                                </div>
                            </div>
                            <div class="row g-4" id="subtyperow" style="display: none">
                                <div class="col-md-12">
                                    <h3 class="ptm" style="text-align: left">Sélectionnez le type de sous-activité</h3>
                                </div>
                                <div class="col-md-6">
                                    <a class="subitem" data-type="Sports"><img src="{{asset('assets/images/05.png')}}" style="width: 100%; border-radius: 10px" alt=""></a>
                                </div>
                                <div class="col-md-6">
                                    <a class="subitem" data-type="Sorties"><img src="{{asset('assets/images/06.png')}}" style="width: 100%; border-radius: 10px" alt=""></a>
                                </div>
                                <div class="col-md-6">
                                    <a class="subitem" data-type="Games"> <img src="{{asset('assets/images/07.png')}}" style="width: 100%; border-radius: 10px" alt=""></a>
                                </div>
                                <div class="col-md-6">
                                    <a class="subitem" data-type="Divers"><img src="{{asset('assets/images/08.png')}}" style="width: 100%; border-radius: 10px" alt=""></a>
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
                                                <form  method="get" action="{{route('activity.update',['id' => base64_encode($editactive->id)])}}"  accept-charset="UTF-8" enctype="multipart/form-data">
                                                    @csrf
                                                    <div id="sport" style="display: none">
                                                        <h6 style="text-align: left; color: black">Sélectionnez le sport pour l'activité</h6>
                                                        <div class="row" style="height: 200px; overflow: scroll; border: 1px solid black; padding: 10px">
                                                            <?php $sport = \App\Sport::all();?>
                                                            @foreach( $sport as $row)
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label class="container_check version_2">
                                                                            <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="{{asset($row->image)}}" alt="">
                                                                            {{$row->name}}
                                                                            <input type="checkbox" name="sport[]" value="{{$row->id}}" class="required">
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div id="sortie" style="display: none">
                                                        <h6 style="text-align: left; color: black">Sélectionnez le sortie pour l'activité</h6>
                                                        <div class="row" style="height: 200px; overflow: scroll; border: 1px solid black; padding: 10px">
                                                            <?php $sorties = \App\Sorties::all();?>
                                                            @foreach( $sorties as $sortie)
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label class="container_check version_2">
                                                                            <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="{{asset($sortie->image)}}" alt="">
                                                                            {{$sortie->name}}
                                                                            <input type="checkbox" name="sortie[]" value="{{$sortie->id}}" class="required">
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div id="game" style="display: none">
                                                        <h6 style="text-align: left; color: black">Sélectionnez le jeu pour l'activité</h6>
                                                        <div class="row" style="height: 200px; overflow: scroll; border: 1px solid black; padding: 10px">
                                                            <?php $games = \App\Jeux::all();?>
                                                            @foreach($games as $game)
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label class="container_check version_2">
                                                                            <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="{{asset($game->image)}}" alt="">
                                                                            {{$game->name}}
                                                                            <input type="checkbox" name="game[]" value="{{$game->id}}" class="required">
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div id="diver" style="display: none">
                                                        <h6 style="text-align: left; color: black">Sélectionnez le diver pour l'activité</h6>
                                                        <div class="row" style="height: 200px; overflow: scroll; border: 1px solid black; padding: 10px">
                                                            <?php $divers = \App\Divers::all();?>
                                                            @foreach($divers as $diver)
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label class="container_check version_2">
                                                                            <img style="height: 20px; margin-right: 10px; border-radius: 50px;" src="{{asset($diver->image)}}" alt="">
                                                                            {{$diver->name}}
                                                                            <input type="checkbox" name="diver[]" value="{{$diver->id}}" class="required">
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <input type="hidden" name="activity_type" id="activity_type">
                                                    <input type="hidden" name="activity_subtype" id="activity_subtype">
                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            <h6 style="text-align: left; color: black">Titre</h6>

                                                            <input type="text" name="title" class="form-control" required value=" {{$editactive->title}}" placeholder="Entrez le titre de l'activité">
                                                            <h6 style="text-align: left; color: black">Heure de début</h6>
                                                            <input type="time" required name="start_time" value="{{$editactive->start_time}}" class="form-control">
                                                            <h6 style="text-align: left; color: black">Heure de fin</h6>
                                                            <input type="time" required name="end_time" value="{{$editactive->end_time}}" class="form-control">
                                                            <h6 style="text-align: left; color: black">Durée de l'activité</h6>
                                                            <input type="time" required name="time" value="{{$editactive->time}}" class="form-control">

                                                            <h6 style="text-align: left; color: black">Pays</h6>
                                                            <select  required name="country" class="form-control" id="">
                                                                <option value="Guadeloupe" {{ $editactive->country == 'Guadeloupe' ? 'selected' : '' }}>Guadeloupe</option>
                                                                <option value="Martinique" {{ $editactive->country == 'Martinique' ? 'selected' : '' }}>Martinique</option>
                                                                <option value="Guyane" {{ $editactive->country == 'Guyane' ? 'selected' : '' }}>Guyane</option>
                                                                <option value="Réunion" {{ $editactive->country == 'Réunion' ? 'selected' : '' }}>Réunion</option>
                                                            </select>

                                                            <h6 style="text-align: left; color: black">Image d'activité</h6>
                                                            <input required type="file" name="image" value=" {{$editactive->image}}" class="form-control">


                                                            <h6 style="text-align: left; color: black">Âge des participants (min-max)</h6>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <select required name="min_age"  class="form-control" id="">
                                                                        <option value="18" {{ $editactive->min_age == 18 ? 'selected' : '' }}>18</option>
                                                                        <option value="19" {{ $editactive->min_age == 19 ? 'selected' : '' }}>19</option>
                                                                        <option value="20" {{ $editactive->min_age == 20 ? 'selected' : '' }}>20</option>
                                                                        <option value="21" {{ $editactive->min_age == 21 ? 'selected' : '' }}>21</option>
                                                                        <option value="22" {{ $editactive->min_age == 22 ? 'selected' : '' }}>22</option>
                                                                        <option value="23" {{ $editactive->min_age == 23 ? 'selected' : '' }}>23</option>
                                                                        <option value="24" {{ $editactive->min_age == 24 ? 'selected' : '' }}>24</option>
                                                                        <option value="25"{{ $editactive->min_age == 25 ? 'selected' : '' }}>25</option>
                                                                        <option value="26"{{ $editactive->min_age == 26 ? 'selected' : '' }}>26</option>
                                                                        <option value="27"{{ $editactive->min_age == 27 ? 'selected' : '' }}>27</option>
                                                                        <option value="28"{{ $editactive->min_age == 28 ? 'selected' : '' }}>28</option>
                                                                        <option value="29"{{ $editactive->min_age == 29 ? 'selected' : '' }}>29</option>
                                                                        <option value="30"{{ $editactive->min_age == 30 ? 'selected' : '' }}>30</option>
                                                                        <option value="31"{{ $editactive->min_age == 31 ? 'selected' : '' }}>31</option>
                                                                        <option value="32"{{ $editactive->min_age == 32 ? 'selected' : '' }}>32</option>
                                                                        <option value="33"{{ $editactive->min_age == 33 ? 'selected' : '' }}>33</option>
                                                                        <option value="34"{{ $editactive->min_age == 34 ? 'selected' : '' }}>34</option>
                                                                        <option value="35"{{ $editactive->min_age == 35 ? 'selected' : '' }}>35</option>
                                                                        <option value="36"{{ $editactive->min_age == 36 ? 'selected' : '' }}>36</option>
                                                                        <option value="37"{{ $editactive->min_age == 37 ? 'selected' : '' }}>37</option>
                                                                        <option value="38"{{ $editactive->min_age == 38 ? 'selected' : '' }}>38</option>
                                                                        <option value="39"{{ $editactive->min_age == 39 ? 'selected' : '' }}>39</option>
                                                                        <option value="40"{{ $editactive->min_age == 40 ? 'selected' : '' }}>40</option>
                                                                        <option value="41"{{ $editactive->min_age == 41 ? 'selected' : '' }}>41</option>
                                                                        <option value="42"{{ $editactive->min_age == 42 ? 'selected' : '' }}>42</option>
                                                                        <option value="43"{{ $editactive->min_age == 43 ? 'selected' : '' }}>43</option>
                                                                        <option value="44"{{ $editactive->min_age == 44 ? 'selected' : '' }}>44</option>
                                                                        <option value="45"{{ $editactive->min_age == 45 ? 'selected' : '' }}>45</option>
                                                                        <option value="46"{{ $editactive->min_age == 46 ? 'selected' : '' }}>46</option>
                                                                        <option value="47"{{ $editactive->min_age == 47 ? 'selected' : '' }}>47</option>
                                                                        <option value="48"{{ $editactive->min_age == 48 ? 'selected' : '' }}>48</option>
                                                                        <option value="49"{{ $editactive->min_age == 49 ? 'selected' : '' }}>49</option>
                                                                        <option value="50"{{ $editactive->min_age == 50 ? 'selected' : '' }}>50</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <select required name="max_age" value="max_age" class="form-control" id="">
                                                                        <option value="18" {{ $editactive->max_age == 18 ? 'selected' : '' }}>18</option>
                                                                        <option value="19" {{ $editactive->max_age == 19 ? 'selected' : '' }}>19</option>
                                                                        <option value="20" {{ $editactive->max_age == 20 ? 'selected' : '' }}>20</option>
                                                                        <option value="21" {{ $editactive->max_age == 21 ? 'selected' : '' }}>21</option>
                                                                        <option value="22" {{ $editactive->max_age == 22 ? 'selected' : '' }}>22</option>
                                                                        <option value="23" {{ $editactive->max_age == 23 ? 'selected' : '' }}>23</option>
                                                                        <option value="24" {{ $editactive->max_age == 24 ? 'selected' : '' }}>24</option>
                                                                        <option value="25"{{ $editactive->max_age == 25 ? 'selected' : '' }}>25</option>
                                                                        <option value="26"{{ $editactive->max_age == 26 ? 'selected' : '' }}>26</option>
                                                                        <option value="27"{{ $editactive->max_age == 27 ? 'selected' : '' }}>27</option>
                                                                        <option value="28"{{ $editactive->max_age == 28 ? 'selected' : '' }}>28</option>
                                                                        <option value="29"{{ $editactive->max_age == 29 ? 'selected' : '' }}>29</option>
                                                                        <option value="30"{{ $editactive->max_age == 30 ? 'selected' : '' }}>30</option>
                                                                        <option value="31"{{ $editactive->max_age == 31 ? 'selected' : '' }}>31</option>
                                                                        <option value="32"{{ $editactive->max_age == 32 ? 'selected' : '' }}>32</option>
                                                                        <option value="33"{{ $editactive->max_age == 33 ? 'selected' : '' }}>33</option>
                                                                        <option value="34"{{ $editactive->max_age == 34 ? 'selected' : '' }}>34</option>
                                                                        <option value="35"{{ $editactive->max_age == 35 ? 'selected' : '' }}>35</option>
                                                                        <option value="36"{{ $editactive->max_age == 36 ? 'selected' : '' }}>36</option>
                                                                        <option value="37"{{ $editactive->max_age == 37 ? 'selected' : '' }}>37</option>
                                                                        <option value="38"{{ $editactive->max_age == 38 ? 'selected' : '' }}>38</option>
                                                                        <option value="39"{{ $editactive->max_age == 39 ? 'selected' : '' }}>39</option>
                                                                        <option value="40"{{ $editactive->max_age == 40 ? 'selected' : '' }}>40</option>
                                                                        <option value="41"{{ $editactive->max_age == 41 ? 'selected' : '' }}>41</option>
                                                                        <option value="42"{{ $editactive->max_age == 42 ? 'selected' : '' }}>42</option>
                                                                        <option value="43"{{ $editactive->max_age == 43 ? 'selected' : '' }}>43</option>
                                                                        <option value="44"{{ $editactive->max_age == 44 ? 'selected' : '' }}>44</option>
                                                                        <option value="45"{{ $editactive->max_age == 45 ? 'selected' : '' }}>45</option>
                                                                        <option value="46"{{ $editactive->max_age == 46 ? 'selected' : '' }}>46</option>
                                                                        <option value="47"{{ $editactive->max_age == 47 ? 'selected' : '' }}>47</option>
                                                                        <option value="48"{{ $editactive->max_age == 48 ? 'selected' : '' }}>48</option>
                                                                        <option value="49"{{ $editactive->max_age == 49 ? 'selected' : '' }}>49</option>
                                                                        <option value="50"{{ $editactive->max_age == 50 ? 'selected' : '' }}>50</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <h6 style="text-align: left; color: black">Contacts</h6>
                                                            <input type="text" required name="phone" class="form-control" value="{{$editactive->phone}}" placeholder="contact">


                                                        </div>
                                                        <div class="col-md-6">
                                                            <h6 style="text-align: left; color: black">Date d'activité</h6>
                                                            <input type="date" required name="date"  value="{{$editactive->date}}" class="form-control">

                                                            <h6 style="text-align: left; color: black">Ville</h6>
                                                            <input type="text" required name="city" value="{{$editactive->city}}" class="form-control" placeholder="Entrez la ville d'activité">

                                                            <h6 style="text-align: left; color: black">Nombre maximum de participants
                                                            </h6>
                                                            <select required name="num"   class="form-control" id="">
                                                                <option value="2"{{ $editactive->num == 2 ? 'selected' : '' }} >2</option>
                                                                <option value="3"{{ $editactive->num == 3 ? 'selected' : '' }}>3</option>
                                                                <option value="4"{{ $editactive->num == 4 ? 'selected' : '' }}>4</option>
                                                                <option value="5"{{ $editactive->num == 5 ? 'selected' : '' }}>5</option>
                                                                <option value="6"{{ $editactive->num == 6 ? 'selected' : '' }}>6</option>
                                                                <option value="7"{{ $editactive->num == 7 ? 'selected' : '' }}>7</option>
                                                                <option value="8"{{ $editactive->num == 8 ? 'selected' : '' }}>8</option>
                                                                <option value="9"{{ $editactive->num == 9 ? 'selected' : '' }}>9</option>
                                                                <option value="10"{{ $editactive->num == 10 ? 'selected' : '' }}>10</option>
                                                            </select>

                                                            <h6 style="text-align: left; color: black">Type de participants souhaité
                                                            </h6>
                                                            <select required name="type"  class="form-control" id="">
                                                                <option value="Everybody" {{ $editactive->type == 'Everybody' ? 'selected' : '' }}>Tout le monde</option>
                                                                <option value="Males Oly" {{ $editactive->type == 'Males Oly' ? 'selected' : '' }}>Hommes seulement</option>
                                                                <option value="Females Only" {{ $editactive->type == 'Females Only' ? 'selected' : '' }}>Femmes seulement</option>
                                                            </select>
                                                            <h6 style="text-align: left; color: black">Price</h6>
                                                            <span class="input-symbol-euro">
                                                            <input type="number" class="form-control" name="price"  value="{{$editactive->price}}" min="0" step="1" placeholder="€"  />
                                                                    </span>


                                                            {{--                                                        <h6 style="text-align: left; color: black">Type d'activité--}}
                                                            {{--                                                        </h6>--}}
                                                            {{--                                                        <select name="country" class="form-control" id="">--}}
                                                            {{--                                                            <option value="Everybody">Brunch</option>--}}
                                                            {{--                                                            <option value="Males Oly">Dîner</option>--}}
                                                            {{--                                                            <option value="Females Only">Petit-déjeuner</option>--}}
                                                            {{--                                                            <option value="Females Only">Rendez-vous formel</option>--}}
                                                            {{--                                                            <option value="Females Only">Jeu</option>--}}
                                                            {{--                                                        </select>--}}
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h6 style="text-align: left; color: black">Description</h6>
                                                            <textarea name="description" class="form-control" id="" cols="30" rows="10">{{$editactive->description}}</textarea>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <button type="submit" class="btn btn-primary mt-4" style="width: 100%"> Enregistrer l'activité </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- /Wizard container -->
                                        </div>
                                    </div><!-- /Row -->
                                </div>
                            </div>
                        @else
                            <a href="{{route('front.subscriptions')}}"><h6 style="color: #df314d">Abonnez-vous pour créer une activité</h6></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>

        $(".type").click(function (){
            var type = $(this).attr("data-type");
            $("#typerow").hide();
            $("#subtyperow").show();
            $("#activity_type").val(type);
        })
        $(".subitem").click(function (){
            $("#typerow").hide();
            $("#subtyperow").hide();
            $("#form").show();
            var dataId = $(this).attr("data-type");
            $("#activity_subtype").val(dataId);
            if(dataId == "Sports"){
                $("#sport").show();
            }else if(dataId == "Sorties"){
                $("#sortie").show();
            }else if(dataId == "Games"){
                $("#game").show();
            }else if(dataId == "Divers"){
                $("#diver").show();
            }
        })

    </script>
    <!-- COMMON SCRIPTS -->
    <script src="/wizard/js/common_scripts.min.js"></script>
    <script src="/wizard/js/common_functions.js"></script>

    <!-- Wizard script with branch -->
    <script src="/wizard/js/wizard_with_branch.js"></script>

@endsection
