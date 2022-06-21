@extends('layouts.app')
@section('content')
<div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="middle-content container-xxl p-0">
                <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Loisirs</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sports</li>
                        </ol>
                    </nav>
                </div>
                <form action="{{ route('admin.sports.edit',['id'=>$sport->id]) }}" method="get" enctype="multipart/form-data" class="mt-5 ">
                    @csrf

                    <div class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-2">

                                    </div>
                                    <div class="col-xl-8 col-md-8 col-sm-8 col-8">
                                        <form>

                                            <div class="widget-content widget-content-area">

                                                <div class="form-group mb-4 mt-5">
                                                    <label for="exampleFormControlInput2">Nom du sport</label>
                                                    <input type="text" class="form-control" placeholder="Nom du sport" name="name" value="{{$sport->name}}">
                                                </div>
                                                <div class="col">
                                                    <label for="exampleFormControlInput2">Image</label>
                                                    <input class="form-control file-upload-input" type="file" id="formFile" name="image" value="{{$sport->name}}">
                                                </div>

                                                <input type="submit" name="time" class="mt-4 mb-4 btn btn-primary">

                                        </form>

                                    <div class="code-section-container">



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
@endsection
