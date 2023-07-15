<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use Illuminate\Support\Facades\DB;

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
        //
    }


    public function show(Event $event)
    {
        //
    }


    public function edit(Event $event)
    {
        //
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
