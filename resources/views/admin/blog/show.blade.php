@extends('layouts.app')
@section('content')





         <div id="content" class="main-content">
        <div class="layout-px-spacing">

    <div class="middle-content container-xxl p-0">
        <form action="{{route('admin.blog.show',['id'=>$blog->id])}}" method="get"  accept-charset="UTF-8" enctype="multipart/form-data">
            @csrf
         <div class="row layout-top-spacing">

            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">


                <div class="single-post-content">

                    <div class="featured-image">

                        <div class="featured-image-overlay">

                        </div>

                        <div class="post-header">

                            <div class="post-title">
                                <h1 class="mb-0">List of Best Restaurant WordPress Themes</h1>
                            </div>

                            <div class="post-meta-info d-flex justify-content-between">

                                <div class="media">
                                    <img src="{{asset('src/assets/img/profile-12.jpeg')}}" alt="profile">
                                    <div class="media-body">
                                        <h5>Kelly Young</h5>
                                        <p>15 May 2022</p>
                                    </div>
                                </div>

                                <div class="align-self-center">
                                    <button class="btn btn-success btn-icon btn-share btn-rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                                    </button>
                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="post-content">

                        {{$blog->description}}

                    </div>


                    <div class="post-info">

                        <hr>

                        <div class="post-tags mt-5">

                            <span class="badge badge-primary mb-2">Admin</span>
                            <span class="badge badge-primary mb-2">Themeforeset</span>
                            <span class="badge badge-primary mb-2">Dashboard</span>
                            <span class="badge badge-primary mb-2">Top 10</span>

                        </div>

                        <div class="post-dynamic-meta mt-5 mb-5">

                            <button class="btn btn-secondary me-4 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                <span class="btn-text-inner">1.1k</span>
                            </button>


                        </div>

                        <hr>
                        <div class="post-form mt-5">

                            <div class="section add-comment">
                                <div class="info">
                                    <h6 class="">Add Comment</h6>
                                    <p>Add your <span class="text-success">comment</span> to this post.</p>

                                    <div class="row mt-4">

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Write Comment</label>
                                                <textarea class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-end mt-4">
                                        <button class="btn btn-primary me-3">Clear</button>
                                        <button class="btn btn-success">Add Comment</button>
                                    </div>
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
