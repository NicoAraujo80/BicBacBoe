@foreach($bac->boes as $boe)
    @if($boe->bac_id =! $takenBac)
        @if($boe->id % 9 == 1)
            <table id="boe" style="width: 100%; height: 100%;">
                <tbody id="boe">
        @endif
                @if($boe->id % 3 == 1)
                    <tr>
                @endif
                    @if($boe->bac->id == $designatedBac)
                        <td id="boe" style="border: #1b1e21 solid 1px; height: 33%; width: 33%;">
                            <a style="display: block; width: 100%; height: 100%;" href="{{ route('boe.update', [$game, $boe]) }}">
                                <img style="{{ $boe->status == 1 ? 'width: 100%;' : '' }}" {{ $boe->status == 1 ? 'src=http://www.dreamincode.net/forums/uploads/monthly_10_2010/post-0-12884151170642.png' : '' }}>
                            </a>
                        </td>
                    @else
                        <td id="boe" style="border: #1b1e21 solid 1px; height: 33%; width: 33%;">
                            <img style="{{ $boe->status == 1 ? 'width: 100%;' : '' }}" {{ $boe->status == 1 ? 'src=http://www.dreamincode.net/forums/uploads/monthly_10_2010/post-0-12884151170642.png' : '' }}>
                        </td>
                    @endif

                @if($boe->id % 3 == 0)
                    </tr>
                @endif

        @if($boe->id % 9 == 0)
                </tbody>
            </table>
        @endif
    @endif
@endforeach


