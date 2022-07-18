@extends('front.layouts.layout')
@section('content')

    <!-- ================ Banner Section start Here =============== -->
    <section class="banner-section">
        <div class="container">
            <section class="member-section padding-tb">



                <div class="container">
                    <div class="section-header">
                        <h4 class="theme-color">Meet New People Today!</h4>
                        <h2>New Members in London</h2>
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
                                            <p>Active 1 Day</p>
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
                                            <p>Active 2 Day</p>
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
                                            <p>Active 5 Day</p>
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
                                            <p>Active 1 Day</p>
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
                                            <p>Active 1 Day</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="member-button-group d-flex flex-wrap justify-content-center">
                            <a href="signup.html" class="lab-btn"><i class="icofont-users"></i> <span>Join Us for
                            Free</span></a>
                            <a href="login.html" class="lab-btn"><i class="icofont-play-alt-1"></i> <span>Our tv
                            commercial</span></a>
                        </div>
                    </div>
                </div>

            </section>

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
