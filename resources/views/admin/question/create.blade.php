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
                            <li class="breadcrumb-item"><a href="#">Des questions</a></li>
                            <li class="breadcrumb-item"><a href="#">Réponse</a></li>

                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->

                <div class="row mb-4 layout-spacing layout-top-spacing">



                    <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <form action="{{ route('admin.question.store') }}" method="POST" enctype="multipart/form-data">
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
                                            <label for="proCode">Des questions</label>
                                            <input type="text" placeholder="Des questions" name="q" class="form-control" id="q" value="">
                                        </div>
                                        <div class="col-xxl-12 col-md-6 mb-4" style="margin-top: 20px;">
                                            <label for="proCode">Réponse 1</label>
                                            <input type="text" placeholder="Réponse 1"  name="a1" class="form-control" id="a1" value="">
                                        </div>
                                        <div class="col-xxl-12 col-md-6 mb-4" style="margin-top: 20px;">
                                            <label for="proSKU">Réponse 2</label>
                                            <input type="text" placeholder="Réponse 2" name="a2" class="form-control" id="a2" value="">
                                        </div>
                                        <div class="col-xxl-12 col-md-6 mb-4" style="margin-top: 20px;">
                                            <label for="proSKU">Réponse 3</label>
                                            <input type="text" placeholder="Réponse 3" name="a3" class="form-control" id="a3" value="">
                                        </div>
                                        <div class="col-xxl-12 col-md-6 mb-4" style="margin-top: 20px;">
                                            <label for="proSKU">Réponse 4</label>
                                            <input type="text" placeholder="Réponse 4" name="a4" class="form-control" id="a4" value="">
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
