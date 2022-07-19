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
                <form action="{{route('admin.about.update')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4 layout-spacing layout-top-spacing w-100">

                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                            <div class="widget-content widget-content-area blog-create-section">

                                <div class="row mb-4">
                                    <div class="col-sm-12 " >
                                        <label>Title-1</label>

                                        <textarea class="form-control"  name="title1" >{{$about->title1}}  </textarea>

                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-sm-12 " >
                                        <label>Title-2</label>

                                        <textarea class="form-control"   name="title2" > {{$about->title2}}  </textarea>

                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <label>Count-1</label>
                                        <input type="text" class="form-control"  name="count1" value="{{$about->count1}}"  >
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <label>Count-2</label>
                                        <input type="text" class="form-control"  name="count2" value="{{$about->count2}}" >
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <label>Count-3</label>
                                        <input type="text" class="form-control"  name="count3" value="{{$about->count3}}" >
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <label>Count-4</label>
                                        <input type="text" class="form-control"  name="count4" value="{{$about->count4}}" >
                                    </div>
                                </div>

                                <div class="col-xxl-12 col-sm-4 col-12 mx-auto">
                                    <button class="btn btn-success w-100">Mise à jour partie travail </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
@endsection
