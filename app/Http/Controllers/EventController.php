<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event\Repositories\Interfaces\EventRepositoryInterface;

class EventController extends Controller
{
    protected $eventRepo;

    public function __construct(EventRepositoryInterface $eventRepo)
    {
        $this->eventRepo = $eventRepo;
    }

    public function index()
    {
        $params = request()->filter_by ?? null;
        $events = $this->eventRepo->index($params)->paginate(10);
        return view('backend.event.index', compact('events'));
    }

    public function  create()
    {
        return view('backend.event.form');
    }

    public function store(EventRequest $request)
    {
        $this->eventRepo->store($request->except('_token'));
        return redirect()->route('events.index')->with('success', 'Event Created Successfully!');
    }

    public function edit($id)
    {
        $event = $this->eventRepo->event($id);
        return view('backend.event.form', compact('event'));
    }

    public function update(EventRequest $request, $id)
    {
        $this->eventRepo->update($request->except('_token'), $id);
        return redirect()->route('events.index')->with('success', 'Event Updated Successfully!');
    }

    public function destroy($event_id)
    {
        $this->eventRepo->destroy($event_id);
        return redirect()->route('events.index')->with('success', 'Event Deleted Successfully!');
    }
}
