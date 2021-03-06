@extends('layouts.app')
@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="middle-content container-xxl p-0">

                <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Setting</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form</li>
                        </ol>
                    </nav>
                </div>
                <form action="{{route('admin.setting.update')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
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
                                                <label for="exampleFormControlInput2">Nom du site </label>
                                                <input type="text" class="form-control"
                                                       name="name" value="{{$setting->name}}" required>
                                            </div>
                                            <div class="form-group mb-4 mt-5">
                                                <label for="exampleFormControlInput2">E-mail</label>
                                                <input type="text" class="form-control"
                                                       name="email" value="{{$setting->email}}" required>
                                            </div>
                                            <div class="form-group mb-4 mt-5">
                                                <label for="exampleFormControlInput2">T??l??phoner</label>
                                                <input type="text" class="form-control"
                                                       name="phone" value="{{$setting->phone}}"  required>
                                            </div>
                                            <div class="col">
                                                <label for="">Logo du site</label>
                                            <input class="form-control file-upload-input" type="file" name="logo"   >
                                            </div>
                                            <div class="form-group mb-4 mt-5">
                                                <label for="exampleFormControlInput2">Address</label>
                                                <input type="text" class="form-control"
                                                       name="address" value="{{$setting->address}}"  required>
                                            </div>
                                            <div class="form-group mb-4 mt-5">
                                                <label for="exampleFormControlInput2">Facebook</label>
                                                <input type="text" class="form-control"
                                                       name="link1" value="{{$setting->link1}}"  required>
                                            </div>
                                            <div class="form-group mb-4 mt-5">
                                                <label for="exampleFormControlInput2">Twitter</label>
                                                <input type="text" class="form-control"
                                                       name="link2" value="{{$setting->link2}}"  required>
                                            </div>
                                            <div class="form-group mb-4 mt-5">
                                                <label for="exampleFormControlInput2">google</label>
                                                <input type="text" class="form-control"
                                                       name="link3" value="{{$setting->link3}}"  required>
                                            </div>
                                            <div class="form-group mb-4 mt-5">
                                                <label for="exampleFormControlInput2">Twitter</label>
                                                <input type="text" class="form-control"
                                                       name="link4" value="{{$setting->link4}}"  required>
                                            </div>
                                            <div class="form-group mb-4 mt-5">
                                                <label for="exampleFormControlInput2">google</label>
                                                <input type="text" class="form-control"
                                                       name="link5" value="{{$setting->link5}}"  required>
                                            </div>
                                            <div class="form-group mb-4 mt-5">
                                                <label for="exampleFormControlInput2">Contenu du pied de page</label>
                                                <textarea type="text" class="form-control"
                                                          name="footercontent" rows="8"   required>{{$setting->footercontent}} </textarea>
                                            </div>
                                            <div class="form-group mb-4 mt-5">
                                                <label for="exampleFormControlInput2">image banale</label>
                                                <input type="file" class="form-control"
                                                       name="banarimage" value="{{$setting->banarimage}}">
                                            </div>
                                            <div class="form-group mb-4 mt-5">
                                                <label for="exampleFormControlInput2">Rubrique 1 de la section du blog</label>
                                                <input type="text" class="form-control"
                                                          name="blogh1" rows="8"  value="{{$setting->blogh1}}" required>
                                            </div>
                                            <div class="form-group mb-4 mt-5">
                                                <label for="exampleFormControlInput2">Rubrique 2 de la section du blog</label>
                                                <input type="text" class="form-control"
                                                          name="blogh2" rows="8"  value="{{$setting->blogh2}} "  required>
                                            </div>
                                            <input type="submit" name="time" class="mt-4 mb-4 btn btn-primary"
                                                   value="Soumettre">
                                            <div class="col-xl-2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
        </div>>
    </div>>
@endsection
