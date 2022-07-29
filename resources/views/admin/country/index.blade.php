@extends('layouts.app')
@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="middle-content container-xxl p-0">

                <!-- BREADCRUMB -->
                <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"></a></li>
                            <li class="breadcrumb-item active" aria-current="page">pays</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->

                <div class="row layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-8" style="padding: 20px">
                            {{--                            <a class="btn btn-secondary" id="addTask" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>Nouvelle Sport</a>--}}
                            <br>
                            <table id="zero-config" class="table dt-table-hover" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Nom du pays</th>
                                    <th>Action</th>


                                </tr>
                                </thead>
                                <tbody>

                                    @foreach($country as $row)
                                        <tr>
                                <td>{{$row->country}}</td>
                                            <td>
                                                <a href="{{route('admin.country.edit',['id' => $row->id])}}" title="edit" class="btn btn-block btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                                            </td>
                                        {{--                                        <td> <a href="{{route('admin.users.userview',['id' => $row->id])}}" class="btn btn-sm btn-success" data-toggle="tooltip"  >--}}
                                        </tr>
@endforeach





                                <tr></tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


@endsection
