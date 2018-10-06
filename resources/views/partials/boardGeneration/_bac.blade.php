@foreach($bic->bacs as $bac)
    @if($bic->status ==! 1)
        @if($bac->location % 9 == 1)
            <table id="bac" style="width: 100%; height: 100%;">
                <tbody id="bac">
                @endif
                @if($bac->location % 3 == 1)
                    <tr>
                @endif
                        @if($bac->status == 1)
                            <?php $takenBac = $bac->id ?>
                        @else
                            <?php $takenBac = null ?>
                        @endif

                        @if($bac->location == $game->bac && $bac->bic_id == $designatedBic)
                            <td id="bac" style="background-color: #3f9ae5; border: #1b1e21 solid 1px; height: 33%; width: 33%;">
                                <img style="{{ $bac->status == 1 ? 'width: 100%;' : '' }}" {{ $bac->status == 1 ? 'src=http://www.dreamincode.net/forums/uploads/monthly_10_2010/post-0-12884151170642.png' : '' }}>
                            <?php $designatedBac = $bac->id ?>
                        @else
                            <td id="bac" style="border: #1b1e21 solid 1px; height: 33%; width: 33%;">
                                <img style="{{ $bac->status == 1 ? 'width: 100%;' : '' }}" {{ $bac->status == 1 ? 'src=http://www.dreamincode.net/forums/uploads/monthly_10_2010/post-0-12884151170642.png' : '' }}>
                        @endif
                                @include('partials.boardGeneration._boe')
                            </td>

                @if($bac->location % 3 == 0)
                    </tr>
                @endif

                @if($bac->location % 9 == 0)
                </tbody>
            </table>
        @endif
    @endif
@endforeach


