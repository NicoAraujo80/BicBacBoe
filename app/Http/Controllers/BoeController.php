<?php

namespace App\Http\Controllers;

use App\Boe;
use Illuminate\Http\Request;
use App\User;
use App\Game;


class BoeController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Boe  $boe
     * @return \Illuminate\Http\Response
     */
    public function show(Boe $boe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Boe  $boe
     * @return \Illuminate\Http\Response
     */
    public function edit(Boe $boe)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Boe  $boe
     * @return \Illuminate\Http\Response
     */
    public function update(Game $game, Boe $boe)
    {
        $boe->status = 1;
        $boe->save();

        $game->bic = $boe->bac->location;
        $game->bac = $boe->location;
        $game->save();

        return redirect()->route('game.show', $game);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Boe  $boe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boe $boe)
    {
        //
    }
}
