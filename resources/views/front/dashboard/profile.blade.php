@extends('front.layouts.layout')
@section('content')
    <style>
        h1, h2, h3, h4, h5, h6, p{
            text-align: left !important;
        }
    </style>
    <div class="banner-section page-header-section style-1 login-section">
    <section class="profile-section">
        <div class="container">
            <div class="section-wrapper">
                <div class="member-profile">
                    <div class="profile-item">
                        <div class="profile-cover">
                            <img src="{{asset('assets/images/profile/cover.jpg')}}" alt="cover-pic">
                            <div class="edit-photo custom-upload">

                            </div>
                        </div>
                        <div class="profile-information">
                            <div class="profile-pic">
                                @if($user->profile_picture != null)
                                    <img   src="{{asset($user->profile_picture)}}" alt="member-img">
                                @else
                                    <img  src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/User-avatar.svg/1024px-User-avatar.svg.png" alt="member-img">
                                @endif
                                <div class="custom-upload">
                                    <div class="file-btn">
                                        <span class="d-lg-none mr-0"><i class="icofont-plus"></i></span></div>
                                    <input type="file">
                                </div>
                            </div>
                            <div class="profile-name">
                                <h4>{{$user->fname. ' ' . $user->lname}}</h4>
                                <p>VIP <i class="icofont-badge"></i></p>
                            </div>
                            <ul class="profile-contact">
                                <li>
                                    <a href="#">
                                        <div class="icon"><i class="icofont-user"></i></div>
                                        <div class="text">
                                            <p>Presense 100%</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="icon"><i class="icofont-star"></i></div>
                                        <div class="text">
                                            <p>Avis <i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i></p>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="profile-details">
                        <nav class="profile-nav">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">Information</button>
                                <button class="nav-link" id="nav-friends-tab" data-bs-toggle="tab"
                                        data-bs-target="#friends" type="button" role="tab" aria-controls="friends"
                                        aria-selected="false">Activities <span class="item-number">{{$user->activities->count()}}</span></button>
                                <button class="nav-link" id="nav-groups-tab" data-bs-toggle="tab"
                                        data-bs-target="#groups" type="button" role="tab" aria-controls="groups"
                                        aria-selected="false">Photos</button>
                                <button class="nav-link" id="nav-photos-tab" data-bs-toggle="tab"
                                        data-bs-target="#photos" type="button" role="tab" aria-controls="photos"
                                        aria-selected="false">Loisirs</button>

                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">

                            <!-- Profile tab -->
                            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div>
                                    <div class="row">
                                        <div class="col-xl-8">
                                            <article>
                                                <div class="info-card mb-20">
                                                    <div class="info-card-title">
                                                        <h6>Description</h6>
                                                    </div>
                                                    <div class="info-card-content">
                                                        <p>
                                                            {{$user->about}}
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
                                                            <h5>Contact</h5>
                                                        </div>
                                                        <div class="widget-content">
                                                            <p>Rencontres sérieuses avec TuruLav votre parfait
                                                                Le match n'est qu'à un clic. Rencontres sérieuses avec TuruLav votre parfait
                                                                Le match n'est qu'à un clic.</p>
                                                            <form action="#" class="banner-form">
                                                                <button class="">Envoyer le message</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </aside>
                                        </div>
                                    </div>
                                </div>
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
                                                                    <div class="lab-inner d-flex flex-wrap align-items-center p-4">
                                                                        <div class="row" style="text-align: left">
                                                                            <div class="col-md-3">
                                                                                <div class="me-sm-4 mb-4 mb-sm-0">
                                                                                    <img style="border-radius: 10px" src="{{asset($activitie->image)}}" alt="img">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-7">
                                                                                <h4>{{$activitie->title}}</h4>
                                                                                <p> <i class="icofont-clock-time"></i> {{$activitie->date}} - {{$activitie->time}} </p>
                                                                                <p> <i class="icofont-location-pin"></i> {{$activitie->country}} </p>
                                                                                <p> <i class="icofont-location-pin"></i> {{$activitie->city}} </p>
                                                                                <p> <i class="icofont-users-alt-5"></i> 1 / {{$activitie->num}} </p>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                @if($activitie->user->profile_picture != null)
                                                                                    <img style="border-radius: 50%; height: 80px" src="{{asset($activitie->user->profile_picture)}}" alt="member-img">
                                                                                @else
                                                                                    <img style="border-radius: 50%; height: 80px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/User-avatar.svg/1024px-User-avatar.svg.png" alt="member-img">
                                                                                @endif
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
                                <div
                                    class="row g-3 g-lg-4 row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-6">
                                    @if($user->picture1)
                                    <div class="col">
                                        <div class="gallery-img">
                                            <img src="{{asset($user->picture1)}}" alt="image" class="rounded">
                                        </div>
                                    </div>
                                    @endif
                                        @if($user->picture2)
                                    <div class="col">
                                        <div class="gallery-img">
                                            <img src="{{asset($user->picture2)}}" alt="image" class="rounded">
                                        </div>
                                    </div>
                                        @endif
                                        @if($user->picture3)
                                    <div class="col">
                                        <div class="gallery-img">
                                            <img src="{{asset($user->picture3)}}" alt="image" class="rounded">
                                        </div>
                                    </div>
                                        @endif
                                        @if($user->picture4)
                                    <div class="col">
                                        <div class="gallery-img">
                                            <img src="{{asset($user->picture4)}}" alt="image" class="rounded">
                                        </div>
                                    </div>
                                        @endif
                                        @if($user->picture5)
                                    <div class="col">
                                        <div class="gallery-img">
                                            <img src="{{asset($user->picture5)}}" alt="image" class="rounded">
                                        </div>
                                    </div>
                                        @endif
                                </div>
                            </div>
                            <!-- Photos Tab -->
                            <div class="tab-pane activity-page fade active" id="photos" role="tabpanel">
                                <div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <article>
                                                <div class="activity-tab">
                                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link active" id="pills-personal-tab" data-bs-toggle="pill" data-bs-target="#pills-personal" type="button" role="tab" aria-controls="pills-personal" aria-selected="false"><i class="icofont-user"></i>
                                                                Sports</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link " id="pills-mentions-tab" data-bs-toggle="pill" data-bs-target="#pills-mentions" type="button" role="tab" aria-controls="pills-mentions" aria-selected="true"><i class="icofont-edit"></i>
                                                                Sorties</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="pills-favorites-tab" data-bs-toggle="pill" data-bs-target="#pills-favorites" type="button" role="tab" aria-controls="pills-favorites" aria-selected="false"><i class="icofont-heart-alt"></i>
                                                                Games</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="pills-friends-tab" data-bs-toggle="pill" data-bs-target="#pills-friends" type="button" role="tab" aria-controls="pills-friends" aria-selected="false"><i class="icofont-favourite"></i>
                                                                Divers</button>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content activity-content" id="pills-tabContent">
                                                        <div class="tab-pane fade show active" id="pills-personal" role="tabpanel" aria-labelledby="pills-personal-tab">
                                                            <h3>Sports</h3>
                                                            <div class="row">
                                                                @foreach(json_decode($user->sport) as $sport)
                                                                    <?php $sportData = \App\Sport::find($sport);?>
                                                                    <div class="col-md-6">
                                                                        <div class="row" style="background-color: #200152; border-radius: 10px;  display: flex;  margin: auto;  align-items:center; justify-content:center; padding: 20px; margin-bottom: 10px">
                                                                            <div class="col-3">
                                                                                <img style="height: 100px; border-radius: 50%" src="{{asset($sportData->image)}}" alt="">
                                                                            </div>
                                                                            <div class="col-9">
                                                                                <h5>{{$sportData->name}}</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="pills-mentions" role="tabpanel" aria-labelledby="pills-mentions-tab">
                                                            <h3>Sorties</h3>
                                                            <div class="row">
                                                                @foreach(json_decode($user->sortie) as $sortie)
                                                                    <?php $sortieData = \App\Sorties::find($sortie);?>
                                                                    <div class="col-md-6">
                                                                        <div class="row" style="background-color: #200152; border-radius: 10px;  display: flex;  margin: auto;  align-items:center; justify-content:center; padding: 20px; margin-bottom: 10px">
                                                                            <div class="col-3">
                                                                                <img style="height: 100px; border-radius: 50%" src="{{asset($sortieData->image)}}" alt="">
                                                                            </div>
                                                                            <div class="col-9">
                                                                                <h5>{{$sortieData->name}}</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="pills-favorites" role="tabpanel" aria-labelledby="pills-favorites-tab">
                                                            <h3>Games</h3>
                                                            <div class="row">
                                                                @foreach(json_decode($user->sortie) as $game)
                                                                    <?php $gameData = \App\Jeux::find($game);?>
                                                                    <div class="col-md-6">
                                                                        <div class="row" style="background-color: #200152; border-radius: 10px;  display: flex;  margin: auto;  align-items:center; justify-content:center; padding: 20px; margin-bottom: 10px">
                                                                            <div class="col-3">
                                                                                <img style="height: 100px; border-radius: 50%" src="{{asset($gameData->image)}}" alt="">
                                                                            </div>
                                                                            <div class="col-9">
                                                                                <h5>{{$gameData->name}}</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="pills-friends" role="tabpanel" aria-labelledby="pills-friends-tab">
                                                            <h3>Divers</h3>
                                                            <div class="row">
                                                                @foreach(json_decode($user->divers) as $divers)
                                                                    <?php $diversData = \App\Divers::find($divers);?>
                                                                    <div class="col-md-6">
                                                                        <div class="row" style="background-color: #200152; border-radius: 10px;  display: flex;  margin: auto;  align-items:center; justify-content:center; padding: 20px; margin-bottom: 10px">
                                                                            <div class="col-3">
                                                                                <img style="height: 100px; border-radius: 50%" src="{{asset($diversData->image)}}" alt="">
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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>

@endsection
