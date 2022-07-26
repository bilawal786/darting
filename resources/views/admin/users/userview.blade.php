@extends('layouts.app')
@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="middle-content container-xxl p-0">
                <div class="account-settings-container layout-top-spacing">
                    <div class="account-content">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <h2>Détails de l'utilisateur</h2>

                                <div class="animated-underline-content">
                                    <ul class="nav nav-tabs" id="animateLine" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="animated-underline-home-tab" data-bs-toggle="tab" href="#animated-underline-home" role="tab" aria-controls="animated-underline-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Profile</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="animated-underline-preferences-tab" data-bs-toggle="tab" href="#animated-underline-preferences" role="tab" aria-controls="animated-underline-preferences" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> loisirs</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="animated-underline-profile-tab" data-bs-toggle="tab" href="#animated-underline-profile" role="tab" aria-controls="animated-underline-profile" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg> Détails de paiement</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="animated-underline-contact-tab" data-bs-toggle="tab" href="#animated-underline-contact" role="tab" aria-controls="animated-underline-contact" aria-selected="false">Des questions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="animated-underline-Photos-tab" data-bs-toggle="tab" href="#animated-underline-Photos" role="tab" aria-controls="animated-underline-Photos" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Photos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="animated-underline-activities-tab" data-bs-toggle="tab" href="#animated-underline-activities" role="tab" aria-controls="animated-underline-activities" aria-selected="false"> Activités</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="animateLineContent-4">
                            <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel" aria-labelledby="animated-underline-home-tab">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                        <form class="section general-info">
                                            <div class="info">
                                                <h6 class="">Informations générales</h6>
                                                <div class="row">
                                                    <div class="col-lg-11 mx-auto">
                                                        <div class="row">
                                                            <div class="col-xl-2 col-lg-12 col-md-4">
                                                                <div class="profile-image  mt-4 pe-md-4">

                                                                    <!-- // The classic file input element we'll enhance
                                                                    // to a file pond, we moved the configuration
                                                                    // properties to JavaScript -->


                                                                    <div class="img-uploader-content">
                                                                        <img class="rounded-circle"   src="{{asset('images/export pic.png')}}" alt="avatar"  width="64" height="64"/>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                                <div class="form">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="fullName">Prénom</label>
                                                                                <input type="text" class="form-control mb-3" id="fullName" placeholder="Full Name" value="{{$user->fname}}">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="Nom de famille">Nom de famille</label>
                                                                                <input type="text" class="form-control mb-3" id="profession" placeholder="Designer" value="{{$user->lname}}">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="country">Country</label>
                                                                                <input type="text" class="form-control mb-3" id="country"  value="{{$user->country}}">

                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="address">À propos de</label>
                                                                                <input type="text" class="form-control mb-3" id="address" placeholder="Address" value="{{$user->about}}" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="location">Date</label>
                                                                                <input type="text" class="form-control mb-3" id="location"  value="{{$user->date}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="phone">Téléphoner</label>
                                                                                <input type="text" class="form-control mb-3" id="phone" placeholder="Write your phone number here" value="{{$user->phone}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="email">E-mail</label>
                                                                                <input type="text" class="form-control mb-3" id="email" placeholder="Write your email here" value="{{$user->email}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="website1">Le genre</label>
                                                                                <input type="text" class="form-control mb-3" id="website1" value="{{$user->gender}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 mt-1">
                                                                            <div class="form-group text-end">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="animated-underline-preferences" role="tabpanel" aria-labelledby="animated-underline-preferences-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                                                <div class="widget widget-table-two">
                                                    <div class="widget-heading">
                                                        <h5 class="">Sorties</h5>
                                                    </div>
                                                    <div class="widget-content">
                                                        <div class="table-responsive"  style="height:500px">
                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                    <th><div class="th-content">Image</div></th>
                                                                    <th><div class="th-content">Nom</div></th>
                                                                </tr>
                                                                </thead>
                                                                @foreach(json_decode($user->sortie) as $sortie)
                                                                    <?php $sortieData = \App\Sport::find($sortie);?>
                                                                    <tbody>

                                                                    <td> <img class="rounded-circle"   src="{{asset($sortieData->image)}}" alt="avatar"  width="64" height="64"/></td>
                                                                    <td class="td-content product-brand text-primary">
                                                                        {{$sortieData->name}}
                                                                    </td>
                                                                    </tbody>
                                                                @endforeach
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                                                <div class="widget widget-table-two">

                                                    <div class="widget-heading">
                                                        <h5 class="">Sports</h5>
                                                    </div>
                                                    <div class="widget-content">
                                                        <div class="table-responsive" style="height:500px">
                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                    <th><div class="th-content">Image</div></th>
                                                                    <th><div class="th-content">Nom</div></th>
                                                                </tr>
                                                                </thead>
                                                                @foreach(json_decode($user->sport) as $sport)
                                                                    <?php $sportData = \App\Sport::find($sport);?>
                                                                    <tbody>

                                                                    <td> <img class="rounded-circle"   src="{{asset($sportData->image)}}" alt="avatar"  width="64" height="64"/></td>
                                                                    <td class="td-content product-brand text-primary">
                                                                        {{$sportData->name}}
                                                                    </td>
                                                                    </tbody>
                                                                @endforeach
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                                                <div class="widget widget-table-two">
                                                    <div class="widget-heading">
                                                        <h5 class="">Jeux</h5>
                                                    </div>
                                                    <div class="widget-content">
                                                        <div class="table-responsive"  style="height:500px">
                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                    <th><div class="th-content">Image</div></th>
                                                                    <th><div class="th-content">Nom</div></th>
                                                                </tr>
                                                                </thead>
                                                                @foreach(json_decode($user->game) as $game)
                                                                    <?php $gameData = \App\Jeux::find($game);?>
                                                                    <tbody>

                                                                    <td> <img class="rounded-circle"   src="{{asset($gameData->image)}}" alt="avatar"  width="64" height="64"/></td>
                                                                    <td class="td-content product-brand text-primary">
                                                                        {{$gameData->name}}
                                                                    </td>
                                                                    </tbody>
                                                                @endforeach
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                                                <div class="widget widget-table-two">
                                                    <div class="widget-heading">
                                                        <h5 class="">Divers</h5>
                                                    </div>
                                                    <div class="widget-content">
                                                        <div class="table-responsive " style="height:500px">
                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                    <th><div class="th-content">Image</div></th>
                                                                    <th><div class="th-content">Nom</div></th>
                                                                </tr>
                                                                </thead>
                                                                @foreach(json_decode($user->divers) as $divers)
                                                                    <?php $diversData = \App\Divers::find($divers);?>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td  ><img class="rounded-circle"   src="{{asset($diversData->image)}}" alt="avatar"  width="64" height="64"/>

                                                                        <td class="td-content product-brand text-primary">
                                                                            {{$diversData->name}}
                                                                        </td>
                                                                    @endforeach
                                                                    </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="animated-underline-profile" role="tabpanel" aria-labelledby="animated-underline-profile-tab">

                                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">

                                    <div class="pro-plan layout-spacing">
                                        <div class="widget">

                                            <div class="widget-heading">

                                                <div class="task-info">
                                                    <div class="w-title">
                                                        @if($plans==true) <h5>{{$plans->card_holder_name}}</h5>
                                                        <span>$25/month</span>
                                                    </div>
                                                </div>

                                                <div class="task-action">
                                                    <button class="btn btn-secondary">Renew Now</button>
                                                </div>
                                            </div>

                                            <div class="widget-content">

                                                <ul class="p-2 ps-3 mb-4">
                                                    {{$plan->description}}
                                                </ul>

                                                <div class="progress-data">
                                                    <div class="progress-info">
                                                        <div class="due-time">
                                                            <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 5 Days Left</p>
                                                        </div>
                                                        <div class="progress-stats"><p class="text-info">{{$plans->price}}€ / month</p></div>
                                                    </div>
                                                    @else
                                                        <h1> Subscription Expired</h1>

                                                    @endif
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 65%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                            <div class="tab-pane fade" id="animated-underline-contact" role="tabpanel" aria-labelledby="animated-underline-contact-tab">
                                <div class="row" >
                                    @foreach($question as $row)
                                        <div class="col-lg-6">
                                            <div class="accordion" id="simple_faq">
                                                <div class="card">
                                                    <div class="card-header" id="fqheadingOne">
                                                        <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapse1" aria-expanded="false" aria-controls="fqcollapseOne">
                                                            <span class="faq-q-title">{{$row->q}}</span> <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                        </div>
                                                    </div>
                                                    <div id="fqcollapse1" class="collapse" aria-labelledby="fqheadingOne" data-bs-parent="#simple_faq">
                                                        <div class="card-body">
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>



                        <div class="tab-pane fade" id="animated-underline-Photos" role="tabpanel" aria-labelledby="animated-underline-Photos-tab">
                            <div class="col-xl-12">
                                <div class="row">
                                    @foreach($user->photos as $photo)
                                        @if($photo)
                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                                                <a href="#" class="card style-2 mb-md-0 mb-4">
                                                    <img src="{{asset($photo->image)}}" class="card-img-top" alt="...">
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="animated-underline-activities" role="tabpanel" aria-labelledby="animated-underline-activities-tab">
                            <div class="row g-4">
                                <div class="col-xl-12 col-12">
                                    <div class="group-item lab-item">
                                        <div class="lab-inner d-flex flex-wrap align-items-center p-4">
                                            <div class="row" style="text-align: left">
                                                <div class="col-md-3">
                                                    <div class="me-sm-4 mb-4 mb-sm-0">
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <th><div class="th-content">User Image</div></th>
                                                                <th><div class="th-content">Nom</div></th>
                                                                <th><div class="th-content">Country</div></th>
                                                                <th><div class="th-content">City</div></th>
                                                                <th><div class="th-content">Activity No</div></th>
                                                                <th><div class="th-content">Activity Image</div></th>
                                                                <th><div class="th-content">Activity Date</div></th>
                                                                <th><div class="th-content">Activity Time</div></th>
                                                                <th><div class="th-content">Action</div></th>
                                                            </tr>
                                                            </thead>
                                                            @foreach($activiety as $activiety )
                                                                @if($activiety)

                                                                    <tbody>
                                                                    <td>
                                                                        @if($activiety->user->profile_picture != null)
                                                                            <img style="border-radius: 50%; height: 80px" src="{{asset($activiety->user->profile_picture)}}" alt="member-img">
                                                                        @else
                                                                            <img style="border-radius: 50%; height: 80px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/User-avatar.svg/1024px-User-avatar.svg.png" alt="member-img">
                                                                        @endif
                                                                    </td>
                                                                    <td><h4>{{$activiety->title}}</h4></td>
                                                                    <td><p> <i class="icofont-location-pin"></i> {{$activiety->country}} </p></td>
                                                                    <td> <p> <i class="icofont-location-pin"></i> {{$activiety->city}} </p></td>
                                                                    <td><p> <i class="icofont-users-alt-5"></i> 1 / {{$activiety->num}} </p></td>
                                                                    <td><img  style="border-radius: 50%; height:100px" src="{{asset($activiety->image)}}" alt="img"></td>
                                                                    <td>{{date('d-M-y', strtotime($activiety->date))}}</td>
                                                                    <td><p> <i class="icofont-clock-time"></i>  - {{$activiety->time}} </p></td>
                                                                    <td><a class="btn btn-danger" href="{{route('admin.users.userviewdelete',['id' => $activiety->id])}}">x</a></td>
                                                                    </tbody>
                                                                @endif
                                                            @endforeach
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>














{{--                            Question tab--}}
                            <div class="tab-pane fade " id="animated-underline-photos" role="tabpanel" aria-labelledby="animated-underline-photos-tab">

                            </div>
                            <div class="tab-pane fade" id="animated-underline-activities" role="tabpanel" aria-labelledby="animated-underline-activities-tab">
                                <div class="layout-px-spacing">
                                    <div class="middle-content container-xxl p-0">
                                        <div class="faq">
                                            <div class="faq-layouting layout-spacing">
                                                <div class="fq-tab-section">
                                                    <div class="section-wrapper" style="margin-bottom: 10px">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--Photos tab--}}
                            {{--close photo tab--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
