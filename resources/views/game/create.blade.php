@extends('main')

@section('content')

    <br>

<a style="margin: 10px;" href="{{ route('game.store') }}">store a game</a>

<a href="{{ route('game.store') }}" class="btn btn-success btn-lg">store a game</a>

@stop