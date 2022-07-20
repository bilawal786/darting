@extends('front.layouts.layout')
@section('content')

    <!-- ==========Page Header Section Ends Here========== -->
    <!-- ==========Blog Section start Here========== -->
    <section class="blog-section padding-tb pb-lg-110" style="padding-top: 228px;">
        <div class="container">
            <div class="main-blog">
                <div class="row">
                    <div class="col-lg-10 col-12">
                        <div class="blog-wrapper">
                            <div class="post-item">
                                <div class="post-item-inner">
                                    <div class="post-thumb">
                                        <img src="{{asset($post->image)}}" alt="blog">
                                    </div>
                                    <?php
                                    \Carbon\Carbon::setLocale('fr');
                                    $date = \Carbon\Carbon::parse($post->created_at);
                                    ?>

                                    <div class="post-content">
                                        <span class="meta">By <a href="#">{{$post->author->fname .' '.$post->author->lname }}</a>  {{$date->diffForHumans()}}</span>

                                        <blockquote>
                                            <p>{{$post->description}}</p>
                                        </blockquote>

                                    </div>

                                </div>
                            </div>
                            <div id="comments" class="comments">
                                <div class="widget-title">
                                    <h3>{{$comment->count()}} Commentaires</h3>
                                </div>

                                <ul class="comment-list">
                                    @foreach($comment as $row)
                                    <li class="comment" id="li-comment-2">
                                        <div class="com-image">
                                            @if($row->user->profile_picture)
                                            <img alt="" src="{{asset($row->user->profile_picture)}}" class="avatar avatar-90 photo"
                                                 height="90" width="90">
                                            @else
                                                <img alt="" src="{{asset('assets/images/member/02.jpg')}}" class="avatar avatar-90 photo"
                                                     height="90" width="90">
                                            @endif
                                        </div>
                                        <div class="com-content">
                                            <div class="com-title">
                                                <div class="com-title-meta">
                                                    <h4><a href="#" rel="external nofollow" class="url">{{$row->user->fname .' '.$row->user->lname }}</a></h4>
                                                    <?php
                                                    \Carbon\Carbon::setLocale('fr');
                                                    $date = \Carbon\Carbon::parse($row->created_at);
                                                    ?>
                                                    <span> {{$date->diffForHumans()}} </span>
                                                </div>
                                                @if(Auth::user()->id==$row->user_id )
                                                <span class="reply">
                                                    <a rel="nofollow" class="comment-reply-link" href="{{route('delete.comment',['id'=>$row->id])}}"><i
                                                            class="icofont-reply-all"></i>
                                                        Supprimer le commentaire</a>
                                                </span>
                                                @endif

                                            </div>
                                            <p>{{$row->comment}}</p>
                                        </div>

                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div id="respond" class="comment-respond">
                                <div class="add-comment">
                                    <div class="widget-title">
                                        <h3>Laissez un commentaire</h3>
                                    </div>
                                    <form action="{{route('user.comment.post')}}" method="post"  class="comment-form" >
                                        @csrf
                                        <input type="hidden" name="post_id" value="{{$post->id}}" >
                                        <textarea class="comment-input" id="comment-reply" name="comment" cols="45"
                                                  rows="5" placeholder="Tapez ici le message" aria-required="true" required ></textarea>
                                        <button class="lab-btn" type="submit"><span>Envoyer un commentaire</span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ==========Blog Section ends Here========== -->

@endsection
