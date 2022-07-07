@extends('layouts.app')
@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="middle-content container-xxl p-0">
                <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Des postes</li>
                        </ol>
                    </nav>
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-8">
                            <table id="blog-list" class="table dt-table-hover" style="width:100%">
                                <thead>
                                <tr>

                                    <th>Des postes</th>
                                    <th>Date</th>
                                    <th class="no-content text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($blog as $row)

                                <tr>

                                    <td>
                                        <div class="d-flex justify-content-left align-items-center">
                                            <div class="avatar  me-3">
                                                <img src="{{asset($row->image)}}" alt="Avatar" width="64" height="64" class="rounded-circle" >
                                            </div>
                                            <div class="d-flex flex-column">
                                                <span class="text-truncate fw-bold">{{$row->title}}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$row->created_at}}</td>

                                    <td class="text-center">

                                        <div class="dropdown">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink21" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink21">

                                                <a class="dropdown-item" href="{{route('admin.blog.edit',['id'=> $row->id])}}">Edit</a>
                                                <a class="dropdown-item" href="{{route('admin.blog.delete',['id'=> $row->id])}}">Delete</a>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

            </div>
        </div>
    </div>

@endsection
