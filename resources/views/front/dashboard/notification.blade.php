@extends('front.layouts.layout')
@section('styles')
    <!-- BASE CSS -->
    <link href="/wizard/css/style.css" rel="stylesheet">
    <link href="/wizard/css/vendors.css" rel="stylesheet">
    <style>
        #left_form {
            background-color: #df314d;
        }
        button.forward, button.submit {
            background:  #df314d;
        }
        .container_check input:checked ~ .checkmark {
            background-color: #df314d;
        }
        #location {
            color: black;
        }
        .ui-widget-header {
            background: #df314d;
        }
        hr {
            margin: 5px !important;
        }
        .main_question{
            text-align: left;
        }
        .container_check.version_2 {
            text-align: left !important;
        }
    </style>
@endsection
@section('content')
    <div class="banner-section page-header-section style-1 login-section padding-tb">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('front.dashboard.include.sidebar')
                </div>
                <div class="col-md-9">
                    <div class="section-wrapper">
                        <div class="row g-4" id="typerow">
                            <div class="col-md-12">
                                <h3 class="ptm" style="text-align: left">Notification</h3>

                                </div>
                            </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(".type").click(function (){
            $("#typerow").hide();
            $("#subtyperow").show();
        })
        $(".subitem").click(function (){
            $("#typerow").hide();
            $("#subtyperow").hide();
            $("#form").show();
            // var dataId = $(this).attr("data-type");
            // if(dataId == "sports"){
            //     $("#sports").show();
            // }else if(dataId == "sorties"){
            //     $("#sorties").show();
            // }else if(dataId == "games"){
            //     $("#games").show();
            // }else if(dataId == "divers"){
            //     $("#divers").show();
            // }
        })
    </script>
    <!-- COMMON SCRIPTS -->
    <script src="/wizard/js/common_scripts.min.js"></script>
    <script src="/wizard/js/common_functions.js"></script>

    <!-- Wizard script with branch -->
    <script src="/wizard/js/wizard_with_branch.js"></script>

@endsection
