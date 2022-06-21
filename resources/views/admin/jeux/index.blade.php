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
                            <li class="breadcrumb-item active" aria-current="page">Jeux</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->

                <div class="row layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-8" style="padding: 20px">
                            <a class="btn btn-secondary" id="addTask" href="{{route('admin.jeux.create')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>Ajouter Jeux</a>
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
                                    @foreach($jeux as $row)
                                        <td>{{$row->name}}</td>

                                        <td  ><img class="rounded-circle"   src="{{asset($row->image)}}" alt="avatar"  width="64" height="64"/>
                                        </td>

                                        <td> <a href="{{route('admin.jeux.edit',['id' => $row->id])}}" class="btn btn-secondary">Éditer</a></td>

                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                <div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="addTaskModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title add-title" id="addTaskModalTitleLabel1">Add Task</h5>
                                <h5 class="modal-title edit-title" id="addTaskModalTitleLabel2" style="display: none;">Edit Task</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                </button>
                            </div>

                            <div class="modal-body">
                                <div class="compose-box">
                                    <div class="compose-content" id="addTaskModalTitle">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="d-flex mail-to mb-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3 flaticon-notes"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                                        <div class="w-100">
                                                            <input id="task" type="text" placeholder="Task" class="form-control" name="task">
                                                            <span class="validation-text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex  mail-subject">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text flaticon-menu-list"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                                <div class="w-100">
                                                    <div id="taskdescription" class=""></div>
                                                    <span class="validation-text"></span>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                <button class="btn add-tsk btn-primary">Add Task</button>
                                <button class="btn edit-tsk btn-success">Save</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
