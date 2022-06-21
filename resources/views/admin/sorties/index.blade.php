@extends('layouts.app')
@section('content')




    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="middle-content container-xxl p-0">

                <!-- BREADCRUMB -->
                <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Loisirs</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sorties</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->

                <div class="row layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-8" style="padding: 20px">
                            <a class="btn btn-secondary" id="addTask" href="{{route('admin.sorties.create')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>Ajouter Sortie</a>
                            <br>
                            <table id="zero-config" class="table dt-table-hover" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Image</th>
                                    <th class="no-content">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @foreach($sorti as $row)
                                        <td>{{$row->name}}</td>

                                        <td  ><img class="rounded-circle"   src="{{asset($row->image)}}" alt="avatar"  width="64" height="64"/>
                                        </td>

                                        <td> <a href="{{route('admin.sorties.edit',['id' => $row->id])}}" class="btn btn-secondary">Éditer</a></td>

                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
