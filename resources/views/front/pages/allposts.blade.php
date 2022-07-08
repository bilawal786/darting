@extends('front.layouts.layout')
@section('content')




            <section class="story-section padding-tb bg-img">
                <div class=" container">
                    <div class="section-header">
                        <h4>L'amour dans la foi Histoires de réussite</h4>
                        <h2>Douces histoires de nos amants</h2>
                    </div>
                    <div class="section-wrapper">
                        <div class="row justify-content-center g-4">
                            @foreach($blog as $row)
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="story-item lab-item">
                                        <div class="lab-inner">

                                            <div class="lab-thumb">

                                                <img style="height: 300px; width: 100%" src="{{asset($row->image)}}" alt="img">
                                            </div>
                                            <div class="lab-content">
                                                <h4><a href="{{route('front.blogindex',['id'=> $row->id ])}}">{{substr($row->title,0,25)}}</a></h4>
                                                <h5>{!!substr($row->description,0,25)!!}</h5>

                                                <a href="{{route('front.blogindex',['id'=> $row->id ])}}"  class="lab-btn"><i class="icofont-circled-right"></i>
                                                    Lire la suitee</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
        </div>
        </section>




@endsection
