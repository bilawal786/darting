@extends('layouts.app')
@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="middle-content container-xxl p-0">
                <div class="account-settings-container layout-top-spacing">
                    <div class="account-content">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="animated-underline-content">
                                    <ul class="nav nav-tabs" id="animateLine" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="animated-underline-home-tab" data-bs-toggle="tab" href="#animated-underline-home" role="tab" aria-controls="animated-underline-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Profil</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="animated-underline-preferences-tab" data-bs-toggle="tab" href="#animated-underline-preferences" role="tab" aria-controls="animated-underline-preferences" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> loisirs</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="animated-underline-profile-tab" data-bs-toggle="tab" href="#animated-underline-profile" role="tab" aria-controls="animated-underline-profile" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>Mode de paiement</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="animated-underline-contact-tab" data-bs-toggle="tab" href="#animated-underline-contact" role="tab" aria-controls="animated-underline-contact" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> Des questions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " id="animated-underline-photos-tab" data-bs-toggle="tab" href="#animated-underline-photos" role="tab" aria-controls="animated-underline-photos" aria-selected="true"> Photos</a>
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

                            <div class="tab-pane fade" id="animated-underline-profile" role="tabpanel" aria-labelledby="animated-underline-profile-tab">
                                <div class="row">

                                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">

                                            <div class="pro-plan layout-spacing">
                                                <div class="widget">

                                                    <div class="widget-heading">

                                                        <div class="task-info">
                                                            <div class="w-title">
                                                                <h5>Forfait Pro</h5>
                                                                <span>€25/month</span>
                                                            </div>
                                                        </div>

                                                        <div class="task-action">
                                                            <button class="btn btn-secondary">Renouveler maintenant</button>
                                                        </div>
                                                    </div>

                                                    <div class="widget-content">

                                                        <ul class="p-2 ps-3 mb-4">
                                                            <li class="mb-1"><strong>10 000 visiteurs mensuels</strong></li>
                                                            <li class="mb-1"><strong>Rapports illimités</strong></li>
                                                            <li class=""><strong>2 ans de stockage des données</strong></li>
                                                        </ul>

                                                        <div class="progress-data">
                                                            <div class="progress-info">
                                                                <div class="due-time">
                                                                    <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 5 Days Left</p>
                                                                </div>
                                                                <div class="progress-stats"><p class="text-info">$25 / month</p></div>
                                                            </div>

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

                            <div class="tab-pane fade" id="animated-underline-preferences" role="tabpanel" aria-labelledby="animated-underline-preferences-tab">
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
{{--                            Question tab--}}
                                <div class="tab-pane fade" id="animated-underline-contact" role="tabpanel" aria-labelledby="animated-underline-contact-tab">
                                    <div class="layout-px-spacing">

                                        <div class="middle-content container-xxl p-0">

                                            <div class="faq">

                                                <div class="faq-layouting layout-spacing">

                                                    <div class="fq-tab-section">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                    <div class="row" >
                                                                        @foreach($question as $row)
                                                                        <div class="col-lg-6" style="margin-top: 100px;">

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
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{--Photos tab--}}
                                <div class="tab-pane fade " id="animated-underline-photos" role="tabpanel" aria-labelledby="animated-underline-photos-tab">
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
                                </div>
                                {{--close photo tab--}}
                            </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
