@extends('front.layouts.layout')
@section('content')
<!-- ================ Banner Section start Here =============== -->

    <div style="padding-top: 200px" class="banner-section page-header-section login-section" >
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                   <a href="{{$slide->link1}}"> <img src="{{$slide->image1}}" class="d-block w-100" alt="..."></a>
                </div>
                <div class="carousel-item">
                    <a href="{{$slide->link2}}"> <img src="{{$slide->image2}}" class="d-block w-100" alt="..."></a>
                </div>
                <div class="carousel-item">
                    <a href="{{$slide->link3}}"> <img src="{{$slide->image3}}" class="d-block w-100" alt="..."></a>
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

<!-- ================ Banner Section end Here =============== -->


<!-- ================ Member Section Start Here =============== -->

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
        @php
        $setting=\App\Setting::find(1);
        @endphp
        <div class="section-header">
            <h4>{{$setting->blogh1}}</h4>
            <h2>{{$setting->blogh2}}</h2>
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
