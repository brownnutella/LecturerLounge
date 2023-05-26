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
                'title' => $event->title,
                'start' => $event->start_date,
                'end' => $event->end_date,
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
}
