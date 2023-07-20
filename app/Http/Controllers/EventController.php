<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Services\EventService;

class EventController extends Controller
{

    public function index()
    {
        $events = DB::table('events')
        ->orderBy('start_date', 'asc')
        ->paginate(10);
        return view('manager.events.index',compact('events'));
    }


    public function create()
    {
        return view('manager.events.create');
    }


    public function store(StoreEventRequest $request)
    {
        $check=EventService::checkEventDuplication($request['event_date'],$request['start_time'],$request['end_time']);

        if($check){
            session()->flash('status','この時間帯は既に他の予約が存在します');
            return view('manager.events.create');
        }

        $startDate=EventService::joinDateAndTime($request['event_date'],$request['start_time']);

        $endDate=EventService::joinDateAndTime($request['event_date'],$request['end_time']);

        Event::create([
            'name' => $request['event_name'],
            'information' => $request['information'],
            'start_date' => $startDate,
            'end_date' => $endDate,
            'max_people' => $request['max_people'],
            'is_visible' => $request['is_visible'],
            ]);
        session()->flash('status','登録が完了しました');
        return to_route('events.index');
    }


    public function show(Event $event)
    {
        // dd($event);
        $event = Event::findOrFail($event->id);
        $eventDate = $event->eventDate;
        $startTime = $event->startTime;
        $endTime = $event->endTime;
        // dd( $event,$eventDate,$startTime,$endTime);

        return view('manager.events.show',compact('event','eventDate','startTime','endTime'));
    }


    public function edit(Event $event)
    {
        $event = Event::findOrFail($event->id);
        return view('manager.events.edit',compact('event'));
    }


    public function update(UpdateEventRequest $request, Event $event)
    {
        //
    }


    public function destroy(Event $event)
    {
        //
    }
}
