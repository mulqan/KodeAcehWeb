<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Event;

class PageController extends Controller
{
    public function home()
    {
      $events = Event::whereDate('deadline', '>=', Carbon::now('Asia/Jakarta'))
                     ->orderByRaw('ISNULL(registration_link), registration_link DESC')
                     ->orderBy('deadline', 'asc')
                     ->get();

      $prev_events = Event::whereDate('deadline', '<', Carbon::now('Asia/Jakarta'))
                     ->orderBy('deadline', 'asc')
                     ->get();

      return view('home')->with('events', $events)->with('prev_events', $prev_events);
    }

    public function event($slug)
    {
      $data = Event::where('slug', $slug)->firstOrFail();

      return view('event')->with('data', $data);
    }
}
