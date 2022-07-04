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
                                                        @foreach($sortie as $row)

                                                        <tbody>
                                                        <tr>
                                                                <td  ><img class="rounded-circle"   src="{{asset($row->image)}}" alt="avatar"  width="64" height="64"/>
                                                                </td>
                                                            <td class="td-content product-brand text-primary">{{$row->name}}</td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
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
                                                        @foreach($sports as $row)
                                                        <tbody>


                                                            <td  ><img class="rounded-circle"   src="{{asset($row->image)}}" alt="avatar"  width="64" height="64"/>
                                                            </td>
                                                            <td class="td-content product-brand text-primary">{{$row->name}}</td>

                                                            </tr>
                                                            @endforeach
                                                        </tbody>
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
                                                        @foreach($juex as $row)
                                                        <tbody>
                                                            <td> <img class="rounded-circle"   src="{{asset($row->image)}}" alt="avatar"  width="64" height="64"/></td>
                                                            <td class="td-content product-brand text-primary">{{$row->name}}</td>
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
                                                        @foreach($divers as $row)                                                        <tbody>
                                                            <td  ><img class="rounded-circle"   src="{{asset($row->image)}}" alt="avatar"  width="64" height="64"/>
                                                            </td>
                                                            <td class="td-content product-brand text-primary">{{$row->name}}</td>
                                                            @endforeach
                                                        </tbody>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="animated-underline-contact" role="tabpanel" aria-labelledby="animated-underline-contact-tab">
                                <div class="layout-px-spacing">

                                    <div class="middle-content container-xxl p-0">

                                        <div class="faq">

                                            <div class="faq-layouting layout-spacing">

                                                <div class="fq-tab-section">
                                                    <div class="row">
                                                        <div class="col-md-12">


                                                            <div class="row">

                                                                <div class="col-lg-6">

                                                                    <div class="accordion" id="simple_faq">
                                                                        <div class="card">
                                                                            <div class="card-header" id="fqheadingOne">
                                                                                <div class="mb-0 collapsed" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseOne" aria-expanded="false" aria-controls="fqcollapseOne">
                                                                                    <span class="faq-q-title">Commencer</span> <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                                                </div>
                                                                            </div>
                                                                            <div id="fqcollapseOne" class="collapse" aria-labelledby="fqheadingOne" data-bs-parent="#simple_faq">
                                                                                <div class="card-body">
                                                                                    <p>{{$user->question1}}</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="card">
                                                                            <div class="card-header" id="fqheadingTwo">
                                                                                <div class="mb-0 collapsed" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseTwo" aria-expanded="false" aria-controls="fqcollapseTwo">
                                                                                    <span class="faq-q-title">Comment puis-je décompresser les fichiers du produit</span> <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg></div>
                                                                                </div>
                                                                            </div>
                                                                            <div id="fqcollapseTwo" class="collapse" aria-labelledby="fqheadingTwo" data-bs-parent="#simple_faq" style="">
                                                                                <div class="card-body">
                                                                                    <p>{{$user->question2}}</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="card">
                                                                            <div class="card-header" id="fqheadingThree">
                                                                                <div class="mb-0 collapsed" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseThree" aria-expanded="false" aria-controls="fqcollapseThree">
                                                                                    <span class="faq-q-title">La barre latérale ne rend pas le CSS</span><div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                                                </div>
                                                                            </div>
                                                                            <div id="fqcollapseThree" class="collapse" aria-labelledby="fqheadingThree" data-bs-parent="#simple_faq">
                                                                                <div class="card-body">
                                                                                    <p>{{$user->question3}}</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="card">
                                                                            <div class="card-header" id="fqheadingFour">
                                                                                <div class="mb-0 collapsed" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseFour" aria-expanded="false" aria-controls="fqcollapseFour">
                                                                                    <span class="faq-q-title">Niveau de production construit</span><div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                                                </div>
                                                                            </div>
                                                                            <div id="fqcollapseFour" class="collapse" aria-labelledby="fqheadingFour" data-bs-parent="#simple_faq">
                                                                                <div class="card-body">
                                                                                    <p>{{$user->question3}}</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="card">
                                                                            <div class="card-header" id="fqheadingFive">
                                                                                <div class="mb-0 collapsed" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseFive" aria-expanded="false" aria-controls="fqcollapseFive">
                                                                                    <span class="faq-q-title">Problème de compilation</span><div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                                                </div>
                                                                            </div>
                                                                            <div id="fqcollapseFive" class="collapse" aria-labelledby="fqheadingFive" data-bs-parent="#simple_faq">
                                                                                <div class="card-body">
                                                                                    <p>{{$user->question4}}</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="card">
                                                                            <div class="card-header" id="fqheadingSix">
                                                                                <div class="mb-0 collapsed" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseSix" aria-expanded="false" aria-controls="fqcollapseSix">
                                                                                    <span class="faq-q-title">Premiers pas avec les kits de démarrage</span><div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                                                </div>
                                                                            </div>
                                                                            <div id="fqcollapseSix" class="collapse" aria-labelledby="fqheadingSix" data-bs-parent="#simple_faq">
                                                                                <div class="card-body">
                                                                                    <p>{{$user->question5}}</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">

                                                                    <div class="accordion" id="simple_faq1">
                                                                        <div class="card">
                                                                            <div class="card-header" id="fqheadingOne1">
                                                                                <div class="mb-0 collapsed" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseOne1" aria-expanded="false" aria-controls="fqcollapseOne1">
                                                                                    <span class="faq-q-title">Les images sont-elles fournies dans la version téléchargeable?</span> <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                                                </div>
                                                                            </div>
                                                                            <div id="fqcollapseOne1" class="collapse" aria-labelledby="fqheadingOne1" data-bs-parent="#simple_faq1">
                                                                                <div class="card-body">
                                                                                    <p>{{$user->question6}}</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="card">
                                                                            <div class="card-header" id="fqheadingTwo2">
                                                                                <div class="mb-0 collapsed" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseTwo2" aria-expanded="false" aria-controls="fqcollapseTwo2">
                                                                                    <span class="faq-q-title">Comment puis-je personnaliser les sections APPS?</span> <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg></div>
                                                                                </div>
                                                                            </div>
                                                                            <div id="fqcollapseTwo2" class="collapse" aria-labelledby="fqheadingTwo2" data-bs-parent="#simple_faq1">
                                                                                <div class="card-body">
                                                                                    <p>{{$user->question7}}</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="card">
                                                                            <div class="card-header" id="fqheadingThree3">
                                                                                <div class="mb-0 collapsed" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseThree3" aria-expanded="false" aria-controls="fqcollapseThree3">
                                                                                    <span class="faq-q-title">Premiers pas avec plusieurs mises en page</span><div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                                                </div>
                                                                            </div>
                                                                            <div id="fqcollapseThree3" class="collapse" aria-labelledby="fqheadingThree3" data-bs-parent="#simple_faq1">
                                                                                <div class="card-body">
                                                                                    <p>{{$user->question7}}</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="card">
                                                                            <div class="card-header" id="fqheadingFour4">
                                                                                <div class="mb-0 collapsed" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseFour4" aria-expanded="false" aria-controls="fqcollapseFour4">
                                                                                    <span class="faq-q-title">Comment utiliser les gestionnaires de tâches?</span><div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                                                </div>
                                                                            </div>
                                                                            <div id="fqcollapseFour4" class="collapse" aria-labelledby="fqheadingFour4" data-bs-parent="#simple_faq1">
                                                                                <div class="card-body">
                                                                                    <p>{{$user->question8}}</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="card">
                                                                            <div class="card-header" id="fqheadingFive5">
                                                                                <div class="mb-0 collapsed" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseFive5" aria-expanded="false" aria-controls="fqcollapseFive5">
                                                                                    <span class="faq-q-title">Comment configurer un vpn ?</span><div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                                                </div>
                                                                            </div>
                                                                            <div id="fqcollapseFive5" class="collapse" aria-labelledby="fqheadingFive5" data-bs-parent="#simple_faq1">
                                                                                <div class="card-body">
                                                                                    <p>{{$user->question9}}</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="card">
                                                                            <div class="card-header" id="fqheadingSix6">
                                                                                <div class="mb-0 collapsed" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseSix6" aria-expanded="false" aria-controls="fqcollapseSix6">
                                                                                    <span class="faq-q-title">Chrome vs Edge qui est mieux !</span><div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                                                </div>
                                                                            </div>
                                                                            <div id="fqcollapseSix6" class="collapse" aria-labelledby="fqheadingSix6" data-bs-parent="#simple_faq1" style="">
                                                                                <div class="card-body">
                                                                                    <p>{{$user->question10}}</p>
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

                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade " id="animated-underline-photos" role="tabpanel" aria-labelledby="animated-underline-photos-tab">
                                <h2>hi</h2>
                            </div>

                        </div>


                    </div>

                </div>

            </div>

        </div>



    </div>

@endsection
