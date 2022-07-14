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
    <link rel=”stylesheet” href=”{{asset('maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css')}}”>
    <link rel=”stylesheet” href=”{{asset('css/bootstrap-star-rating/star-rating.css')}}” media=”all” rel=”stylesheet” type=”text/css”/>
    <link rel="stylesheet" href="{{asset('path/to/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css')}}">


    @php
    $setting=\App\Setting::first();
    $blog = \App\Blog::orderBy('updated_at','desc')->limit(3)->get();

    @endphp
    <title>{{$setting->name}}</title>

    @yield('styles')
    <style>

        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {opacity: 0.7;}

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */
        .modal-content, #caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {-webkit-transform:scale(0)}
            to {-webkit-transform:scale(1)}
        }

        @keyframes zoom {
            from {transform:scale(0)}
            to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }
        /* rating stars*/
        .txt-center {
            text-align: center;
        }
        .hide {
            display: none;
        }

        .clear {
            float: none;
            clear: both;
        }

        .rating {
            width: 90px;
            unicode-bidi: bidi-override;
            direction: rtl;
            text-align: center;
            position: relative;
        }

        .rating > label {
            float: right;
            display: inline;
            padding: 0;
            margin: 0;
            position: relative;
            width: 1.1em;
            cursor: pointer;
            color: #000;
        }

        .rating > label:hover,
        .rating > label:hover ~ label,
        .rating > input.radio-btn:checked ~ label {
            color: transparent;
        }

        .rating > label:hover:before,
        .rating > label:hover ~ label:before,
        .rating > input.radio-btn:checked ~ label:before,
        .rating > input.radio-btn:checked ~ label:before {
            content: "\2605";
            position: absolute;
            left: 0;
            color: #FFD700;
        }

        .star-rating {
            line-height:32px;
            font-size:1.25em;
        }

        .star-rating .fa-star{color: yellow;}
        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
            .modal-content {
                width: 100%;
            }
        }
    </style>
    <style>
        header{
            padding: 0px;
        }
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
            background: url{{asset('images/banner/shape-bottom.png')}};
        }
        .banner-section .section-wrapper .banner-content .intro-form::before {
            background: url{{asset('images/banner/shape-top.png')}};
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
                            <a href="{{route('front.allposts')}}">Blog</a>
                        </li>
                        <li>
                            <a href="{{route('front.contact')}}">Contact</a>
                        </li>
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
                                <p class="mb-4">{{$setting->footercontent}}</p>

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
                                    @foreach($blog as $row)
                                    <div class="lab-inner">
                                        <div class="lab-thumb p-2" >
                                             <img src="{{asset($row->image)}}" alt="footer-widget-img">
                                        </div>
                                        <div class="lab-content">

                                            <h6><a href="blog-single.html">{{$row->title}}</a></h6>
                                            <p>{{$row->updated_at}}</p>
                                        </div>
                                    </div>
                                        @endforeach
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
<script src=”{{asset('ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js')}}”></script>
<script src=”{{asset('js/bootstrap-star-rating/star-rating.js” type=”text/javascript')}}”></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/swiper.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/functions.js')}}"></script>

<script type="text/javascript" src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js')}}"></script>
<script src="{{asset('src/plugins/src/glightbox/glightbox.min.js')}}"></script>
<script src="{{asset('src/plugins/src/splide/splide.min.js')}}"></script>
<script src="{{asset('src/assets/js/apps/ecommerce-details.')}}"></script>


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
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    // var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    // img.onclick = function(){
    //   modal.style.display = "block";
    //   modalImg.src = this.src;
    //   captionText.innerHTML = this.alt;
    // }


    document.addEventListener("click", (e) => {
        const elem = e.target;
        if (elem.id==="myImg") {
            modal.style.display = "block";
            modalImg.src = elem.dataset.biggerSrc || elem.src;
            captionText.innerHTML = elem.alt;
        }
    })

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
</script>
<script src="{{asset('js/addons/rating.js')}}">
    $(document).ready(function() {
        $('#rateMe4').mdbRate();
    });
</script>
@yield('scripts')

</body>

</html>
