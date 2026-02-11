<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use Illuminate\View\View;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $posicionesDelanteros = ['DC','EI','ED','SD'];
        $posicionesMedios = ['MC','MCO','MCD'];
        $posicionesDefensas = ['DEF','LI','LD'];

        $delanteros = Player::whereIn('position', $posicionesDelanteros)->get();
        $medios = Player::whereIn('position', $posicionesMedios)->get();
        $defensas = Player::whereIn('position', $posicionesDefensas)->get();
        $porteros = Player::where('position', 'POR')->get();
        return view('players.index', compact('delanteros', 'medios', 'defensas', 'porteros'));
    }
    /**
     * Show the form for creating a new resource.
     */

    public function create():View
    {
        return view('players.create');
    }
    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {

        $generatedName = $request->file('photo')->store('img/players/cover','public');
        $player = new Player();
        $player->name = $request->input('name');
        $player->number = $request->input('number');
        $player->position = $request->input('position');
        $player->years = $request->input('years');
        $player->twitter = $request->input('twitter');
        $player->instagram = $request->input('instagram');
        $player->twitch = $request->input('twitch');
        $player->photo = $generatedName;
        if($request->input('visible') == 'on'){
            $player->visible = 1;
        }else{
            $player->visible = 0;
        }

        $player->save();

        return redirect()->route('players.create');
    }
    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
        if($player->visible == false){
            return redirect()->route('players.index');
        }else{
            return view('players.show', compact('player'));
        }
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $player):View
    {
        return view('players.edit', compact('player'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Player $player)
    {

    $generatedName = $request->file('photo')->store('img/players/cover','public');

        $player->name = $request->input('name');
        $player->number = $request->input('number');
        $player->position = $request->input('position');
        $player->years = $request->input('years');
        $player->twitter = $request->input('twitter');
        $player->instagram = $request->input('instagram');
        $player->twitch = $request->input('twitch');
        $player->photo = $generatedName;
        if($request->input('visible') == 'on'){
            $player->visible = 1;
        }else{
            $player->visible = 0;
        }

        $player->update();
        return redirect()->route('players.show', compact('player'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        $player->delete();
        return redirect()->route('players.index');
    }
}
