@extends('front.layouts.layout')

<link href="{{asset('calender/lib/main.css')}}" rel='stylesheet' />
<script src="{{asset('calender/lib/main.js')}}"></script>
<script src="{{asset('calender/lib/locales-all.js')}}"></script>
<script>

    document.addEventListener('DOMContentLoaded', function() {
        var initialLocaleCode = 'fr';
        var localeSelectorEl = document.getElementById('locale-selector');
        var calendarEl = document.getElementById('calendar1');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {

                left: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
            },

            buttonText: {
                today: "Aujourd'hui",
                year: 'Année',
                month: 'Mois',
                week: 'Semaine',
                day: 'Jour',
                list: 'Mon planning',
            },
            initialDate: "{{\Carbon\Carbon::now()}}",
            locale: initialLocaleCode,
            buttonIcons: true, // show the prev/next text
            weekNumbers: true,
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            dayMaxEvents: true, // allow "more" link when too many events
            events: [
                    @if($activities->count())
                    @foreach($activities as $activitie)
                {
                    title: "{{$activitie->title}}",
                    start: "{{$activitie->date}}",

                    borderColor: 'black',
                    url: "{{route('front.activity', ['id' => base64_encode($activitie->id)])}}"

                },
                @endforeach
                @endif

            ]
        });

        calendar.render();

        // build the locale selector's options
        calendar.getAvailableLocaleCodes().forEach(function(localeCode) {
            var optionEl = document.createElement('option');
            optionEl.value = localeCode;
            optionEl.selected = localeCode == initialLocaleCode;
            optionEl.innerText = localeCode;
            localeSelectorEl.appendChild(optionEl);
        });

        // when the selected option changes, dynamically change the calendar option
        localeSelectorEl.addEventListener('change', function() {
            if (this.value) {
                calendar.setOption('locale', this.value);
            }
        });

    });
    calendar.setOption('locale', 'fr');

</script>
<style>


    #top {
        background: #eee;
        border-bottom: 1px solid #ddd;
        padding: 0 10px;
        line-height: 40px;
        font-size: 12px;
    }

    #calendar {
        max-width: 1100px;
        margin: 40px auto;
        padding: 0 10px;
    }
    .container{
        margin-top: 60px;
    }

</style>
@section('content')
    <div class="banner-section page-header-section style-1 login-section padding-tb">
        <div class="container">
         <div class="row">
             <div class="col-md-3">
               @include('front.dashboard.include.sidebar')
             </div>
             <div class="col-md-9">
                 @if($activities->count())
                     <div class="row g-4" onclick="myFunction(2)" id="addCalander"  >
                         <a  style="float: left;width: 30%;border-radius: 8px;" class="lab-btn text-center"><i class="icofont-circled-right "></i>Aller à l'activité</a>
                     </div>

                     {{--                     Activity--}}
                     <div id="activity"  class="row g-4" style="display: none">

                         <a onclick="myFunction(1)" style="float: left;width: 30%;border-radius: 8px;" class="lab-btn text-center"><i class="icofont-circled-right "></i>Aller au calendrier</a>
                     </div>
                 @foreach($activities as $activitie)
                 <div class="section-wrapper" style="margin-bottom: 10px">
{{--                      //calander--}}

                     <div >
                     <div  id="addCalanderr" class="row g-4" style="margin-top: 5px; "  >
                         <div id='calendar1' ></div>
                         <div id="popup"></div>

                     </div></div>
{{--                     Activity--}}
                     <div id="activity"  class="row g-4" style="display: none">

                         <a onclick="myFunction(1)" style="float: left;width: 30%;border-radius: 8px;" class="lab-btn text-center"><i class="icofont-circled-right "></i>Aller au calendrier</a>
                     </div>
                     <div class="row g-4" id="activityy"  style="margin-top: -14px; display: none  ">
                         <a id="activity" href="{{route('front.activity', ['id' => base64_encode($activitie->id)])}}">
                         <div class="col-xl-12 col-12">
                             <div class="group-item lab-item">
                                 <div class="lab-inner d-flex flex-wrap align-items-center p-4">
                                     <div class="row" style="text-align: left">

                                         <div class="col-md-3">
                                             <div class="me-sm-4 mb-4 mb-sm-0">

                                                 @if($activitie->user->profile_picture != null)
                                                     <img style="border-radius: 50%; height: 80px" src="{{asset($activitie->user->profile_picture)}}" alt="member-img">
                                                 @else
                                                     <img style="border-radius: 50%; height: 80px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/User-avatar.svg/1024px-User-avatar.svg.png" alt="member-img">
                                                 @endif

                                             </div>
                                         </div>
                                         <?php
                                         \Carbon\Carbon::setLocale('fr');
                                         $date = \Carbon\Carbon::parse($activitie->created_at);
                                         ?>
                                         <div class="col-md-4">
                                                 <h4>{{$activitie->title}}</h4>
                                                 <p> <i class="icofont-clock-time"></i> <span> {{$date->diffForHumans()}}</span> - {{$activitie->time}} </p>
                                                 <p> <i class="icofont-location-pin"></i> {{$activitie->country}} </p>
                                                 <p> <i class="icofont-location-pin"></i> {{$activitie->city}} </p>
                                                 <p> <i class="icofont-users-alt-5"></i> 1 / {{$activitie->num}} </p>
                                         </div>
                                         <div class="col-md-5">
                                             <img style="border-radius: 10px; height:100%" src="{{asset($activitie->image)}}" alt="img">
                                         </div>
                                     </div>

                                 </div>
                             </div>
                         </div>
                         </a>
                     </div>
                 </div>
                 @endforeach
                 @else
                 <h3>Aucune activité trouvée dans votre région</h3>
                 @endif
             </div>
{{--             <div class="paginations">--}}
{{--                 <ul class="lab-ul d-flex flex-wrap justify-content-center mb-1">--}}
{{--                     <li>--}}
{{--                         <a href="#"><i class="icofont-rounded-double-left"></i></a>--}}
{{--                     </li>--}}
{{--                     <li>--}}
{{--                         <a href="#">1</a>--}}
{{--                     </li>--}}
{{--                     <li class="d-none d-sm-block">--}}
{{--                         <a href="#">2</a>--}}
{{--                     </li>--}}
{{--                     <li>--}}
{{--                         <a href="#">...</a>--}}
{{--                     </li>--}}
{{--                     <li class="d-none d-sm-block">--}}
{{--                         <a href="#">4</a>--}}
{{--                     </li>--}}
{{--                     <li>--}}
{{--                         <a href="#">5</a>--}}
{{--                     </li>--}}
{{--                     <li>--}}
{{--                         <a href="#"><i class="icofont-rounded-double-right"></i></a>--}}
{{--                     </li>--}}
{{--                 </ul>--}}
{{--             </div>--}}
         </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script>
        function myFunction(id) {

           if(id==1){
               $('#activity').hide();
               $('#activityy').hide();
               $('#addCalander').show();
               $('#addCalanderr').show();

           }

           else if(id==2){
               $('#activity').show();
               $('#activityy').show();
               $('#addCalander').hide();
               $('#addCalanderr').hide();

            }
        }
    </script>

@endsection
