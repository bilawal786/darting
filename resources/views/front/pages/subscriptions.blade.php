@extends('front.layouts.layout')

@section('content')

    <!-- ==========login Section start Here========== -->
    <div class="page-header-section style-1 login-section padding-tb">
        <div class=" container">
            @foreach($subscriptions as $subscription)
            <div class="account-wrapper" style="max-width: 1000px">
                <h3 class="title">{{$subscription->name}}</h3>
                <h6 class="title">{{$subscription->description}}</h6>
                <h1 class="title">{{$subscription->price}} €  <small style="font-size: 20px">/ par mois</small></h1>
                <div class="form-group">
                    <a href="{{route('subscription.buy' , ['id' => $subscription->id])}}"><button style="width: 100%" class="d-block lab-btn"><span>Acheter maintenant</span></button></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- ==========Login Section ends Here========== -->

@endsection
