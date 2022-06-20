@extends('front.layouts.layout')
@section('content')
    <div class="banner-section page-header-section style-1 login-section padding-tb">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('front.dashboard.include.sidebar')
                </div>
                <div class="col-md-9">
                    <div class="section-wrapper">
                        <div class="row g-3 g-md-4">
                            <div class="col-md-12">
                                <h3 style="text-align: left">Match parfait selon votre profil</h3>
                            </div>

                                <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                                    <a href="{{route('front.profile')}}">
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
                                    </a>
                                </div>


                                <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                                    <a href="{{route('front.profile')}}">
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
                                    </a>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


