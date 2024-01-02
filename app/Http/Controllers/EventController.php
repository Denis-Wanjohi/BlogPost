<?php

namespace App\Http\Controllers;

use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;
use App\Models\Events;

class EventController extends Controller
{
    //
    public function event(){
        return view('event/create_event');
    }

    public   function store(){
        // dd(request());
        $event = request()->validate([
            'title' => 'required',
            'location' => 'required',
            'fee' => 'required',
            'date' => 'required',
            'from' => 'required',
            'to' => 'required',
            'details' => 'required',
        ]);
        $event['user_id'] = auth()->user()->id;
        if(request()->hasFile('banner')){
            $event['banner'] = request('banner')->store('eventsImages','public');
        }

        Events::create($event);

        return redirect('/');
    }

    public function show($id){
        return view('event/show_event',[
            'event' => Events::findorFail(request('id')),
        ]);
    }


    public function manage(){
      
        return view('event/manageEvent',[
            'event' =>   auth()->user()->events()->get()
        ]);
    }

    public function editEvent(){
        return view('event/editEvent',[
            'event' => Events::findorFail(request('id'))
        ]);
    }
   
    public function updateEvent(Request $request){
        // dd(request()) ;
        $eventPost =  Events::find(request('id'));
        $event = $request->validate([
            'title' => 'required',
            'location' => 'required',
            'fee' => 'required',
            'date' => 'required',
            'from' => 'required',
            'to' => 'required',
            'details' => 'required',
        ]);
        $event['user_id'] = auth()->user()->id;
        if($request->hasFile('banner')){
            $event['banner']  = request('banner')->store('eventsImages','public');
            $eventPost->banner = $event['banner'];
        }
        $eventPost->title = $event['title'];
        $eventPost->location = $event['location'];
        $eventPost->fee = $event['fee'];
        $eventPost->date = $event['date'];
        $eventPost->from = $event['from'];
        $eventPost->to = $event['to'];
        $eventPost->details = $event['details'];
        $eventPost->save();
        return redirect('/manageEvent');
    }

    public function deleteEvent(){
    
        $user = Events::findorFail(request('id'));
        $user->delete();
        return back();
    }
    




}
