<?php

namespace App\Http\Controllers;
use App\Models\game;

use Illuminate\Http\Request;

class gameController extends Controller
{
    public function index()
    {
        $game=game::orderBy('id','DESC')->get();
        return view('game.index', ['game' => $game]);
    }
    public function detail(Request $request)
    {
        $game = game::where('id', $request->id)->first();
        return view('game.detail', ['game' => $game]);

    }
}
