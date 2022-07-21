<div class="row">
    <div class="col-md-12">
        <a href="{{route('front.profiles')}}"><button style="width: 100%;  background-color: {{ request()->is('front/profiles') ? '#df314d' : '#3a1965' }}; text-align: left" class="lab-btn">Match parfait</button></a>
    </div>
    <div class="col-md-12">
        <a href="{{route('front.dashboard')}}"><button style="width: 100%;  background-color: {{ request()->is('dashboard') ? '#df314d' : '#3a1965' }}; text-align: left" class="lab-btn">Activities</button></a>
    </div>
    <div class="col-md-12">
        <a href="{{route('activity.create')}}"><button style="width: 100%;  background-color:{{ request()->is('activity/create') ? '#df314d' : '#3a1965' }}; text-align: left" class="lab-btn">Créer une activité</button></a>
    </div>
    <div class="col-md-12">
        <a href="{{route('my.profile')}}"><button style="width: 100%;  background-color:{{ request()->is('my/profile') ? '#df314d' : '#3a1965' }}; text-align: left" class="lab-btn">Mon profil</button></a>
    </div>
    <div class="col-md-12">
        <a href="{{route('front.notification')}}"><button style="width: 100%;  background-color:{{ request()->is('my/profile') ? '#df314d' : '#3a1965' }}; text-align: left" class="lab-btn">Notification</button></a>
    </div>
    <div class="col-md-12">
        <button style="width: 100%;  background-color: #3a1965; text-align: left" class="lab-btn">Messages </button>
    </div>
    <div class="col-md-12">
        <a href="{{route('front.myactivity')}}"><button style="width: 100%;  background-color:{{ request()->is('my/profile') ? '#df314d' : '#3a1965' }}; text-align: left" class="lab-btn">Mon activité
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
