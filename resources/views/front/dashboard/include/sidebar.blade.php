
@php
$activities =\App\Activity::all()->count();
$match=\App\MatchProfile::all()->count();
$authactivity=\App\Activity::where('user_id',Auth::user()->id)->count();
@endphp


<div class="row">
    <div class="col-md-12">
        <a href="{{route('front.profiles')}}"><button style="width: 100%;  background-color: {{ request()->is('front/profiles') ? '#df314d' : '#3a1965' }}; text-align: left" class="lab-btn">Match parfait<span class="myspan">{{$match}}</span></button></a>
    </div>
    <div class="col-md-12">
        <a href="{{route('front.dashboard')}}"><button style="width: 100%;  background-color: {{ request()->is('dashboard') ? '#df314d' : '#3a1965' }}; text-align: left"  class="lab-btn"  >Activities <span class="myspan">{{$activities}}</span></button> </a>
    </div>
    <div class="col-md-12">
        <a href="{{route('activity.create')}}"><button style="width: 100%;  background-color:{{ request()->is('activity/create') ? '#df314d' : '#3a1965' }}; text-align: left" class="lab-btn">Créer une activité</button></a>
    </div>
    <div class="col-md-12">
        <a href="{{route('my.profile')}}"><button style="width: 100%;  background-color:{{ request()->is('my/profile') ? '#df314d' : '#3a1965' }}; text-align: left" class="lab-btn">Mon profil</button></a>
    </div>
    <div class="col-md-12">
        <a href="{{route('front.notification')}}"><button style="width: 100%;  background-color:{{ request()->is('my/profile') ? '#df314d' : '#3a1965' }}; text-align: left" class="lab-btn">Notification <span class="myspan"> 0</span></button></a>
    </div>
    <div class="col-md-12">
        <button style="width: 100%;  background-color: #3a1965; text-align: left" class="lab-btn">Messages <span class="myspan"> 0</span> </button>
    </div>
    <div class="col-md-12">
        <a href="{{route('front.myactivity')}}"><button style="width: 100%;  background-color:{{ request()->is('my/profile') ? '#df314d' : '#3a1965' }}; text-align: left" class="lab-btn">Mon activité <span class="myspan"> {{$authactivity}}</span></button></a>
    </div>
    <div class="col-md-12">
        <a href="{{route('front.iaccept.request')}}"><button style="width: 100%;  background-color:{{ request()->is('front/iaccept/request') ? '#df314d' : '#3a1965' }}; text-align: left" class="lab-btn">Accepter la requête
            </button></a>
    </div>
    <div class="col-md-12">
        <a href="{{route('front.myaccept.request')}}"><button style="width: 100%;  background-color:{{ request()->is('front/myaccept/request') ? '#df314d' : '#3a1965' }}; text-align: left" class="lab-btn">Qui a visité mon profil
            </button></a>
    </div>
    <div class="col-md-12">
        <a  style="width: 100%;  background-color: #3a1965; text-align: left; padding: 0px" class="lab-btn" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" href="{{route('logout')}}">
        <button style="width: 100%;  background-color: #3a1965; text-align: left" class="lab-btn">Déconnecter </button> </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>

</div>
