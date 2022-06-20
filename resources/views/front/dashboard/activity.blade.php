@extends('front.layouts.layout')
@section('content')
    <style>
        h1, h2, h3, h4, h5, h6, p{
            text-align: left !important;
        }
    </style>
    <div class="banner-section page-header-section style-1 login-section">
        <section class="profile-section">
            <div class="container">
                <div class="section-wrapper">
                    <div class="member-profile">
                        <div class="profile-item">
                            <div class="profile-cover">
                                <img  style="height: 500px" src="https://www.betterteam.com/images/club-promoter-job-description-5946x3964-20201119.jpeg?crop=1:1,smart&width=1200&dpr=2" alt="cover-pic">
                                <div class="edit-photo custom-upload">
                                    <div class="file-btn"><i class="icofont-camera"></i>
                                        Edit Photo</div>
                                    <input type="file">
                                </div>
                            </div>
                            <div class="profile-information">
                                <div class="profile-pic">
                                    <img src="https://static-01.daraz.pk/p/487f6cc2880b61909f5d2959cdd0d3a0.jpg" alt="DP">
                                    <div class="custom-upload">
                                        <div class="file-btn">
                                        <span class="d-none d-lg-inline-block"> <i class="icofont-camera"></i>
                                            Edit</span>
                                            <span class="d-lg-none mr-0"><i class="icofont-plus"></i></span></div>
                                        <input type="file">
                                    </div>
                                </div>
                                <div class="profile-name">
                                    <h4>Apero Quai des Invalides</h4>
                                    <p>16 Juin 2022</p>
                                </div>
                                <ul class="profile-contact">
                                    <li>
                                        <a href="#">
                                            <div class="icon"><i class="icofont-location-pin"></i></div>
                                            <div class="text">
                                                <p>Paris</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="icon"><i class="icofont-clock-time"></i></div>
                                            <div class="text">
                                                <p>18H45</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="icon"><i class="icofont-user-alt-5"></i></div>
                                            <div class="text">
                                                <p>10 / 10</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="profile-details">
                            <nav class="profile-nav">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">

                                    <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                            aria-selected="false">Informations</button>
                                    <button class="nav-link" id="nav-friends-tab" data-bs-toggle="tab"
                                            data-bs-target="#friends" type="button" role="tab" aria-controls="friends"
                                            aria-selected="false">Discussion</button>
                                    <button class="nav-link" id="nav-groups-tab" data-bs-toggle="tab"
                                            data-bs-target="#groups" type="button" role="tab" aria-controls="groups"
                                            aria-selected="false">Participer</button>
                                    <button class="nav-link" id="nav-photos-tab" data-bs-toggle="tab"
                                            data-bs-target="#photos" type="button" role="tab" aria-controls="photos"
                                            aria-selected="false">Inviter</button>

                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">

                                <!-- Profile tab -->
                                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <article>
                                                    <div class="info-card mb-20">
                                                        <div class="info-card-title">
                                                            <h6>10 Participant(s) (4 En attente)</h6>
                                                        </div>
                                                        <div class="info-card-content">
                                                            <div class="lab-content w-100">
                                                                <ul class="img-stack d-flex">
                                                                    <li><img src="assets/images/group/group-mem/01.png" alt="member-img"></li>
                                                                    <li><img src="assets/images/group/group-mem/02.png" alt="member-img"></li>
                                                                    <li><img src="assets/images/group/group-mem/03.png" alt="member-img"></li>
                                                                    <li><img src="assets/images/group/group-mem/04.png" alt="member-img"></li>
                                                                    <li><img src="assets/images/group/group-mem/05.png" alt="member-img"></li>
                                                                    <li><img src="assets/images/group/group-mem/06.png" alt="member-img"></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="info-card mb-20">
                                                        <div class="info-card-title">
                                                            <h6>Description</h6>
                                                        </div>
                                                        <div class="info-card-content">
                                                            <p>Ca y est la saison des pique-nique est ouverte et il va faire chaud !!!!
                                                                C'est le bon moment pour profiter des beaux jours, des copains, et par la même, se faire de nouvelles connaissances. Ca sera l'occase de revoir les personnes que j'ai pu rencontré sur frimake avec qui ça a accroché et qui j'espère deviendrons, avec le temps et les sorties, de vrais potes. Et pour cela, quoi de mieux qu'un pique nique au bord de l'un des plus beau spot pique nique de paname...
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="info-card mb-20">
                                                        <div class="info-card-title">
                                                            <h6>En savoir plus
                                                            </h6>
                                                        </div>
                                                        <div class="info-card-content">
                                                            <ul class="info-list">
                                                                <li>
                                                                    <p class="info-name">Lieux & Coordonnées
                                                                    </p>
                                                                    <p class="info-details">Adresse réservée aux participants à :

                                                                        9088 km(s)</p>
                                                                </li>
                                                                <li>
                                                                    <p class="info-name">Coût (€)</p>
                                                                    <p class="info-details">Gratuit</p>
                                                                </li>
                                                                <li>
                                                                    <p class="info-name">Type d'activité
                                                                    </p>
                                                                    <p class="info-details">Brunch</p>
                                                                </li>
                                                                <li>
                                                                    <p class="info-name">Activité visible</p>
                                                                    <p class="info-details">Par tout le monde</p>
                                                                </li>
                                                                <li>
                                                                    <p class="info-name">Participants souhaités
                                                                    </p>
                                                                    <p class="info-details">Tout le monde
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p class="info-name">Age des participants (min-max)</p>
                                                                    <p class="info-details">25 - 50</p>
                                                                </li>
                                                                <li>
                                                                    <p class="info-name">Nbre de participants max</p>
                                                                    <p class="info-details">10</p>
                                                                </li>
                                                                <li>
                                                                    <p class="info-name">Validation des participants</p>
                                                                    <p class="info-details">Automatique</p>
                                                                </li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Frinds Tab -->
                                <div class="tab-pane fade" id="friends" role="tabpanel" aria-labelledby="nav-friends-tab">

                                </div>
                                <!-- Group Tab -->
                                <div class="tab-pane fade" id="groups" role="tabpanel" aria-labelledby="nav-groups-tab">

                                </div>
                                <!-- Photos Tab -->
                                <div class="tab-pane fade" id="photos" role="tabpanel" aria-labelledby="nav-photos-tab">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
