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
                                <img  style="height: 500px" src="{{asset($activity->image)}}" alt="cover-pic">
                            </div>
                            <div class="profile-information">
                                <div class="profile-pic">
                                    @if($activity->user->profile_picture != null)
                                        <img   src="{{asset($activity->user->profile_picture)}}" alt="member-img">
                                    @else
                                        <img  src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/User-avatar.svg/1024px-User-avatar.svg.png" alt="member-img">
                                    @endif
                                </div>
                                <div class="profile-name">
                                    <h4>{{$activity->title}}</h4>
                                    <p>{{$activity->date}}</p>
                                </div>
                                <ul class="profile-contact">
                                    <li>
                                        <a href="#">
                                            <div class="icon"><i class="icofont-location-pin"></i></div>
                                            <div class="text">
                                                <p>{{$activity->country}}</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="icon"><i class="icofont-clock-time"></i></div>
                                            <div class="text">
                                                <p>{{$activity->time}}</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="icon"><i class="icofont-user-alt-5"></i></div>
                                            <div class="text">
                                                <p>1 / {{$activity->num}}</p>
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
                                                                    <li><img src="{{asset('assets/images/group/group-mem/01.png')}}" alt="member-img"></li>
                                                                    <li><img src="{{asset('assets/images/group/group-mem/02.png')}}" alt="member-img"></li>
                                                                    <li><img src="{{asset('assets/images/group/group-mem/03.png')}}" alt="member-img"></li>
                                                                    <li><img src="{{asset('assets/images/group/group-mem/04.png')}}" alt="member-img"></li>
                                                                    <li><img src="{{asset('assets/images/group/group-mem/05.png')}}" alt="member-img"></li>
                                                                    <li><img src="{{asset('assets/images/group/group-mem/06.png')}}" alt="member-img"></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="info-card mb-20">
                                                        <div class="info-card-title">
                                                            <h6>Description</h6>
                                                        </div>
                                                        <div class="info-card-content">
                                                            <p>{{$activity->description}} </p>
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
                                                                    <p class="info-details">{{$activity->type}} </p>
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
                                                                    <p class="info-details">{{$activity->min_age}}  - {{$activity->max_age}} </p>
                                                                </li>
                                                                <li>
                                                                    <p class="info-name">Nbre de participants max</p>
                                                                    <p class="info-details">{{$activity->num}} </p>
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
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="info-card mb-20">
                                                <div class="info-card-title">
                                                    <h6>Inscrivez-vous en tant que participant à cette activité</h6>
                                                </div>
                                                <div class="info-card-content">
                                                    <div class="lab-content w-100">
                                                        <form action="">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                  <button style="width: 100%" class="btn btn-primary"> Participate</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
