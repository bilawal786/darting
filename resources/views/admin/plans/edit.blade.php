@extends('layouts.app')
<style>
    .buttonHolder{ text-align: center; }
    .row {
        --bs-gutter-x: 1.5rem;
        --bs-gutter-y: 0;
        display: flex;
        flex-wrap: wrap;
        margin-top: calc(-1 * var(--bs-gutter-y));
        margin-right: calc(+.5 *var(--bs-gutter-x))!important;
        margin-left: calc(+.5 * var(--bs-gutter-x))!important;
    }
</style>
@section('content')
    <!--  BEGIN CONTENT AREA  -->

    <div id="content" class="main-content">

        <div class="layout-px-spacing">

            <div class="middle-content container-xxl p-0">

                <!-- BREADCRUMB -->
                <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Tableau de bord</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Des Plans</li>

                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->

                <div class="row mb-4 layout-spacing layout-top-spacing">



                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <form action="{{ route('admin.plans.update',['id'=>$plan->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 mt-xxl-0 mt-4">
                                    <div class="widget-content widget-content-area ecommerce-create-section">
                                        <div class="row">
                                            <div class="col-xxl-12 mb-4">
                                                <div class="switch form-switch-custom switch-inline form-switch-secondary">

                                                </div>
                                            </div>

                                            <div class="col-xxl-12 col-lg-12 col-md-12" >
                                                <label for="proCode">Nom</label>
                                                <input type="text"  placeholder="Nom" name="name" class="form-control" id="name" value="{{$plan->name}}">
                                            </div>
                                            <div class="col-xxl-12 col-lg-12 col-md-12" >
                                                <label for="Plan">Plan</label>
                                                <input type="text"  placeholder="Plan" name="plan" class="form-control" id="plan" value="{{$plan->plan}}">
                                            </div>
                                            <div class="col-xxl-12 col-lg-12 col-md-12">
                                                <label for="proCode">Description</label>
                                                <textarea rows="10" placeholder="Des Description" name="description" class="form-control" id="description">{{$plan->description}} </textarea>

                                            </div>

                                            <div class="col-xxl-12 col-md-12 mb-4 buttonHolder" style="margin-top: 20px; ">
                                                <input type="submit" style="width: 40%" name="time" class="mt-4 mb-4 btn btn-primary" value="Soumettre">

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </div>

        <!--  BEGIN FOOTER  -->
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © <span class="dynamic-year">2022</span> <a target="_blank" href="https://designreset.com/cork-admin/">DesignReset</a>, All rights reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
            </div>
        </div>
        <!--  END FOOTER  -->

    </div>
    <!--  END CONTENT AREA  -->
    </div>
@endsection
