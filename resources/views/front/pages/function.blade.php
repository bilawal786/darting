@extends('front.layouts.layout')
@section('content')
    <div class="banner-section page-header-section style-1 login-section padding-tb">
        <div class=" container">
            <p  style="text-align: center; color: white; font-weight: bold; font-size: 30px; line-height: 50px">
                {!! $feature->content1 !!}

            </p>
            <img src="{{asset($feature->image)}}" alt="error">
            <br>
            <br>
            <p style="text-align: center; color: white; font-weight: bold; font-size: 30px; line-height: 50px">
                {!! $feature->content2 !!}
            </p>
        </div>
    </div>
@endsection
