@extends('front.layouts.layout')
@section('styles')
    <!-- BASE CSS -->
    <link href="/wizard/css/style.css" rel="stylesheet">
    <link href="/wizard/css/vendors.css" rel="stylesheet">
    <style>
        .modal-content {
            margin: auto;
            display: block;
            width: 100% !important;
            max-width: 700px;
        }

        a {
            color: white !important;
        }

        #left_form {
            background-color: #df314d;
        }

        button.forward, button.submit {
            background: #df314d;
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

        .main_question {
            text-align: left;
        }

        .container_check.version_2 {
            text-align: left !important;
        }

        .icofont-star {
            color: white;
        }
    </style>
@endsection
@section('content')
    <style>
        h1, h2, h3, h4, h5, h6, p {
            text-align: left !important;
        }
    </style>
    <div class="banner-section page-header-section style-1 login-section">
        <section class="profile-section">
            <div class="container">
                <div class="section-wrapper">
                    <div class="member-profile">
                        <form id="autoFormSUbmit" method="POST" enctype="multipart/form-data"
                              action="{{route('profile.image')}}">
                            @csrf
                            <div class="profile-item">
                                <div class="profile-cover">
                                    @if($user->picture1 != null)
                                        <img src="{{asset($user->picture1)}}" alt="cover-pic">
                                    @else
                                        <img src="{{asset('assets/images/profile/cover.jpg')}}" alt="cover-pic">
                                    @endif
                                    <div class="edit-photo custom-upload">
                                        <div class="file-btn"><i class="icofont-camera"></i>
                                            Modifier l'image
                                        </div>
                                        <input id="coverImage" name="coverImage" type="file">
                                    </div>
                                </div>
                                <div class="profile-information">
                                    <div class="profile-pic">
                                        @if($user->profile_picture != null)
                                            <img src="{{asset($user->profile_picture)}}" alt="member-img">
                                        @else
                                            <img
                                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/User-avatar.svg/1024px-User-avatar.svg.png"
                                                alt="member-img">
                                        @endif
                                        <div class="custom-upload">
                                            <div class="file-btn">
                                        <span class="d-none d-lg-inline-block"> <i class="icofont-camera"></i>
                                            Modifier l'image</span>
                                                <span class="d-lg-none mr-0"><i class="icofont-plus"></i></span></div>
                                            <input id="profileImage" name="profileImage" type="file">
                                        </div>
                                    </div>
                                    <div class="profile-name">
                                        <h4>{{$user->fname . ' ' . $user->lname}}</h4>

                                       @if($user->subscripion==1)
                                        <p>De base <i style="color: white" class="icofont-badge"></i></p>
                                       @elseif($user->subscripion==2)
                                        <p>VIP <i style="color: white" class="icofont-badge"></i>
                                        @else
                                            <p>Pas d'abonnement  <i style="color: white" class="icofont-badge"></i></p>
                                        @endif
                                    </div>
                                    <ul class="profile-contact">
                                        <li>
                                            <a href="#">
                                                <div class="icon"><i style="color: white" class="icofont-user"></i>
                                                </div>
                                                <div class="text">
                                                    <p style="color: white">Presense 100%</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
{{--                                            <a href="#">--}}
{{--                                                <div class="icon"><i class="icofont-star"></i></div>--}}
{{--                                                <div class="text">--}}
{{--                                                    <p style="color: white">Avis <i class="icofont-star"></i><i--}}
{{--                                                            class="icofont-star"></i><i class="icofont-star"></i><i--}}
{{--                                                            class="icofont-star"></i><i class="icofont-star"></i></p>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </form>

                        <div class="profile-details">
                            <nav class="profile-nav">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                            aria-selected="false">Information
                                    </button>
                                    <button class="nav-link" id="nav-friends-tab" data-bs-toggle="tab"
                                            data-bs-target="#friends" type="button" role="tab" aria-controls="friends"
                                            aria-selected="false">Activities <span
                                            class="item-number">{{$user->activities->count()}}</span></button>
                                    <button class="nav-link" id="nav-groups-tab" data-bs-toggle="tab"
                                            data-bs-target="#groups" type="button" role="tab" aria-controls="groups"
                                            aria-selected="false">Photos
                                    </button>
                                    <button class="nav-link" id="nav-photos-tab" data-bs-toggle="tab"
                                            data-bs-target="#photos" type="button" role="tab" aria-controls="photos"
                                            aria-selected="false">Loisirs
                                    </button>
                                    <button class="nav-link" id="nav-quiz-tab" data-bs-toggle="tab"
                                            data-bs-target="#quiz" type="button" role="tab" aria-controls="quiz"
                                            aria-selected="false">Questionnaire
                                    </button>

                                </div>
                            </nav>

                            <div class="tab-content" id="nav-tabContent">

                                <!-- Profile tab -->
                                <div class="tab-pane fade show active" id="profile" role="tabpanel"
                                     aria-labelledby="nav-profile-tab">
                                    <div>
                                        <form action="{{route('user.update')}}" method="POST"
                                              enctype="multipart/form-data" class="banner-form">
                                            @csrf
                                            <div class="row">
                                                <div class="col-xl-8">
                                                    <article>
                                                        <div class="info-card mb-20">
                                                            <div class="info-card-title">
                                                                <h6>Description</h6>
                                                            </div>
                                                            <div class="info-card-content">
                                                                <p>
                                                                    <textarea name="description" style="width: 100%"
                                                                              id="" cols="40"
                                                                              rows="6">{{$user->about}}</textarea>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="info-card mb-20">
                                                            <div class="info-card-title">
                                                                <h6>En savoir plus
                                                                </h6>
                                                            </div>
                                                            <div class="info-card-content">
                                                                <ul class="info-list">
                                                                    <li>
                                                                        <p class="info-name">Pays</p>
                                                                        <p class="info-details">{{$user->country}}</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="info-name">Je suis
                                                                        </p>
                                                                        <p class="info-details">{{$user->gender}}</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="info-name">Téléphone</p>
                                                                        <p class="info-details">{{$user->phone}}</p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="info-name">Email</p>
                                                                        <p class="info-details">{{$user->email}}</p>
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>

                                                <!-- Aside Part -->
                                                <div class="col-xl-4">
                                                    <aside class="mt-5 mt-xl-0">
                                                        <div class="widget search-widget">
                                                            <div class="widget-inner">
                                                                <div class="widget-title">
                                                                    <h5>Mettre à jour le profil</h5>
                                                                </div>
                                                                <div class="widget-content">
                                                                    <div class="gender">
                                                                        <div class=" right w-100">
                                                                            <p style="text-align: left">Prénom</p>
                                                                            <input type="text" value="{{$user->fname}}"
                                                                                   name="fname" class="w-100"/>
                                                                        </div>
                                                                        <div class=" right w-100">
                                                                            <p style="text-align: left">Nom</p>
                                                                            <input type="text" value="{{$user->lname}}"
                                                                                   name="lname" class="w-100"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="age">
                                                                        <div
                                                                            class="right d-flex justify-content-between w-100">
                                                                            <div class=" right w-100">
                                                                                <p style="text-align: left">
                                                                                    Téléphone</p>
                                                                                <input type="number" name="phone"
                                                                                       value="{{$user->phone}}"
                                                                                       class="w-100"/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="age">
                                                                        <div
                                                                            class="right d-flex justify-content-between w-100">
                                                                            <div class=" right w-100">
                                                                                <p style="text-align: left">Ville</p>
                                                                                <input type="text" name="city"
                                                                                       value="{{$user->city}}"
                                                                                       class="w-100"/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="gender">
                                                                        <div class="custom-select right w-100">
                                                                            <p style="text-align:left">Je suis</p>
                                                                            <select name="gender" class="">
                                                                                <option value="Un Particulier">Un
                                                                                    Particulier
                                                                                </option>
                                                                                <option value="Une femme">Une femme
                                                                                </option>
                                                                                <option value="Un pro / Une asso">Un pro
                                                                                    / Une asso
                                                                                </option>
                                                                                <option value="Un homme">Un homme
                                                                                </option>

                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="city">
                                                                        <div class="custom-select right w-100">
                                                                            <select name="country" class="">
                                                                                <p style="text-align: left">Pays</p>
                                                                                <option value="Guadeloupe">Guadeloupe
                                                                                </option>
                                                                                <option value="Martinique">Martinique
                                                                                </option>
                                                                                <option value="Guyane">Guyane</option>
                                                                                <option value="Réunion">Réunion</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <input style="width: 100%" id="inputButtonc"
                                                                       type="submit" value="Mettre à jour le profil"
                                                                       class="btn btn-primary">
                                                            </div>
                                                        </div>
                                                </div>
                                                </aside>
                                            </div>
                                    </div>
                                    </form>
                                </div>
                                <!-- Frinds Tab -->
                                <div class="tab-pane fade" id="friends" role="tabpanel" aria-labelledby="nav-friends-tab">
                                    <div>
                                        <div class="row">
                                            <div class="col-xl-8">
                                                @foreach($user->activities as $activitie)
                                                    <div class="section-wrapper" style="margin-bottom: 10px">
                                                        <div class="row g-4">
                                                            <a href="{{route('front.activity', ['id' => base64_encode($activitie->id)])}}">
                                                                <div class="col-xl-12 col-12">
                                                                    <div class="group-item lab-item">
                                                                        <div
                                                                            class="lab-inner d-flex flex-wrap align-items-center p-4">
                                                                            <div class="row" style="text-align: left">
                                                                                <div class="col-md-3">
                                                                                    <div class="me-sm-4 mb-4 mb-sm-0">

                                                                                        @if($activitie->user->profile_picture != null)
                                                                                            <img
                                                                                                style="border-radius: 50%; height: 80px"
                                                                                                src="{{asset($activitie->user->profile_picture)}}"
                                                                                                alt="member-img">
                                                                                        @else
                                                                                            <img
                                                                                                style="border-radius: 50%; height: 80px"
                                                                                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/User-avatar.svg/1024px-User-avatar.svg.png"
                                                                                                alt="member-img">
                                                                                        @endif

                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <h4>{{$activitie->title}}</h4>
                                                                                    <p>
                                                                                        <i class="icofont-clock-time"></i> {{$activitie->date}}
                                                                                        - {{$activitie->time}} </p>
                                                                                    <p>
                                                                                        <i class="icofont-location-pin"></i> {{$activitie->country}}
                                                                                    </p>
                                                                                    <p>
                                                                                        <i class="icofont-location-pin"></i> {{$activitie->city}}
                                                                                    </p>
                                                                                    <p><i class="icofont-users-alt-5"></i> 1
                                                                                        / {{$activitie->num}} </p>
                                                                                </div>
                                                                                <div class="col-md-5">
                                                                                    <img style="border-radius: 10px"
                                                                                         src="{{asset($activitie->image)}}"
                                                                                         alt="img">
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Group Tab -->
                                <div class="tab-pane fade" id="groups" role="tabpanel" aria-labelledby="nav-groups-tab">
                                    <div class="photo-title text-center border-radius-2 bg-theme p-1 mb-4">
                                        <h3 class="mb-0">Pictures</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-8">
                                            <div class="row">
                                                @foreach($user->photos as $photo)
                                                    @if($photo)
                                                        <div class="post-item mb-20">
                                                            <!-- post-content -->
                                                            <div class="post-content">
                                                                <!-- post-author -->
                                                                <div class="post-author">
                                                                    <a style="float: right;color: red!important;"
                                                                       class="comment-reply-link"
                                                                       href="{{route('user.post.delete',['id'=>$photo->id])}}">
                                                                        / Effacer</a>
                                                                    <span class="reply">

                                                    <a rel="nofollow" data-toggle="modal"
                                                       data-target="#exampleModalCenter{{$photo->id}}"
                                                       style="float: right;color: red!important;"
                                                       class="comment-reply-link" href=""><i
                                                            class="icofont-reply-all"></i>
                                                        Éditer</a>
                                                                        <!-- Modal -->
    <div class="modal fade " id="exampleModalCenter{{$photo->id}}" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                  <form action="{{route('user.post.update',['id'=>$photo->id])}}" method="POST"
                        enctype="multipart/form-data">
                                                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: black">Posté</h5>

                </div>
                <div class="modal-body">

                    <div class="interest">
                        <div>
                            <p style="text-align: left;color: black;">Image <b style="color: red;font-size: 20px;">*</b></p>
                            <input class="form-control" type="file" name="image">
                        </div>
                        <div>
                            <p style="text-align: left; color: black">Description <b
                                    style="color: red;font-size: 20px;">*</b></p>
                            <textarea name="description" id="role" cols="30" class="form-control" rows="8"
                                      placeholder="Description" required>{{$photo->description}}</textarea>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">proche</button>
                    <button type="submit" class="btn btn-primary">Sauvegarder les modifications</button>
                </div>
                </form>
            </div>
        </div>
    </div>
                                                </span>
                                                                    {{--                                                                <div class="post-author-inner">--}}
                                                                    {{--                                                                    <div class="author-thumb">--}}
                                                                    {{--                                                                        @if($user->profile_picture)--}}
                                                                    {{--                                                                        <img src="{{asset($user->profile_picture)}}" alt="img">--}}
                                                                    {{--                                                                        @else--}}
                                                                    {{--                                                                            <img src="{{asset('assets/images/profile/dp.png')}}" alt="img">--}}
                                                                    {{--                                                                        @endif--}}
                                                                    {{--                                                                    </div>--}}
                                                                    {{--                                                                    <div class="author-details">--}}
                                                                    {{--                                                                        <h6><a href="#">{{$user->fname .' '. $user->lname}}</a></h6>--}}
                                                                    {{--                                                                        <ul class="post-status">--}}
                                                                    {{--                                                                            <li class="post-privacy"><i class="icofont-world"></i>--}}
                                                                    {{--                                                                                Publique</li>--}}
                                                                    {{--                                                                            <li class="post-time">--}}
                                                                    {{--                                                                                <?php--}}
                                                                    {{--                                                                                \Carbon\Carbon::setLocale('fr');--}}
                                                                    {{--                                                                                $date = \Carbon\Carbon::parse($photo->created_at);--}}
                                                                    {{--                                                                                ?>--}}
                                                                    {{--                                                                                 {{$date->diffForHumans()}}--}}
                                                                    {{--                                                                            </li>--}}
                                                                    {{--                                                                        </ul>--}}
                                                                    {{--                                                                    </div>--}}

                                                                    {{--                                                                </div>--}}
                                                                </div>


                                                                <!-- post-description -->
                                                                <div class="post-description" style="margin-top: 20px;">
                                                                    <p>{{$photo->description}}

                                                                    </p>
                                                                    <div class="post-desc-img">
                                                                        <div class="row g-3">
                                                                            <div class="col-md-6">
                                                                                @if($photo->image)
                                                                                    <img src="{{asset($photo->image)}}"
                                                                                         alt="img">
                                                                                @endif
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- post meta -->
                                                            <div class="post-meta">
                                                                @php $likeCount = \App\Like::where('post_id','=',$photo->id)->where('is_dislike','=',0)->count();@endphp
                                                                @php $comment = \App\Comments::where('post_id','=',$photo->id)->get(); @endphp
                                                                {{--                                                            <div class="post-meta-top">--}}
                                                                {{--                                                                <p><a href="#">--}}
                                                                {{--                                                                        <i class="icofont-like" style="color: red"></i> --}}
                                                                {{--                                                                       --}}
                                                                {{--                                                                        <span id="likecounter1{{$photo->id}}">{{$likeCount}} Comme ça</span>--}}
                                                                {{--                                                                        <span id="likecounter2{{$photo->id}}" style="display: none"></span>--}}
                                                                {{--                                                                    </a>--}}
                                                                {{--                                                                </p>--}}
                                                                {{--                                                               --}}

                                                                {{--                                                                <p>--}}
                                                                {{--                                                                    <a href="#">{{$comment->count()}} Commentaires</a>--}}
                                                                {{--                                                                </p>--}}
                                                                {{--                                                            </div>--}}
                                                                <div class="post-meta-bottom">
                                                                    <ul class="react-list">
                                                                        @php $like = \App\Like::where('user_id','=',$user->id)->where('post_id','=',$photo->id)->where('is_dislike','=',0)->first();@endphp
                                                                        <li class="react " id="addLike{{$photo->id}}">
                                                                            @if($like)
                                                                                <a onclick="unlike({{$photo->id}})"
                                                                                   id="unlike{{$photo->id}}">
                                                                                    <span>{{$likeCount}}</span>
                                                                                    <i class="icofont-like like"
                                                                                       style="color: red!important;"></i>
                                                                                    Like

                                                                                </a>
                                                                            @else
                                                                                <a class="userLike"
                                                                                   onclick="like({{$photo->id}})"
                                                                                   id="like{{$photo->id}}">
                                                                                    <span>{{$likeCount}} </span>
                                                                                    <i class="icofont-like like"></i>Like
                                                                                </a>
                                                                            @endif
                                                                        </li>
                                                                        <li class="react"><a
                                                                                href="{{route('user.sigle.post',['id'=>$photo->id])}}">
                                                                                {{$comment->count()}} <i
                                                                                    class="icofont-speech-comments"></i>
                                                                                Comment

                                                                            </a></li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <form action="{{route('user.image.post')}}" enctype="multipart/form-data"
                                                  method="POST">
                                                @csrf
                                                <aside class="mt-5 mt-xl-0">
                                                    <div class="widget search-widget">
                                                        <div class="widget-inner">
                                                            <div class="widget-title">
                                                                <h5>Télécharger une nouvelle photo</h5>
                                                            </div>
                                                            <div class="widget-content">
                                                                <div class="interest">
                                                                    <div>
                                                                        <p style="text-align: left">Image <b
                                                                                style="color: red;font-size: 20px;">*</b>
                                                                        </p>
                                                                        <input class="form-control" type="file" name="image"
                                                                               required>
                                                                    </div>
                                                                    <div>
                                                                        <p style="text-align: left">Description <b
                                                                                style="color: red;font-size: 20px;">*</b>
                                                                        </p>
                                                                        <textarea name="description" id="role" cols="30"
                                                                                  class="form-control" rows="8"
                                                                                  placeholder="Description"
                                                                                  required></textarea>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <input style="width: 100%" id="inputButtonc" type="submit"
                                                                       value="Poste" class="btn btn-primary">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <!-- Photos Tab -->
                                <div class="tab-pane activity-page fade" id="photos" role="tabpanel">
                                    <div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <article>
                                                    <div class="activity-tab">
                                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link active" id="pills-personal-tab"
                                                                        data-bs-toggle="pill"
                                                                        data-bs-target="#pills-personal" type="button"
                                                                        role="tab" aria-controls="pills-personal"
                                                                        aria-selected="false"><i class="icofont-user"></i>
                                                                    Sports
                                                                </button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link " id="pills-mentions-tab"
                                                                        data-bs-toggle="pill"
                                                                        data-bs-target="#pills-mentions" type="button"
                                                                        role="tab" aria-controls="pills-mentions"
                                                                        aria-selected="true"><i class="icofont-edit"></i>
                                                                    Sorties
                                                                </button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link" id="pills-favorites-tab"
                                                                        data-bs-toggle="pill"
                                                                        data-bs-target="#pills-favorites" type="button"
                                                                        role="tab" aria-controls="pills-favorites"
                                                                        aria-selected="false"><i
                                                                        class="icofont-heart-alt"></i>
                                                                    Games
                                                                </button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link" id="pills-friends-tab"
                                                                        data-bs-toggle="pill"
                                                                        data-bs-target="#pills-friends" type="button"
                                                                        role="tab" aria-controls="pills-friends"
                                                                        aria-selected="false"><i
                                                                        class="icofont-favourite"></i>
                                                                    Divers
                                                                </button>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content activity-content" id="pills-tabContent">
                                                            <div class="tab-pane fade show active" id="pills-personal"
                                                                 role="tabpanel" aria-labelledby="pills-personal-tab">
                                                                <h3>Sports</h3>
                                                                <div class="row">
                                                                    @foreach(json_decode($user->sport) as $sport)
                                                                        <?php $sportData = \App\Sport::find($sport);
                                                                        ?>
                                                                        <div class="col-md-6">
                                                                            <div class="row"
                                                                                 style="background-color: #200152; border-radius: 10px;  display: flex;  margin: auto;  align-items:center; justify-content:center; padding: 20px; margin-bottom: 10px">
                                                                                <div class="col-3">
                                                                                    <img
                                                                                        style="height: 100px; border-radius: 50%"
                                                                                        src="{{asset($sportData->image)}}"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="col-9">
                                                                                    <h5>{{$sportData->name}}</h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>

                                                            <div class="tab-pane fade" id="pills-mentions" role="tabpanel"
                                                                 aria-labelledby="pills-mentions-tab">
                                                                <h3>Sorties</h3>
                                                                <div class="row">
                                                                    @foreach(json_decode($user->sortie) as $sortie)
                                                                        <?php $sortieData = \App\Sorties::find($sortie);?>
                                                                        <div class="col-md-6">
                                                                            <div class="row"
                                                                                 style="background-color: #200152; border-radius: 10px;  display: flex;  margin: auto;  align-items:center; justify-content:center; padding: 20px; margin-bottom: 10px">
                                                                                <div class="col-3">
                                                                                    <img
                                                                                        style="height: 100px; border-radius: 50%"
                                                                                        src="{{asset($sortieData->image)}}"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="col-9">
                                                                                    <h5>{{$sortieData->name}}</h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="pills-favorites" role="tabpanel"
                                                                 aria-labelledby="pills-favorites-tab">
                                                                <h3>Games</h3>
                                                                <div class="row">
                                                                    @foreach(json_decode($user->game) as $game)
                                                                        <?php $gameData = \App\Jeux::find($game);?>
                                                                        <div class="col-md-6">
                                                                            <div class="row"
                                                                                 style="background-color: #200152; border-radius: 10px;  display: flex;  margin: auto;  align-items:center; justify-content:center; padding: 20px; margin-bottom: 10px">
                                                                                <div class="col-3">
                                                                                    <img
                                                                                        style="height: 100px; border-radius: 50%"
                                                                                        src="{{asset($gameData->image)}}"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="col-9">
                                                                                    <h5>{{$gameData->name}}</h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="pills-friends" role="tabpanel"
                                                                 aria-labelledby="pills-friends-tab">
                                                                <h3>Divers</h3>
                                                                <div class="row">
                                                                    @foreach(json_decode($user->divers) as $divers)
                                                                        <?php $diversData = \App\Divers::find($divers);?>
                                                                        <div class="col-md-6">
                                                                            <div class="row"
                                                                                 style="background-color: #200152; border-radius: 10px;  display: flex;  margin: auto;  align-items:center; justify-content:center; padding: 20px; margin-bottom: 10px">
                                                                                <div class="col-3">
                                                                                    <img
                                                                                        style="height: 100px; border-radius: 50%"
                                                                                        src="{{asset($diversData->image)}}"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="col-9">
                                                                                    <h5>{{$diversData->name}}</h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- quiz Tab -->
                                <div class="tab-pane activity-page fade" id="quiz" role="tabpanel">
                                    <div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div id="preloader">
                                                    <div data-loader="circle-side"></div>
                                                </div><!-- /Preload -->

                                                <div id="loader_form">
                                                    <div data-loader="circle-side-2"></div>
                                                </div><!-- /loader_form -->

                                                <div class="container">
                                                    <div id="form_container">
                                                        <div class="row no-gutters">
                                                            <div class="col-lg-4">
                                                                <div id="left_form">
                                                                    <figure><img src="{{asset('logo.png')}}" alt=""
                                                                                 width="100" height="100"></figure>
                                                                    <h2 style="text-align: center !important;">DARTING</h2>
                                                                    <p style="text-align: center !important;">TVos
                                                                        informations prendront 2 min. Commencez par nous
                                                                        dire qui êtes-vous
                                                                        ?</p>
                                                                    <a href="{{route('front.function')}}"
                                                                       class="btn_1 rounded yellow purchase"
                                                                       target="_parent">Lire la suite</a></div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div id="wizard_container">
                                                                    <div id="top-wizard">
                                                                        <div id="progressbar"></div>
                                                                        <span id="location"></span>
                                                                    </div>
                                                                    <!-- /top-wizard -->
                                                                    <form id="wrapped" action="{{route('user.update')}}"
                                                                          method="POST">
                                                                        @csrf
                                                                        <input id="website" name="website" type="text"
                                                                               value="">
                                                                        <!-- Leave for security protection, read docs for details -->
                                                                        <div id="middle-wizard">
                                                                            @foreach($question as $key => $row)
                                                                                <div class="step">
                                                                                    <h3 class="main_question"><i
                                                                                            class="arrow_right"></i>{{$key+1}}
                                                                                        / {{$row->q}}…”
                                                                                    </h3>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12">
                                                                                            <div class="form-group">
                                                                                                <label
                                                                                                    class="container_radio version_2">{{$row->a1}}
                                                                                                    <input type="radio"
                                                                                                           {{ $row->a1==$user->question1 ? "checked" : "" }} name="question{{$key+1}}"
                                                                                                           value="{{$row->a1}}"
                                                                                                           class="required">
                                                                                                    <span
                                                                                                        class="checkmark"></span>
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label
                                                                                                    class="container_radio version_2">{{$row->a2}}
                                                                                                    <input type="radio"
                                                                                                           {{ $row->a2==$user->question1 ? "checked" : "" }}  name="question{{$key+1}}"
                                                                                                           value="{{$row->a2}}"
                                                                                                           class="required">
                                                                                                    <span
                                                                                                        class="checkmark"></span>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-12">
                                                                                            <div class="form-group">
                                                                                                <label
                                                                                                    class="container_radio version_2">{{$row->a3}}
                                                                                                    <input type="radio"
                                                                                                           {{ $row->a3==$user->question1 ? "checked" : "" }} name="question{{$key+1}}"
                                                                                                           value="{{$row->a3}}"
                                                                                                           class="required">
                                                                                                    <span
                                                                                                        class="checkmark"></span>
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label
                                                                                                    class="container_radio version_2">{{$row->a4}}
                                                                                                    <input type="radio"
                                                                                                           {{ $row->a4==$user->question1 ? "checked" : "" }} name="question{{$key+1}}"
                                                                                                           value="{{$row->a4}}"
                                                                                                           class="required">
                                                                                                    <span
                                                                                                        class="checkmark"></span>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <hr>
                                                                                    <!-- /row -->
                                                                                </div>
                                                                            @endforeach


                                                                            <div class="submit step" id="end">
                                                                                <div class="summary">
                                                                                    <div class="wrapper">
                                                                                        <h3 style="color: black">Je
                                                                                            prendrais du temps pour la bonne
                                                                                            personne<br><span
                                                                                                id="name_field"></span></h3>
                                                                                    </div>
                                                                                    <div class="text-center">
                                                                                        <div class="form-group terms">
                                                                                            <label class="container_check">Je
                                                                                                certifie avoir au moins
                                                                                                l'âge de 16 ans révolus.
                                                                                                Je comprends qu'en me
                                                                                                connectant au service
                                                                                                Dating, j'accepte
                                                                                                de fait, et sans réserves,
                                                                                                les Conditions Générales
                                                                                                d'Utilisation, la
                                                                                                Politique de
                                                                                                confidentialité, la Charte
                                                                                                d'utilisation des cookies et
                                                                                                la
                                                                                                Charte de bonne conduite de
                                                                                                Dating consultables sur le
                                                                                                site
                                                                                                <input type="checkbox"
                                                                                                       name="terms"
                                                                                                       value="Yes"
                                                                                                       class="required">
                                                                                                <span
                                                                                                    class="checkmark"></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- /step last-->

                                                                        </div>
                                                                        <!-- /middle-wizard -->
                                                                        <div id="bottom-wizard">
                                                                            <button type="button" name="backward"
                                                                                    class="backward">Précédent
                                                                            </button>
                                                                            <button type="button" name="forward"
                                                                                    class="forward">Suivant
                                                                            </button>
                                                                            <button type="submit" name="process"
                                                                                    class="submit">Soumettre
                                                                            </button>
                                                                        </div>
                                                                        <!-- /bottom-wizard -->
                                                                    </form>
                                                                </div>
                                                                <!-- /Wizard container -->
                                                            </div>
                                                        </div><!-- /Row -->
                                                    </div><!-- /Form_container -->
                                                </div>

                                                <div class="cd-overlay-nav">
                                                    <span></span>
                                                </div>
                                                <!-- /cd-overlay-nav -->
                                                <div class="cd-overlay-content">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
@section('scripts')
    <!-- COMMON SCRIPTS -->
    <script src="/wizard/js/common_scripts.min.js"></script>
    <script src="/wizard/js/common_functions.js"></script>

    <!-- Wizard script with branch -->
    <script src="/wizard/js/wizard_with_branch.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script>

        function like(id) {

            $.ajax({
                method: "GET",
                url: "{{url('/userlike')}}/" + id,
                async: false,
                success: function (response) {
                    if (response) {
                        $('#like' + id).hide();
                        $('#addLike' + id).append('<a   id="unlike"><span>' + response.success + '</span><i class="icofont-like like"  style="color: red!important;" ></i>Like</a> ');
                        $('#likecounter1' + id).hide();
                        $('#likecounter2' + id).html(response.success + 'Comme ça');
                        $('#likecounter2' + id).show();
                    }

                },

            });

        }

        function unlike(id) {
            $.ajax({
                method: "GET",
                url: "{{url('/userunlike')}}/" + id,
                async: false,
                success: function (response) {
                    if (response) {
                        $('#unlike' + id).hide();
                        $('#addLike' + id).append('<a class="userLike"   id="like" ><span>' + response.success + '</span><i  class="icofont-like like"></i>Like</a>');
                        $('#likecounter1' + id).hide();
                        $('#likecounter2' + id).html(response.success + 'Comme ça');
                        $('#likecounter2' + id).show();
                    }

                },

            });

        }
    </script>
    <script>
        document.getElementById("profileImage").onchange = function () {
            document.getElementById("autoFormSUbmit").submit();
        };
        document.getElementById("coverImage").onchange = function () {
            document.getElementById("autoFormSUbmit").submit();
        };
    </script>
@endsection
