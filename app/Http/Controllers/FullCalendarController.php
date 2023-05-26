<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\events;
class FullCalendarController extends Controller
{
    public function index(Request $request){
        return view('full-calendar');
    }
}
