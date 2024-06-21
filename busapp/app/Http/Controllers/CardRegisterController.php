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


class CardRegisterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'card_id' => 'required|string',
            'std_id' => 'required|string',
            'faculty' => 'required|string',
            'gender' => 'required|string',
            'residential' => 'required|string',
        ]);

        users::create([
            'card_id' => $request->card_id,
            'std_id' => $request->std_id,
            'gender' => $request->gender,
            'faculty' => $request->faculty,
            'residential' => $request->residential,
        ]);

        return response()->json(['message' => 'User added successfully'], 201);
    }
}

