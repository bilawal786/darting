@extends('layouts.app')
@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="middle-content container-xxl p-0">

                <!-- BREADCRUMB -->
                <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Glissière</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Créer</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->

                <div class="row layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-8" style="padding: 20px">
                            <form action="{{route('admin.slide.update')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-4 layout-spacing layout-top-spacing w-100">

                                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                                        <div class="widget-content widget-content-area blog-create-section">

                                            <div class="row mb-4">
                                                <div class="col-sm-6 " >
                                                    <label>Image 1</label>
                                                    <input type="file" name="image1" />

                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text"  placeholder="Image/URL" style="width: 70%" name="link1"/>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-sm-6 " >
                                                    <label>Image 2</label>
                                                    <input type="file" name="image2"  />

                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text"  placeholder="Image/URL"  style="width: 70%" name="link2" />
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-sm-6 " >
                                                    <label>Image 3</label>
                                                    <input type="file" name="image3" />

                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" placeholder="Image/URL" style="width: 70%" name="link3"/>
                                                </div>
                                                <div class="col-xxl-12 col-sm-4 col-12 mx-auto mt-5">
                                                    <button class="btn btn-success w-100">Mettre à jour le curseur </button>
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

        </div>
    </div>
@endsection
