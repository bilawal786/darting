@extends('front.layouts.layout')
@section('content')

    <div class="banner-section page-header-section style-1 login-section padding-tb">
        <div class=" container">


            <p  style="text-align: center; color: white; font-weight: bold; font-size: 30px; line-height: 50px">

                {{ $blog->title }}
            </p>
            <br>
            <img src="{{asset($blog->image)}}" alt="error">
            <br>
            <br>
            <p style="text-align: center; color: white; font-weight: bold; font-size: 30px; line-height: 50px">
                {!! $blog->description !!}
            </p>

        </div>
    </div>




@endsection
