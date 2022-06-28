<!DOCTYPE html>
<html lang="en">
<?php
    $user = Auth::user();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- x-icon -->
    <link rel="shortcut icon" href="{{asset('logo.png')}}" type="image/x-icon">

    <!-- Other css -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

    @php
    $setting=\App\Setting::first();

    @endphp
    <title>{{$setting->name}}</title>

    @yield('styles')
    <style>
        .form-control[type=file] {
            overflow: hidden;
            color: white;
        }
        textarea {
            background-color: #221c53;
            color: white;
        }
        .align-items-end {
            align-items: flex-start !important;
        }

        .account-form .form-group input {
            color: white;
        }
        .banner-section .section-wrapper .banner-content .intro-form::after {
            background: url(../images/banner/shape-bottom.png);
        }
        .banner-section .section-wrapper .banner-content .intro-form::before {
            background: url(../images/banner/shape-top.png);
        }
        .footer-section .footer-bottom, .bg-color, .group-item .lab-inner, .story-item, .about-item .lab-inner {
            background-color: #5b398b;
            border-radius: 10px;
        }
        .form-control {
            border: 1px solid #ddd;
            height: auto;
            margin-top: 5px;
            margin-bottom: 5px;
        }
        @media only screen and (max-width: 600px) {
           .ptm{
               margin-top: 20px;
           }
        }
    </style>
</head>

<body>

<!-- ==========Header Section Starts Here========== -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="header-top-area">
                <ul class="left">
                    <li>
                        <i class="icofont-ui-call"></i> {{$setting->phone}}
                    </li>
                    <li>
                        <i class="icofont-location-pin"></i> {{$setting->address}}
                    </li>
                </ul>
                <ul class="social-icons d-flex align-items-center">
                    <li>
                        <p>
                            Trouvez-nous sur :
                        </p>
                    </li>
                    <li>
                        <a href="{{$setting->link1}}" class="fb"><i class="icofont-facebook-messenger"></i></a>
                    </li>
                    <li>
                        <a href="{{$setting->link2}}" class="twitter"><i class="icofont-twitter"></i></a>
                    </li>
                    <li>
                        <a href="{{$setting->link3}}" class="vimeo"><i class="icofont-vimeo"></i></a>
                    </li>
                    <li>
                        <a href="{{$setting->link4}}" class="skype"><i class="icofont-skype"></i></a>
                    </li>
                    <li>
                        <a href="{{$setting->link5}}" class="rss"><i class="icofont-rss-feed"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="{{route('front.index')}}">
                        <img style="height: 100px" src="{{asset($setting->logo)}}" alt="logo">
                    </a>
                </div>
                <div class="menu-area">
                    <ul class="menu">
                        <li>
                            <a href="{{route('front.index')}}">Acceuil</a>
                        </li>

                        <li>
                            <a href="{{route('front.function')}}">Fonctionnalités</a>
                        </li>
                        <li>
                            <a href="#">Communauté</a>
                        </li>
                        <li>
                            <a href="#0">Blog</a>
                        </li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    @auth
                        <a href="{{route('front.dashboard')}}" class="signup"><i class="icofont-user"></i>
                            <span>{{$user->fname. ' ' . $user->lname}}</span> </a>
                    @endauth
                    @guest
                    <a href="{{route('login')}}" class="login"><i class="icofont-user"></i> <span>CONNEXION</span> </a>
                    <a href="{{route('register')}}" class="signup"><i class="icofont-users"></i> <span>S'INSCRIRE</span>
                    </a>
                    @endguest
                    <!-- toggle icons -->
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="ellepsis-bar d-lg-none">
                        <i class="icofont-info-square"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ==========Header Section Ends Here========== -->


@yield('content')



<!-- ================ footer Section start Here =============== -->
<footer class="footer-section">
    <div class="footer-top">
        <div class="container">
            <div class="row g-3 justify-content-center g-lg-0">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="footer-top-item lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="{{asset('assets/images/footer/icons/01.png')}}" alt="Phone-icon">
                            </div>
                            <div class="lab-content">
                                <span>Numéro de téléphone : {{$setting->phone}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="footer-top-item lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="{{asset('assets/images/footer/icons/02.png')}}" alt="email-icon">
                            </div>
                            <div class="lab-content">
                                <span>Email : {{$setting->email}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="footer-top-item lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="{{asset('assets/images/footer/icons/03.png')}}" alt="location-icon">
                            </div>
                            <div class="lab-content">
                                <span>Adresse : {{$setting->address}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-middle padding-tb" style="background-image: url({{asset('assets/images/footer/bg.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-middle-item-wrapper">
                        <div class="footer-middle-item mb-lg-0">
                            <div class="fm-item-title">
                                <h4>À propos de darting</h4>
                            </div>
                            <div class="fm-item-content">
                                <p class="mb-4">Energistically coordinate highly efficient procesr
                                    partnerships befor revolutionar growth strategie
                                    improvement viaing awesome</p>
                                <img src="{{asset('assets/images/footer/about.jpg')}}" alt="about-image"
                                     class="footer-abt-img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-middle-item-wrapper">
                        <div class="footer-middle-item mb-lg-0">
                            <div class="fm-item-title">
                                <h4>nos dernières nouvelles</h4>
                            </div>
                            <div class="fm-item-content">
                                <div class="fm-item-widget lab-item">
                                    <div class="lab-inner">
                                        <div class="lab-thumb">
                                            <a href="#"> <img src="{{asset('assets/images/footer/01.jpg')}}"
                                                              alt="footer-widget-img"></a>
                                        </div>
                                        <div class="lab-content">
                                            <h6><a href="blog-single.html">Enable Seamin Matera Forin And Our
                                                    Orthonal Create Vortals.</a></h6>
                                            <p>July 23, 2021</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="fm-item-widget lab-item">
                                    <div class="lab-inner">
                                        <div class="lab-thumb">
                                            <a href="#"><img src="{{asset('assets/images/footer/02.jpg')}}"
                                                             alt="footer-widget-img"></a>
                                        </div>
                                        <div class="lab-content">
                                            <h6><a href="blog-single.html">Dynamca Network Otuitive Catays For
                                                    Plagiarize Mindshare After</a></h6>
                                            <p>July 23, 2021</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="fm-item-widget lab-item">
                                    <div class="lab-inner">
                                        <div class="lab-thumb">
                                            <a href="#"><img src="{{asset('assets/images/footer/03.jpg')}}"
                                                             alt="footer-widget-img"></a>
                                        </div>
                                        <div class="lab-content">
                                            <h6><a href="blog-single.html">Dynamca Network Otuitive Catays For
                                                    Plagiarize Mindshare After</a></h6>
                                            <p>July 23, 2021</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-middle-item-wrapper">
                        <div class="footer-middle-item-3 mb-lg-0">
                            <div class="fm-item-title">
                                <h4>Notre inscription à la newsletter</h4>
                            </div>
                            <div class="fm-item-content">
                                <p>By subscribing to our mailing list you will always
                                    be update with the latest news from us.</p>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Enter email">
                                    </div>
                                    <button type="submit" class="lab-btn">Envoyer un massage <i
                                            class="icofont-paper-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-bottom-content text-center">
                        <p>&copy; 2022 <a href="#">Darting</a> -Tous les droits sont réservés.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ================ footer Section end Here =============== -->


<!-- scrollToTop start here -->
<a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
<!-- scrollToTop ending here -->


<!-- All Scripts -->
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/swiper.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/functions.js')}}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    @if(Session::has('messege'))
    var type="{{Session::get('alert-type','info')}}"
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
    }
    @endif
</script>
@yield('scripts')

</body>

</html>
