<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use App\Http\Resources\EventResourceCollection;
use App\Http\Resources\EventResource;

/**
 * @resource Events
 * Events api resource
 */
class EventController extends Controller
{
    /**
     * return all events in the system
     * @return EventResourceCollection
     */
    public function index()
    {
        return new EventResourceCollection(Event::paginate(20));
    }

    /**
     * return a certain event
     * @param $id
     * @return EventResource
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);
        return new EventResource($event);
    }
}
