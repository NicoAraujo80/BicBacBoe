@extends('main')

@section('content')

    <br>
    <h1 style="text-align: center;">Game {{ $game->id }}</h1>
    <h6 style="text-align: center;">Bic: {{ $game->bic }} Bac: {{ $game->bac }}</h6>
    <br>
    <table style="margin: auto; width: 60vw; height: 60vw;">
        <tbody>
        <?php
        $designatedBic = null;
        $designatedBac = null;
        ?>
        @foreach($game->bics as $bic)
            @if($bic->id % 3 == 1)
                <tr>
                    @endif
                    @if($bic->id == $game->bic)
                        <td style="background-color: #2a9055; border: #1b1e21 solid 1px; height: 33%; width: 33%;">
                        <?php $designatedBic = $bic->id ?>
                    @else
                        <td style="border: #1b1e21 solid 1px; height: 33%; width: 33%;">
                            @endif
                            @foreach($bic->bacs as $bac)
                                @if($bac->id % 9 == 1)
                                    <table style="width: 100%; height: 100%;">
                                        <tbody>
                                        @endif
                                        @if($bac->id % 3 == 1)
                                            <tr>
                                                @endif
                                                @if($bac->location == $game->bac && $bac->bic_id == $designatedBic)
                                                    <td style="background-color: #3f9ae5; border: #1b1e21 solid 1px; height: 33%; width: 33%;">
                                                    <?php $designatedBac = $bac->id ?>
                                                @else
                                                    <td style="border: #1b1e21 solid 1px; height: 33%; width: 33%;">
                                                        @endif

                                                        @foreach($bac->boes as $boe)
                                                            @if($boe->id % 9 == 1)
                                                                <table style="width: 100%; height: 100%;">
                                                                    <tbody>
                                                                    @endif
                                                                    @if($boe->id % 3 == 1)
                                                                        <tr>
                                                                            @endif
                                                                            @if($boe->bac->id == $designatedBac)
                                                                                <td style="border: #1b1e21 solid 1px; height: 33%; width: 33%;">
                                                                                    <a style="display: block; width: 100%; height: 100%;"
                                                                                       href="{{ route('random') }}"></a>
                                                                                </td>
                                                                            @else
                                                                                <td style="border: #1b1e21 solid 1px; height: 33%; width: 33%;"></td>
                                                                            @endif
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