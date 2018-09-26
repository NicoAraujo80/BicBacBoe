@extends('main')

@section('content')
<br>
    <div class="col-md-10 offset-1">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Bic</th>
                <th scope="col">Bac</th>
            </tr>
            </thead>
            <tbody>
            @foreach($games as $game)
                <tr>
                    <th scope="row"><a href="{{ route('game.show', $game->id) }}">{{ $game->id }}</a></th>
                    <td>{{ $game->bic }}</td>
                    <td>{{ $game->bac }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop