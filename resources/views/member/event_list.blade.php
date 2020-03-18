@extends('layouts.member')
@section('content')
    <div class="row">
        @include('layouts.assets.message')
    </div>
   <div class="row">
       @foreach($events as $event)
       <div class="col-sm-4">
           <div class="card iq-mb-3">
               <img src="{{asset($event->images[0]->image)}}" class="card-img-top" alt="#">
               <div class="card-body">
                   <h4 class="card-title">{{$event->name}}</h4>
                   <p><strong>Start Date</strong> <i class="fa fa-calendar"></i> {{date('d M Y',strtotime($event->start_date))}} {{date('h:m A',strtotime($event->start_date))}}</p>
                   <p><strong>End Date</strong> <i class="fa fa-calendar"></i> {{date('d M Y',strtotime($event->end_date))}} {{date('h:m A',strtotime($event->end_date))}}</p>
                   <h5>Venue: {{$event->venue}}</h5>
                   <h6>Session: {{$event->session}}</h6>
                   <p class="card-text">{{ \Illuminate\Support\Str::limit($event->description, 100, $end='...') }} <a
                           href=""><strong>read more</strong></a></p>
                   <p class="card-text"><small class="text-muted">{{$event->created_at->diffForHumans()}}</small></p>
                   <a href="{{route('member.event.join',$event->id)}}" class="btn btn-primary btn-block">Join</a>

               </div>
           </div>
       </div>
       @endforeach

   </div>
@endsection
