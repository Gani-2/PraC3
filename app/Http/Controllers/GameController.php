<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Team;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::with(['team1', 'team2'])->get();
        return view('games.index', compact('games'));
    }

    public function create()
    {
        $teams = Team::all();
        return view('games.create', compact('teams'));
    }

    public function store(Request $request)
    {
        // Validatie van de invoer
        $request->validate([
            'team1_id' => 'required|integer|exists:teams,id',
            'team2_id' => 'required|integer|exists:teams,id',
            'field' => 'required|string|max:255',
            'referee_id' => 'required|integer|exists:users,id',
            'time' => 'required|date',
        ]);

        // Opslaan van het spel
        Game::create($request->all());

        return redirect()->route('games.index');
    }

    public function show(Game $game)
    {
        return view('games.show', compact('game'));
    }

    public function edit(Game $game)
    {
        $teams = Team::all();
        return view('games.edit', compact('game', 'teams'));
    }

    public function update(Request $request, Game $game)
    {
        // Validatie van de invoer
        $request->validate([
            'team1_id' => 'required|integer|exists:teams,id',
            'team2_id' => 'required|integer|exists:teams,id',
            'field' => 'required|string|max:255',
            'referee_id' => 'required|integer|exists:users,id',
            'time' => 'required|date',
        ]);

        // Bijwerken van het spel
        $game->update($request->all());

        return redirect()->route('games.index');
    }

    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('games.index');
    }
}
