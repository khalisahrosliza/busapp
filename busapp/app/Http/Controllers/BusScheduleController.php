<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusScheduleController extends Controller
{
    public function index()
    {
        dump('This is Bus Schedule page');
        return view('busschedule');
    }
}
