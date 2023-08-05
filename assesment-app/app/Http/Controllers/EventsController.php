<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventsController extends Controller
{
    public function index(){

        $events = DB::table('table_events')->get();
        return view('events',compact('events'));
    }
}
