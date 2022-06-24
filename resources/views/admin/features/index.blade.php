@extends('layouts.app')
@section('content')

    <div id="content" class="main-content">

        <div class="layout-px-spacing">

            <div class="middle-content container-xxl p-0">

                <!-- BREADCRUMB -->
                <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Setting</a></li>
                            <li class="breadcrumb-item"><a href="#">Features</a></li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->

                <div class="row mb-4 layout-spacing layout-top-spacing">

                    <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                        <div class="widget-content widget-content-area blog-create-section">

                            <div class="row mb-4">
                                <div class="col-sm-12 ">
                                    <label>Content</label>
                                    <input type="text" class="form-control"  id="post-title"  style="height:500px">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-sm-12">

                                    <input type="file" class="form-control" id="post-title" >
                                </div>
                            </div>


                        </div>

                        <div class="widget-content widget-content-area blog-create-section mt-4">



                            <div class="row mb-4">
                                <div class="col-xxl-12 mb-4">
                                    <label>Content</label>
                                    <input type="text" class="form-control" id="post-meta-title"  style="height:500px">
                                </div>

                            </div>
                            <div class="col-xxl-12 col-sm-4 col-12 mx-auto">
                                <button class="btn btn-success w-100">Create Feature</button>
                            </div>
                        </div>

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
@endsection
