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
                   <h5 class="card-title">{{$event->name}}</h5>
                   <p class="mb-0"><strong>Start Date</strong> <i class="fa fa-calendar"></i> {{date('d M Y',strtotime($event->start_date))}} {{date('h:m A',strtotime($event->start_date))}}</p>
                   <p class="mb-0"><strong>End Date</strong> <i class="fa fa-calendar"></i> {{date('d M Y',strtotime($event->end_date))}} {{date('h:m A',strtotime($event->end_date))}}</p>
                   <h5>Venue: {{$event->venue}}</h5>
                   <h6>Session: {{$event->session}}</h6>
                   <a href="{{route('member.event.details',$event->id)}}"><strong>read more</strong></a>
                   <p class="card-text mb-0"><small class="text-muted">{{$event->created_at->diffForHumans()}}</small></p>
                   @php
                       $member= Auth::guard('member')->user();
                   @endphp
                   @if(!$member->events->contains($event->id))
                   <a href="{{route('member.event.field.join',$event->id)}}" class="btn btn-primary btn-block">Join</a>
                   @else
                       <button class="btn btn-success btn-block">Already You Participated</button>

                   @endif
               </div>
           </div>
       </div>
       @endforeach

   </div>
@endsection
