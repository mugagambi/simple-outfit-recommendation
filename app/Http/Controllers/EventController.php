<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\WeatherGroupRequest;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('events.index', ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param WeatherGroupRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(WeatherGroupRequest $request)
    {
        Event::create(['name' => $request->input('name')]);
        flash('Event created successfully')->success();
        return redirect()->route('events.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('events.edit', ['event' => $event]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param WeatherGroupRequest $request
     * @param  \App\Event $event
     * @return \Illuminate\Http\Response
     */
    public function update(WeatherGroupRequest $request, Event $event)
    {
        $event->name = $request->input('name');
        $event->save();
        flash('Event updated successfully')->success();
        return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event $event
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Event $event)
    {
        $event->delete();
        flash('event removed successfully')->success();
        return redirect()->route('events.index');
    }
}
