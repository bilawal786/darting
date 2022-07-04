@extends('layouts.app')
@section('content')

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="middle-content container-xxl p-0">

                <div class="faq">

                    <div class="faq-layouting layout-spacing">

                        <div class="fq-tab-section">
                            <div class="row">
                                <div class="col-md-12">



                                    <div class="row" >

                                        <div class="col-lg-6" style="margin-top: 100px;">

                                            <div class="accordion" id="simple_faq">
                                                <div class="card">
                                                    <div class="card-header" id="fqheadingOne">
                                                        <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapse1" aria-expanded="false" aria-controls="fqcollapseOne">
                                                            <span class="faq-q-title">{{$question->q}}</span> <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                        </div>
                                                    </div>
                                                    <div id="fqcollapse1" class="collapse" aria-labelledby="fqheadingOne" data-bs-parent="#simple_faq">
                                                        <div class="card-body">
                                                            <p>{{$question->a1}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6" style="margin-top: 100px;">

                                            <div class="accordion" id="simple_faq">
                                                <div class="card">
                                                    <div class="card-header" id="fqheadingOne">
                                                        <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapse2" aria-expanded="false" aria-controls="fqcollapseOne">
                                                            <span class="faq-q-title">{{$question->q}}</span> <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                        </div>
                                                    </div>
                                                    <div id="fqcollapse2" class="collapse" aria-labelledby="fqheadingOne" data-bs-parent="#simple_faq">
                                                        <div class="card-body">
                                                            <p>{{$question->a2}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6" style="margin-top: 20px;">

                                            <div class="accordion" id="simple_faq">
                                                <div class="card">
                                                    <div class="card-header" id="fqheadingOne">
                                                        <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapse3" aria-expanded="false" aria-controls="fqcollapseOne">
                                                            <span class="faq-q-title">{{$question->q}}</span> <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                        </div>
                                                    </div>
                                                    <div id="fqcollapse3" class="collapse" aria-labelledby="fqheadingOne" data-bs-parent="#simple_faq">
                                                        <div class="card-body">
                                                            <p>{{$question->a3}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6" style="margin-top: 20px;">

                                            <div class="accordion" id="simple_faq">
                                                <div class="card">
                                                    <div class="card-header" id="fqheading4">
                                                        <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapse4" aria-expanded="false" aria-controls="fqcollapseOne">
                                                            <span class="faq-q-title">{{$question->q}}</span> <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                        </div>
                                                    </div>
                                                    <div id="fqcollapse4" class="collapse" aria-labelledby="fqcollapse4" data-bs-parent="#simple_faq">
                                                        <div class="card-body">
                                                            <p>{{$question->a4}}</p>
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

        <!--  BEGIN FOOTER  -->
        <div class="footer-wrapper mt-0">
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
@endsection
