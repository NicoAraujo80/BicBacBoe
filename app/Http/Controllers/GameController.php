<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
use App\Bic;
use App\Bac;
use App\Boe;

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
        $game->save();

        for ($i = 1; $i <= 9; $i++) {
            if ($i == 1) {
                $bic = new Bic; //creates a new bic at the beggining of every for loop
            }
            $bic->game_id = $game->id; //all nine bics get linked to the game that was just created
            $bic->$i = 1;
            if ($i == 9) {
                $bic->save();
            }
            //          later we will have to change this to have the bic id be the last bic made + 1
            for ($j = 1; $j <= 9; $j++) {
                if ($j == 1) {
                    $bac = new Bac;
                }
                $lastBic = Bic::orderBy('id', 'desc')->limit(1)->get();
                if (isset($lastBic[0])) {
                    if ($i == 9) {
                        $bac->bic_id = $lastBic[0]->id;
                    } else {
                        $bac->bic_id = $lastBic[0]->id + 1;
                    }

                } else {
                    $bac->bic_id = 1;
                }

                $bac->$j = 2;
                if ($j == 9) {
                    $bac->save();
                }
                for ($a = 1; $a <= 9; $a++) {
                    if ($a == 1) {
                        $boe = new Boe;
                    }
                    $lastBac = Bac::orderBy('id', 'desc')->limit(1)->get();
                    if (isset($lastBac[0])) {
                        if ($j == 9) {
                            $boe->bac_id = $lastBac[0]->id;
                        } else {
                            $boe->bac_id = $lastBac[0]->id + 1;
                        }
                    } else {
                        $boe->bac_id = 1;
                    }

                    $boe->$a = 1;
                    if ($a == 9) {
                        $boe->save();
                    }
                }
            }
        }

        $alls = [$game, $bic, $bac, $boe];

        return $alls;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        //
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
