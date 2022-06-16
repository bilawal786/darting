@extends('front.layouts.layout')
@section('styles')
    <style>
        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #df314d;
            border-radius: 10px;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #df314d;
            border-radius: 10px;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border-top: none;
        }
    </style>
@endsection
@section('content')

    <div class="banner-section page-header-section style-1 login-section padding-tb">
        <div class=" container">

            <div class="row">
                <div class="col-md-12">

                    <div class="tab">
                        <div style="text-align: center !important;">
                        <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Profils</button>
                        <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
                        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
                        </div>
                    </div>

                    <div id="London" class="tabcontent">
                        <br>
                        <br>
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

                    <div id="Paris" class="tabcontent">
                        <h3>Paris</h3>
                        <p>Paris is the capital of France.</p>
                    </div>

                    <div id="Tokyo" class="tabcontent">
                        <h3>Tokyo</h3>
                        <p>Tokyo is the capital of Japan.</p>
                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection
@section('scripts')
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
@endsection
