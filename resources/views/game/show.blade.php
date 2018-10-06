@extends('main')

@section('content')

    <br>
    <h1 style="text-align: center;">Game {{ $game->id }}</h1>
    <h6 style="text-align: center;">Bic: {{ $game->bic }} Bac: {{ $game->bac }}</h6>
    <br>
    <table style="margin: auto; width: 60vw; height: 60vw;">
        <tbody>
        <?php
        $designatedBic = $game->bic;
        $designatedBac = $game->bac;
        $takenBac = null;
        $takenBic = null;
        ?>
        @include('partials.boardGeneration._bic')
{{-- broken --}}
        </tbody>
    </table>
@stop

