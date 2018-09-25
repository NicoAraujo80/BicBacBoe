@extends('main')

@section('content')
    <br>
    <div class="col-md-10 offset-md-1">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Bic</th>
                <th scope="col">Bac</th>
            </tr>
            </thead>
            <tbody>
            {{--@foreach($games as $game)--}}
                {{--<tr>--}}
                    {{--<th scope="row">{{ $game->id }}</th>--}}
                    {{--<td>{{ $game->bic }}</td>--}}
                    {{--<td>{{ $game->bac }}</td>--}}
                {{--</tr>--}}
            {{--@endforeach--}}
            </tbody>
        </table>
    </div>


    <table style="margin: auto; width: 60vw; height: 60vw;">
        <tbody>
        @foreach($game->bics as $bic)
            @if($bic->id % 3 == 1)
                <tr>
            @endif
            <td style="border: #1b1e21 solid 1px; height: 33%; width: 33%;">
                @foreach($bic->bacs as $bac)
                    @if($bac->id % 9 == 1)
                        <table style="width: 100%; height: 100%;">
                            <tbody>
                    @endif
                    @if($bac->id % 3 == 1)
                        <tr>
                    @endif
                    <td style="border: #1b1e21 solid 1px; height: 33%; width: 33%;">
                        @foreach($bac->boes as $boe)
                            @if($boe->id % 9 == 1)
                                <table style="width: 100%; height: 100%;">
                                    <tbody>
                            @endif
                            @if($boe->id % 3 == 1)
                                <tr>
                            @endif
                            <td style="border: #1b1e21 solid 1px; height: 33%; width: 33%;">{{ $boe->id }}</td>
                            @if($boe->id % 3 == 0)
                                </tr>
                            @endif
                            @if($boe->id % 9 == 0)
                                    </tbody>
                                </table>
                            @endif
                        @endforeach
                    </td>
                    @if($bac->id % 3 == 0)
                        </tr>
                    @endif
                    @if($bac->id % 9 == 0)
                            </tbody>
                        </table>
                    @endif
                @endforeach
            </td>
            @if($bic->id % 3 == 0)
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>
@stop