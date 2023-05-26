<?php

namespace App\Http\Controllers;

use App\Models\events;
use Illuminate\Http\Request;

class calendarController extends Controller
{
    public function index()
    {
        $events = array();
        $all_events = events::all();
        foreach($all_events as $event){
            $events[] = [
                'id' => $event->id,
                'title' => $event->title,
                'start' => $event->start_date,
                'end' => $event->end_date,
                'color' => '#B2D1EB',
                'textColor' => 'black'
            ];
        }

        return view('calendar', ['events' => $events]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string'
        ]);
        
        $event = events::create([
            'title' => $request->title,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        return response()->json($event);
    }
    public function update(Request $request, $id)
    {
        $event = events::find($id);
        if(! $event) {
            return response()->json([
                'error' => "Unable to locate the event"
            ], 404);
        }
        $event->update([
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        return response()->json('Event updated');
    }
    public function destroy($id)
    {
        $event = events::find($id);
        if(! $event) {
            return response()->json([
                'error' => "Unable to locate the event"
            ], 404);
        }
        $event->delete();
        return $id;
    }
}
