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
                <form action="{{route('admin.work.update')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4 layout-spacing layout-top-spacing w-100">

                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                            <div class="widget-content widget-content-area blog-create-section">

                                <div class="row mb-4">
                                    <div class="col-sm-12 " >
                                        <label>Title-1</label>
                                        <textarea class="form-control"  name="title1" >  {{$work->title1}} </textarea>

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-12 " >
                                        <label>Title-2</label>

                                        <textarea class="form-control"   name="title2" > {{$work->title2}}  </textarea>

                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-sm-12 " >
                                        <label> Comment ça marche?<br>
                                            Step-1</label>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <label>Image</label>
                                        <input type="file" class="form-control" id="post-title" name="image1"  >
                                    </div>
                                </div>



                                <div class="row mb-4 ">
                                    <div class="col-xxl-12 mb-4 " >
                                        <label>Title</label>
                                        <input class="form-control"    name="title3" value="{{$work->title3}}" >

                                    </div>
                                </div>
                                <div class="row mb-4 ">
                                    <div class="col-xxl-12 mb-4 " >
                                        <label>La description</label>
                                        <textarea class="form-control" rows="8"   name="descruption1" >{{$work->descruption1}}   </textarea>

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-12 " >
                                        <label> Comment ça marche?<br>
                                            Step-2</label>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <label>Image</label>
                                        <input type="file" class="form-control" id="post-title" name="image2"   >
                                    </div>
                                </div>



                                <div class="row mb-4 ">
                                    <div class="col-xxl-12 mb-4 " >
                                        <label>Title</label>
                                        <input class="form-control"    name="title4" value="{{$work->title4}}">

                                    </div>
                                </div>
                                <div class="row mb-4 ">
                                    <div class="col-xxl-12 mb-4 " >
                                        <label>La description</label>
                                        <textarea class="form-control" rows="8"   name="descruption2" > {!! $work->descruption2 !!}  </textarea>

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-12 " >
                                        <label> Comment ça marche?<br>
                                            Step-3</label>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <label>Image</label>
                                        <input type="file" class="form-control" id="post-title"  name="image3">
                                    </div>
                                </div>



                                <div class="row mb-4 ">
                                    <div class="col-xxl-12 mb-4 " >
                                        <label>Title</label>
                                        <input class="form-control"     name="title5" value="{{$work->title5}}" >

                                    </div>
                                </div>
                                <div class="row mb-4 ">
                                    <div class="col-xxl-12 mb-4 " >
                                        <label>La description</label>
                                        <textarea class="form-control" rows="8" name="descruption3" >{{$work->descruption3}}  </textarea>

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
