@extends('front.layouts.layout')
@section('content')
<!-- ================ Banner Section start Here =============== -->
@auth

    <section class="banner-section">
        <div class="container">

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{$slide->image1}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{$slide->image2}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{$slide->image3}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
                </div>
            </div>

    </section>
@else



    <section class="banner-section">
        <div class="container">
            <div class="section-wrapper">
                <div class="row align-items-end">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <div class="intro-form">
                                <div class="intro-form-inner">
                                    <h3>Présentation de Darting</h3>
                                    <p>Ne restez plus seul à la maison Confiez-nous l'organisation de vos sorties de groupe.</p>
                                    <form action="{{route('front.dashboard')}}" method="get" class="banner-form">
                                        @csrf
                                        <div class="gender">
                                            <label for="gender" class="left">Je suis un </label>
                                            <div class="custom-select right">
                                                <select required name="gender" id="gender" class="">
                                                    <option value="Mâle">Homme</option>
                                                    <option value="Femelle">Femme</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="person">
                                            <label for="gender-two" class="left">À la recherche de</label>
                                            <div class="custom-select right">
                                                <select required name="gender_two" id="gender_two" class="">
                                                    <option value="Femelle">Femme</option>
                                                    <option value="Mâle">Homme</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="age">
                                            <label for="age" class="left">Âge</label>
                                            <div class="right d-flex justify-content-between">
                                                <div class="custom-select">
                                                    <select required name="age_start" id="age">
                                                        <option value="19">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                    </select>
                                                </div>

                                                <div class="custom-select">
                                                    <select required name="age_end" id="age_two">
                                                        <option value="19">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="city">
                                            <label for="city" class="left">Objectif</label>
                                            <div class="custom-select right">
                                                <select required name="purpose" id="gender-two" class="">
                                                    <option value="Rencontres">Rencontres</option>
                                                    <option value="Relation amicale">Relation amicale</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button class="">Trouvez votre partenaire</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-thumb">
                            @foreach($setting as $row)
                                <img src="{{asset($row->banarimage)}}" alt="img">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endauth
<!-- ================ Banner Section end Here =============== -->


<!-- ================ Member Section Start Here =============== -->
<section class="member-section padding-tb">
    <div class="container">
        <div class="section-header">
            <h4 class="theme-color">Rencontrez de nouvelles personnes aujourd'hui!</h4>
            <h2>Nouveaux membres</h2>
        </div>
        <div class="section-wrapper">
            <div class="row justify-content-center g-3 g-md-4">
                @foreach($users as $user)
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <a href="{{route('front.profile', ['id' => base64_encode($user->id)])}}">
                            <div class="lab-item member-item style-1">
                                <div class="lab-inner">
                                    <div class="lab-thumb">
                                        @if($user->profile_picture != null)
                                            <img style="height: 250px"   src="{{asset($user->profile_picture)}}" alt="member-img">
                                        @else
                                            <img style="height: 250px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/User-avatar.svg/1024px-User-avatar.svg.png" alt="member-img">
                                        @endif
                                    </div>
                                    <div class="lab-content">
                                        <h6><a>{{$user->fname. ' ' . $user->lname}}</a> </h6>
                                        <p>{{$user->country}}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- ================ Member Section end Here =============== -->

<!-- ================ About Section start Here =============== -->
<section class="about-section padding-tb bg-img">
    <div class="container">
        <div class="section-header">

            <h4>{{$about->title1}}</h4>
            <h2>{{$about->title2}}</h2>
        </div>
        <div class="section-wrapper">
            <div class="row justify-content-center g-4">
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                    <div class="lab-item about-item">
                        <div class="lab-inner text-center">
                            <div class="lab-thumb">
                                <img src="assets/images/about/01.png" alt="img">
                            </div>
                            <div class="lab-content">
                                <h2 class="counter">{{$about->count1}}</h2>
                                <p>Membres au total</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                    <div class="lab-item about-item">
                        <div class="lab-inner text-center">
                            <div class="lab-thumb">
                                <img src="assets/images/about/02.png" alt="img">
                            </div>
                            <div class="lab-content">
                                <h2 class="counter">{{$about->count2}}</h2>
                                <p>Membres en ligne</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                    <div class="lab-item about-item">
                        <div class="lab-inner text-center">
                            <div class="lab-thumb">
                                <img src="assets/images/about/03.png" alt="img">
                            </div>
                            <div class="lab-content">
                                <h2 class="counter">{{$about->count3}}</h2>
                                <p>Hommes en ligne</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                    <div class="lab-item about-item">
                        <div class="lab-inner text-center">
                            <div class="lab-thumb">
                                <img src="assets/images/about/04.png" alt="img">
                            </div>
                            <div class="lab-content">
                                <h2 class="counter">{{$about->count4}}</h2>
                                <p>Femmes en ligne</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ About Section end Here =============== -->


<!-- ================ Work Section start Here =============== -->


<section class="work-section padding-tb">
    <div class="container">
        <div class="section-header">
            <h4 class="theme-color">{{$work->title1}}</h4>
            <h2>{{$work->title2}}</h2>
        </div>
        <div class="section-wrapper">
            <div class="row justify-content-center g-5">
                <div class="col-lg-4 col-sm-6 col-12 px-4">
                    <div class="lab-item work-item">
                        <div class="lab-inner text-center">
                            <div class="lab-thumb">
                                <div class="thumb-inner">
                                    <img src="{{asset($work->image1)}}" alt="work-img">
                                    <div class="step">
                                        <span>step</span>
                                        <p>01</p>
                                    </div>
                                </div>
                            </div>
                            <div class="lab-content">
                                <h4>{{$work->title3}}</h4>
                                <p>{{$work->descruption1}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 px-4">
                    <div class="lab-item work-item">
                        <div class="lab-inner text-center">
                            <div class="lab-thumb">
                                <div class="thumb-inner">
                                    <img src="{{asset($work->image2)}}" alt="work-img">
                                    <div class="step">
                                        <span>step</span>
                                        <p>02</p>
                                    </div>
                                </div>
                            </div>
                            <div class="lab-content">
                                <h4>{{$work->title4}}</h4>
                                <p>{{$work->descruption2}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 px-4">
                    <div class="lab-item work-item">
                        <div class="lab-inner text-center">
                            <div class="lab-thumb">
                                <div class="thumb-inner">
                                    <img src="{{asset($work->image3)}}" alt="work-img">
                                    <div class="step">
                                        <span>step</span>
                                        <p>03</p>
                                    </div>
                                </div>
                            </div>
                            <div class="lab-content">
                                <h4>{{$work->title5}}</h4>
                                <p>{{$work->descruption3}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ Work Section end Here =============== -->



<!-- ================ Success Story Section start Here =============== -->
<section class="story-section padding-tb bg-img">
    <div class=" container">
        <div class="section-header">
            <h4>L'amour dans la foi Histoires de réussite</h4>
            <h2>Douces histoires de nos amants</h2>
        </div>
        <div class="section-wrapper">
            <div class="row justify-content-center g-4">
                @foreach($blog as $row)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="story-item lab-item">
                        <div class="lab-inner">

                            <div class="lab-thumb">

                                <img style="height: 300px; width: 100%" src="{{asset($row->image)}}" alt="img">
                            </div>
                            <div class="lab-content">
                                <h4><a href="{{route('front.blogindex',['id'=> $row->id ])}}">{{substr($row->title,0,25)}}</a></h4>

                                <a href="{{route('front.blogindex',['id'=> $row->id ])}}"  class="lab-btn"><i class="icofont-circled-right"></i>
                                    Lire la suitee</a>
                            </div>

                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
            <div class="col-md-12 text-center mt-5">
                <a  href="{{route('front.allposts')}}"  class="lab-btn text-center"><i class="icofont-circled-right "></i>
                    Voir tous les articles</a>
            </div>

        </div>
        </div>
    </div>
</section>
<!-- ================ Success Story Section end Here =============== -->

@endsection
