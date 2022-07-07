@extends('layouts.app')
@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="middle-content container-xxl p-0">
                <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Créer</li>
                        </ol>
                    </nav>
                </div>
                <form action="{{route('admin.blog.store')}}" method="post"  accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                            <div class="row mb-4 layout-spacing layout-top-spacing">

                                <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                                    <div class="widget-content widget-content-area blog-create-section">

                                        <div class="row mb-4">
                                            <div class="col-sm-12">
                                                <label for="post-title">Titre de l'article</label>
                                                <input type="text" class="form-control" name="title" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="widget-content widget-content-area blog-create-section mt-4">

                                        <h5 class="mb-4">Télécharger une image</h5>

                                        <div class="row mb-4">
                                            <div class="col-xxl-12 mb-4">
                                                <input type="file" class="form-control" name="image" >
                                            </div>
                                            <div class="col-xxl-12">
                                                <label for="post-meta-description">Meta Description</label>
                                                <textarea name="description" class="form-control" id="summernote1"  cols="10" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12 col-sm-4 col-12 mx-auto">
                                            <button class="btn btn-success w-100">Créer une publication</button>
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
