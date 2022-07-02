@extends('front.layouts.layout')
@section('content')

<!-- ================ Banner Section start Here =============== -->
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
                        <img src="{{asset('assets/images/01.png')}}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
            <h4>À propos de nos fléchettes</h4>
            <h2>Tout commence par un rendez-vous</h2>
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
                                <h2 class="counter">29,991</h2>
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
                                <h2 class="counter">29,960</h2>
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
                                <h2 class="counter">29,960</h2>
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
                                <h2 class="counter">28,960</h2>
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
            <h4 class="theme-color">Comment ça marche?</h4>
            <h2>Vous n'êtes qu'à 3 étapes d'un grand rendez-vous</h2>
        </div>
        <div class="section-wrapper">
            <div class="row justify-content-center g-5">
                <div class="col-lg-4 col-sm-6 col-12 px-4">
                    <div class="lab-item work-item">
                        <div class="lab-inner text-center">
                            <div class="lab-thumb">
                                <div class="thumb-inner">
                                    <img src="assets/images/work/01.png" alt="work-img">
                                    <div class="step">
                                        <span>step</span>
                                        <p>01</p>
                                    </div>
                                </div>
                            </div>
                            <div class="lab-content">
                                <h4>Créer un profil</h4>
                                <p>Continua actualize ailers through robu
                                    and sertively concepze standards compliant
                                    commerce after technica sound.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 px-4">
                    <div class="lab-item work-item">
                        <div class="lab-inner text-center">
                            <div class="lab-thumb">
                                <div class="thumb-inner">
                                    <img src="assets/images/work/02.png" alt="work-img">
                                    <div class="step">
                                        <span>step</span>
                                        <p>02</p>
                                    </div>
                                </div>
                            </div>
                            <div class="lab-content">
                                <h4>Trouver des correspondances</h4>
                                <p>Continua actualize ailers through robu
                                    and sertively concepze standards compliant
                                    commerce after technica sound.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 px-4">
                    <div class="lab-item work-item">
                        <div class="lab-inner text-center">
                            <div class="lab-thumb">
                                <div class="thumb-inner">
                                    <img src="assets/images/work/03.png" alt="work-img">
                                    <div class="step">
                                        <span>step</span>
                                        <p>03</p>
                                    </div>
                                </div>
                            </div>
                            <div class="lab-content">
                                <h4>Commencer à sortir ensemble</h4>
                                <p>Continua actualize ailers through robu
                                    and sertively concepze standards compliant
                                    commerce after technica sound.</p>
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
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="story-item lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/story/01.jpg" alt="img">
                            </div>
                            <div class="lab-content">
                                <h4><a href="blog-single.html">Image Post Formate</a></h4>
                                <p>Seamlesly evolve unique web-readiness with
                                    Collabors atively fabricate best of breed and
                                    apcations through </p>
                                <a href="blog-single.html" class="lab-btn"><i class="icofont-circled-right"></i>
                                    Lire la suitee</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="story-item lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/story/02.jpg" alt="img">
                            </div>
                            <div class="lab-content">
                                <h4><a href="blog-single.html">Couple Of Month</a></h4>
                                <p>Seamlesly evolve unique web-readiness with
                                    Collabors atively fabricate best of breed and
                                    apcations through </p>
                                <a href="blog-single.html" class="lab-btn"><i class="icofont-circled-right"></i>
                                    Lire la suite</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="story-item lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/story/03.jpg" alt="img">
                            </div>
                            <div class="lab-content">
                                <h4><a href="blog-single.html">Media For Blog Article</a></h4>
                                <p>Seamlesly evolve unique web-readiness with
                                    Collabors atively fabricate best of breed and
                                    apcations through </p>
                                <a href="blog-single.html" class="lab-btn"><i class="icofont-circled-right"></i>
                                    Lire la suite</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ Success Story Section end Here =============== -->

@endsection
