@extends('front.layouts.layout')
@section('content')
    <div class="banner-section page-header-section style-1 login-section padding-tb">
        <div class=" container">
            <div class="section-header">
                <h4 class="theme-color">Meilleurs profils intéressants</h4>
                <h2>Il y a quelques meilleurs profils disponibles qui correspondent à vos intérêts</h2>
            </div>
            <div class="section-wrapper">
                <div class="row justify-content-center g-3 g-md-4">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                        <div class="lab-item member-item style-1">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{asset('assets/images/member/01.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="#">Andrea Guido</a> </h6>
                                    <p>Actif 1 jour</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                        <div class="lab-item member-item style-1">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{asset('assets/images/member/02.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="#">Gihan-Fernando</a></h6>
                                    <p>Actif 2 jour</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                        <div class="lab-item member-item style-1">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{asset('assets/images/member/03.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="#">Sweet Admin</a></h6>
                                    <p>Active 3 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                        <div class="lab-item member-item style-1">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{asset('assets/images/member/04.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="#">Gyan-Baffour</a></h6>
                                    <p>Actif 4 jour</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                        <div class="lab-item member-item style-1">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{asset('assets/images/member/05.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="#">Teszt Eleking</a></h6>
                                    <p>Actif 1 jour</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                        <div class="lab-item member-item style-1">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{asset('assets/images/member/06.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="#">Zeahra Guido</a>
                                    </h6>
                                    <p>Actif 1 jour</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
