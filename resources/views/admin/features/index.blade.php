@extends('layouts.app')
@section('content')

    <div id="content" class="main-content ">

        <div class="layout-px-spacing ">

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
                <form action="{{route('admin.feature.update')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                <div class="row mb-4 layout-spacing layout-top-spacing w-100">

                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                        <div class="widget-content widget-content-area blog-create-section">

                            <div class="row mb-4">
                                <div class="col-sm-12 " >
                                    <label>Contenu-1</label>

                                    <textarea class="form-control" id="summernote"   name="content1" >  {{$feature->content1}} </textarea>

                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-sm-12">
                                    <label>Image</label>
                                    <input type="file" class="form-control" id="post-title" name="image"  >
                                </div>
                            </div>
                        </div>

                        <div class="widget-content widget-content-area blog-create-section mt-4">
                            <div class="row mb-4 ">
                                <div class="col-xxl-12 mb-4 " >
                                    <label>Contenu-2</label>
                                    <textarea class="form-control" id="summernote1"   name="content2" >  {{$feature->content2}} </textarea>

                                </div>
                            </div>
                            <div class="col-xxl-12 col-sm-4 col-12 mx-auto">
                                <button class="btn btn-success w-100">Create Feature</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
