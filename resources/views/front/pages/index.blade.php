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
                                <form action="/" class="banner-form">
                                    <div class="gender">
                                        <label for="gender" class="left">Je suis un </label>
                                        <div class="custom-select right">
                                            <select name="gender" id="gender" class="">
                                                <option value="0">Sélectionnez Genrer</option>
                                                <option value="1">Mâle</option>
                                                <option value="2">Femelle</option>
                                                <option value="3">Les autres</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="person">
                                        <label for="gender-two" class="left">À la recherche de</label>
                                        <div class="custom-select right">
                                            <select name="gender" id="gender-two" class="">
                                                <option value="0">Sélectionnez Genrer</option>
                                                <option value="1">Mâle</option>
                                                <option value="2">Femelle</option>
                                                <option value="3">Les autres</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="age">
                                        <label for="age" class="left">Âge</label>
                                        <div class="right d-flex justify-content-between">
                                            <div class="custom-select">
                                                <select name="age-start" id="age">
                                                    <option value="1">18</option>
                                                    <option value="2">19</option>
                                                    <option value="3">20</option>
                                                    <option value="4">21</option>
                                                    <option value="5">22</option>
                                                    <option value="6">23</option>
                                                    <option value="7">24</option>
                                                    <option value="8">25</option>
                                                    <option value="9">26</option>
                                                    <option value="10">27</option>
                                                    <option value="11">28</option>
                                                    <option value="13">29</option>
                                                    <option value="14">30</option>
                                                </select>
                                            </div>

                                            <div class="custom-select">
                                                <select name="age-end" id="age-two">
                                                    <option value="1">18+</option>
                                                    <option value="2">19</option>
                                                    <option value="3">20</option>
                                                    <option value="4">21</option>
                                                    <option value="5">22</option>
                                                    <option value="6">23</option>
                                                    <option value="7">24</option>
                                                    <option value="8">25</option>
                                                    <option value="9">26</option>
                                                    <option value="10">27</option>
                                                    <option value="11">28</option>
                                                    <option value="13">29</option>
                                                    <option value="14">30</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="city">
                                        <label for="city" class="left">Ville</label>
                                        <input class="right" type="text" id="city" placeholder="Le nom de ta ville..">
                                    </div>
                                    <button class="">Trouvez votre partenaire</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-thumb">
                        <img src="assets/images/01.png" alt="img">
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
            <h2>Nouveaux membres en Guadeloupe</h2>
        </div>
        <div class="section-wrapper">
            <div class="row justify-content-center g-3 g-md-4">
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <div class="lab-item member-item style-1">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/member/01.jpg" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="profile.html">Andrea Guido</a> </h6>
                                <p>Actif 1 jour</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <div class="lab-item member-item style-1">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/member/02.jpg" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="profile.html">Gihan-Fernando</a></h6>
                                <p>Actif 2 jour</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <div class="lab-item member-item style-1">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/member/03.jpg" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="profile.html">Sweet Admin</a></h6>
                                <p>Active 3 Day</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <div class="lab-item member-item style-1">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/member/04.jpg" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="profile.html">Gyan-Baffour</a></h6>
                                <p>Actif 4 jour</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <div class="lab-item member-item style-1">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/member/05.jpg" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="profile.html">Teszt Eleking</a></h6>
                                <p>Actif 1 jour</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <div class="lab-item member-item style-1">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/member/06.jpg" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="profile.html">Zeahra Guido</a>
                                </h6>
                                <p>Actif 1 jour</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="member-button-group d-flex flex-wrap justify-content-center">
                <a href="#" class="lab-btn"><i class="icofont-users"></i> <span>Rejoignez-nous pour
                            Libre</span></a>
                <a href="#" class="lab-btn"><i class="icofont-play-alt-1"></i> <span>Adhésion Premium</span></a>
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


<!-- ================ Top Member Section start Here =============== -->
<section class="top-member-section padding-tb">
    <div class="container">
        <div class="section-header">
            <h4 class="theme-color">Meilleurs membres</h4>
            <h2>Membres en ligne maintenant</h2>
        </div>
        <div class="section-wrapper">
            <ul class="button-group filters-button-group w-100 d-flex flex-wrap justify-content-center">
                <li class="button is-checked filter-btn" data-filter="*"><i class="icofont-heart-alt"></i> Afficher tout
                </li>
                <li class="button filter-btn" data-filter=".girl"><i class="icofont-girl"></i> nouvelle fille
                    membre</li>
                <li class="button filter-btn" data-filter=".boy"><i class="icofont-hotel-boy"></i> Nouveau
                    Membre garçon</li>
            </ul>

            <div class="grid-memberlist">
                <div class="grid-member filter-item girl">
                    <div class="lab-item member-item style-1 style-2">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/member/01.jpg" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="profile.html">Johanna</a> </h6>
                                <p>Active 1 Day</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-member filter-item girl">
                    <div class="lab-item member-item style-1 style-2">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/member/03.jpg" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="profile.html">Selinae</a> </h6>
                                <p>Active 1 Day</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-member filter-item boy">
                    <div class="lab-item member-item style-1 style-2">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/member/02.jpg" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="profile.html">Andrea Guido</a> </h6>
                                <p>Active 1 Day</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-member filter-item boy">
                    <div class="lab-item member-item style-1 style-2">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/member/04.jpg" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="profile.html">Rocky deo</a> </h6>
                                <p>Active 1 Day</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-member filter-item girl">
                    <div class="lab-item member-item style-1 style-2">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/member/05.jpg" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="profile.html">Jhon doe</a> </h6>
                                <p>Active 5 Day</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-member filter-item boy">
                    <div class="lab-item member-item style-1 style-2">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/member/06.jpg" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="profile.html">Angelina</a> </h6>
                                <p>Active 1 Day</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-member filter-item girl">
                    <div class="lab-item member-item style-1 style-2">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/member/07.jpg" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="profile.html">Andrea Guido</a> </h6>
                                <p>Active 1 Day</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-member filter-item boy">
                    <div class="lab-item member-item style-1 style-2">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/member/08.jpg" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="profile.html">Jene Aiko</a> </h6>
                                <p>Active 1 Day</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-member filter-item girl">
                    <div class="lab-item member-item style-1 style-2">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/member/09.jpg" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="profile.html">Anna haek</a> </h6>
                                <p>Active 1 Day</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-member filter-item boy">
                    <div class="lab-item member-item style-1 style-2">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/member/10.jpg" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="profile.html">Andrean Puido</a> </h6>
                                <p>Active 1 Day</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ Top Member Section end Here =============== -->


@endsection
