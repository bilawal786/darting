@extends('front.layouts.layout')
<style>
    .iframe{
        height: 800px;
        width: 100%;
        margin: auto;
        border: 0px
    }
    @media only screen and (max-width: 668px) {
        .iframe{
            height: 100vh;
            width: 100%;

        }
    }

</style>
@section('content')
    <div class="banner-section page-header-section style-1 login-section padding-tb">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="section-wrapper">
                        <iframe src="{{asset('/chatify')}}" class="iframe"  title="W3Schools Free Online Web Tutorials">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


