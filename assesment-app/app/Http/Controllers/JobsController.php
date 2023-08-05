<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobsController extends Controller
{
    public function index(){
        $jobs = DB::table('table_jobs')->get();
        return view('jobs',compact('jobs'));
    }
}
