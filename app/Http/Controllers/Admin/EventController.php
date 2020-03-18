<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventCategory;
use App\Models\EventImage;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class EventController extends Controller
{
    public function allEvent()
    {
        $events=Event::with('categoryName')->paginate(10);
        return view('admin.event.all',compact('events'));
    }

    public function eventForm()
    {
        $event_category=EventCategory::all();

     return view('admin.event.add',compact('event_category'));
    }

    public function eventSave(Request $request)
    {

       $data= $request->validate([
            //'image' => 'required|image|mimes:jpeg,png,jpg',
            'image' => 'required',
            'name' => 'required|max:191',
            'event_category' =>'required',
            'venue' => 'required',
            'session_year' => 'required',
            'start_date' => 'required',
            'start_time' => 'required',
            'end_date' => 'required',
            'end_time' => 'required',
            'description' => 'required|max:500',
        ]);
        $start_time = date("H:i:s", strtotime($request->start_time));
        $end_time = date("H:i:s", strtotime($request->end_time));


        $event = new Event();
        $event->name = $request->name;
        $event->venue = $request->venue;
        $event->session = $request->session_year;
        $event->start_date = $request->start_date.' '.$start_time;
        $event->end_date = $request->start_date.' '.$end_time;
        $event->event_category_id = $request->event_category;
        $event->description = $request->description;
        $event->save();


        if($files=$request->file('image')){
            foreach($files as $file){
                $image_path='uploads/'.$file->store('event');

                // resize

                $img = Image::make($image_path);

                $img->resize(738, 490);

                $img->save(public_path($image_path), 50);

                $event_image=new EventImage();
                $event_image->image=$image_path;
                $event_image->event_id=$event->id;
                $event_image->save();
            }
        }




        $request->session()->flash('success','Event Create successfully');

        return redirect()->route('all.event');
    }


    public function editEvent($id) {

        $event=Event::find($id);
        $event_category=EventCategory::all();


        return view('admin.event.edit', compact('event','event_category'));
    }


    public function updateEvent($id,Request $request) {

        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
            'title' => 'required|max:191',
            'sub_title' => 'required|max:191',
            'event_category' => 'required',
            'description' => 'required|max:500',
        ]);

        $event = Event::find($id);

        if ($request->image) {


            unlink($event->image);

            $image_path='uploads/'.$request->image->store('event');


            // resize
            $img = Image::make($image_path);

            $img->resize(360, 250);

            $img->save(public_path($image_path), 70);
            $event->image =$image_path;

        }
        $event->title = $request->title;
        $event->sub_title = $request->sub_title;
        $event->event_category_id = $request->event_category;
        $event->save();

        $request->session()->flash('success','Event Update Successfully');

        return redirect()->route('all.event');
    }

    public function deleteEvent(Request $request,$id) {
        $event = Event::find($id);
        unlink($event->image);

        $event->delete();

        $request->session()->flash('success','Event Delete successfully');

        return redirect()->back();
    }

}
