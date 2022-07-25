@extends('front.layouts.layout')
@section('content')
    <div class="banner-section page-header-section style-1 login-section padding-tb">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('front.dashboard.include.sidebar')
                </div>
                <div class="col-md-9">
                        @foreach($authactivity as $activitie)
                            <div class="section-wrapper" style="margin-bottom: 10px">
                                <div class="row g-4">

                                        <div class="col-xl-12 col-12">
                                            <div class="group-item lab-item">
                                                <div class="lab-inner d-flex flex-wrap align-items-center p-4">
                                                    <div class="row" style="text-align: left">
                                                        <div class="col-md-3">
                                                            <div class="me-sm-4 mb-4 mb-sm-0">

                                                                @if($activitie->user->profile_picture != null)
                                                                    <img style="border-radius: 50%; height: 80px" src="{{asset($activitie->user->profile_picture)}}" alt="member-img">
                                                                @else
                                                                    <img style="border-radius: 50%; height: 80px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/User-avatar.svg/1024px-User-avatar.svg.png" alt="member-img">
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <h4>{{$activitie->title}}</h4>
                                                            <p> <i class="icofont-clock-time"></i> {{date('d-M-y', strtotime($activitie->date))}} - {{$activitie->time}} </p>
                                                            <p> <i class="icofont-location-pin"></i> {{$activitie->country}} </p>
                                                            <p> <i class="icofont-location-pin"></i> {{$activitie->city}} </p>
                                                            <p> <i class="icofont-users-alt-5"></i> 1 / {{$activitie->num}} </p>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <img style="border-radius: 10px" src="{{asset($activitie->image)}}" alt="img">
                                                        </div>
                                                    </div>
                                                    <div class="row"  style="text-align: left">
                                                        <div class="col-6 ">
                                                            <a href="{{route('activity.edit', ['id' => base64_encode($activitie->id)])}}" class="btn btn-success"style="width: 100%" >Éditer</a>
                                                        </div>
                                                        <div class="col-6">
                                                           <a href="{{route('activity.delete', ['id' => base64_encode($activitie->id)])}}" class="btn btn-danger"style="width: 100%" >Effacer</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
