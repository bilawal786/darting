@extends('layouts.app')
@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="middle-content container-xxl p-0">
                <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Pays</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Créer</li>
                        </ol>
                    </nav>
                </div>
                <form action="{{route('admin.country.store')}}" method="post"  accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4 layout-spacing layout-top-spacing">
                        <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="widget-content widget-content-area blog-create-section">

                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <label for="post-title">Nom du pays</label>
                                        <input type="text" class="form-control" name="country" >
                                    </div>
                                </div>
                            </div>
                                <div class="col-xxl-12 col-sm-4 col-12 mx-auto">
                                    <button class="btn btn-success w-100">Créer une Pays</button>
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
