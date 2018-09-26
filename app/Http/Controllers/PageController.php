<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex()
    {
        return view('welcome');
    }

    public function super()
    {
        return view('game.create');
    }

    public function random()
    {
        return 'random';
    }
}
