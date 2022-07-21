@extends('front.layouts.layout')
@section('content')
    <div class="banner-section page-header-section style-1 login-section padding-tb">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('front.dashboard.include.sidebar')
                </div>
                <div class="col-md-9">
                    <div class="section-wrapper">
                        <div class="row g-3 g-md-4">
                            <div class="col-md-12">
                                <h3 style="text-align: left">Match parfait selon votre profil</h3>
                            </div>

                            @foreach($users as $user)
                                @if(in_array($user->id, $match,true))
                                @else
                                <div class="col-xl-3 col-lg-3 col-md-4 col-6" id="users{{$user->id}}">
                                            <a href="{{route('front.profile', ['id' => base64_encode($user->id)])}}">
                                                <div class="lab-item member-item style-1">
                                                    <div class="lab-inner">
                                                        <div class="lab-thumb">
                                                            @if($user->profile_picture != null)
                                                                <img   src="{{asset($user->profile_picture)}}" alt="member-img">
                                                            @else
                                                                <img  src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/User-avatar.svg/1024px-User-avatar.svg.png" alt="member-img">
                                                            @endif
                                                        </div>
                                                        <div class="lab-content">
                                                            <h6><a href="#">{{$user->fname. ' ' . $user->lname}}</a> </h6>
                                                            <p>{{$user->country}}</p>
                                                            <a class="btn btn-success" onclick="myFunction({{$user->id}},1)">Accept </a>
                                                            <a class="btn btn-primary" onclick="myFunction({{$user->id}},0)">Reject </a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script>

        function myFunction(id,status){

            $.ajax({
                method:"GET",
                url: "{{url('/usermatch')}}/"+id+"/"+status,
                async: false,
                success : function(response) {
                    if(response){
                        $('#users'+id).hide();
                    }

                },

            });

        }
    </script>
@endsection


