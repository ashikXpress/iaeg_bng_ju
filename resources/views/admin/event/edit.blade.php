@extends('layouts.admin')



@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Update Event</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    @if (count($errors) > 0)

                        <div class="alert alert-danger">


                            <p><strong>Whoops!</strong><br> There were some problems with your input.</p>

                            <ul>

                                @foreach ($errors->all() as $error)

                                    <li>{{ $error }}</li>

                                @endforeach

                            </ul>

                        </div>

                    @endif

                    <form action="{{route('event.update',$event->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" value="{{$event->title}}" name="title" placeholder="Enter Title" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" value="{{$event->sub_title}}" name="sub_title" placeholder="Enter Sub Title" class="form-control">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="event_category">
                                <option value="">Select event category</option>
                                @foreach($event_category as $category)
                                    <option {{ $event->event_category_id == $category->id ? 'selected' : '' }}  value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach


                            </select>
                        </div>

                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Update Event Image</label>
                            </div>
                            <img width="200px" style="margin-top: 20px" height="150px" src="{{asset($event->image)}}" alt="">
                        </div>

                        <div class="form-group">

                            <textarea placeholder="Enter Description" class="form-control" name="description" id="description" rows="5">{{$event->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{route('all.event')}}" class="btn iq-bg-danger">cancel</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
