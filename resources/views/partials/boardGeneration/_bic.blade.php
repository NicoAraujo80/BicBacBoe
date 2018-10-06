@foreach($game->bics as $bic)
    @if($bic->id % 3 == 1)
        <tr>
            @endif

            @if($bic->status == 1)
                <?php $takenBic = $bic->id; ?>
            @else
                <?php $takenBic = null; ?>
            @endif

            @if($bic->location == $game->bic)
                <td style="background-color: #2a9055; border: #1b1e21 solid 1px; height: 33%; width: 33%;">
                    <img style="{{ $bic->status == 1 ? 'width: 100%;' : '' }}" {{ $bic->status == 1 ? 'src=http://www.dreamincode.net/forums/uploads/monthly_10_2010/post-0-12884151170642.png' : '' }}>
            <?php $designatedBic = $bic->id; ?>

            @else
                <td style="border: #1b1e21 solid 1px; height: 33%; width: 33%;">
                    <img style="{{ $bic->status == 1 ? 'width: 100%;' : '' }}" {{ $bic->status == 1 ? 'src=http://www.dreamincode.net/forums/uploads/monthly_10_2010/post-0-12884151170642.png' : '' }}>
                    @endif
                    @include('partials.boardGeneration._bac')
                </td>
                @if($bic->id % 3 == 0)
        </tr>
    @endif
@endforeach