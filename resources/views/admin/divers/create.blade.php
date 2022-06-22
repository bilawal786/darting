@extends('layouts.app')
@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="middle-content container-xxl p-0">
                <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Loisirs</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Divers</li>
                        </ol>
                    </nav>
                </div>
                <form action="{{ route('admin.divers.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-2">

                                    </div>
                                    <div class="col-xl-8 col-md-8 col-sm-8 col-8">
                                            <div class="widget-content widget-content-area">

                                                <div class="form-group mb-4 mt-5">
                                                    <label for="exampleFormControlInput2">Nom du diver</label>
                                                    <input type="text" class="form-control" placeholder="Nom du diver" name="name" required>
                                                </div>
                                                <div class="col">
                                                    <label for="exampleFormControlInput2">Image</label>
                                                    <input class="form-control file-upload-input" type="file" id="formFile" name="image" required>
                                                </div>

                                                <input type="submit" name="time" class="mt-4 mb-4 btn btn-primary" value="Soumettre">
                                        <div class="col-xl-2">

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
    </div>
@endsection
