<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardRegisterController extends Controller
{
    public function index()
    {
        dump('This is Card Register page');
        return view('cardregister');
    }
}
