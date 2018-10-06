<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
use App\Bic;
use App\Bac;
use App\Boe;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();

        return view('game.index')->withGames($games);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('game.create');

//        $lastBic = Bic::orderBy('id', 'desc')->limit(1)->get();
//        return $lastBic;
//        if (isset($lastBic[0])) {
//            return 'something';
//        } else {
//            return 'something else';
//        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $game = new Game;
        $game->bic = 3;
        $game->bac = 2;
        $game->user_id = Auth::id();
        $game->otherUser = Auth::id();
        $game->save();

        for ($i = 1; $i <= 9; $i++) {
            $bic = new Bic; //creates a new bic
            $bic->game_id = $game->id; //all nine bics get linked to the game that was just created
            $bic->location = $i;
            $bic->status = 0;
            $bic->save();
            for ($j = 1; $j <= 9; $j++) {
                $bac = new Bac;
                $lastBic = Bic::orderBy('id', 'desc')->limit(1)->get();
                if (isset($lastBic[0])) {
                    $bac->bic_id = $lastBic[0]->id;
                }
                $bac->location = $j;
                $bac->status = 0;
                $bac->save();
                for ($a = 1; $a <= 9; $a++) {
                    $boe = new Boe;
                    $lastBac = Bac::orderBy('id', 'desc')->limit(1)->get();
                    if (isset($lastBac[0])) {
                        $boe->bac_id = $lastBac[0]->id;
                    }
                    $boe->location = $a;
                    $boe->status = 0;
                    $boe->save();
                }
            }


        }

        return view('game.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return view('game.show')->withGame($game);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        //
    }
}
