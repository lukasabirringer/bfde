@foreach ($beachcourts as $beachcourt)
    <div class="column column--12 column--s-6 column--m-4 -spacing-c">
        <div class="beachcourt-summary" >

            @if ($beachcourt -> picutrePath = ' ')
                <img src="https://beachfelder.de/img/beachcourt-summary-bg-dummy.jpg" class="beachcourt-summary__image">
            @else 
                <img src="https://beachfelder.de/img/HIERMUSSDASBILDHIN" class="beachcourt-summary__image">
            @endif
            <div class="beachcourt-summary__overlay">
                @if (Auth::check())                
                    <favorite
                        :beachcourt={{ $beachcourt->id }}
                        :favorited={{ $beachcourt->favorited() ? 'true' : 'false' }}
                    ></favorite>
                @endif
                <h3 class="beachcourt-summary__title"><a href="{{ URL::route('beachcourts.show', array('city'=>$beachcourt->citySlug,'latitude'=>$beachcourt->latitude,'longitude'=>$beachcourt->longitude,)) }}">Beachvolleyballfeld </a></h3>
                <p class="-typo-copy--large -text-color-white -font-primary -align-center">{{ $beachcourt->postalCode }} {{ $beachcourt->city }} <br>{{ $beachcourt->street }}  {{ $beachcourt->houseNumber }} </p>
                <span class="beachcourt-summary__distance">
                    <span class="icon icon--distance beachcourt-summary__icon-distance"></span>
                    <?php 
                        $distance = round($beachcourt->distance, 1)*2;
                        $distance = str_replace('.', ',', $distance);
                    ?>
                    {{ $distance }} km entfernt
                </span>
                <div class="beachcourt-summary__location">
                    <span class="beachcourt-summary__coordinate">
                    @if ($beachcourt->courtCountOutdoor > 0) 
                        Felder outdoor: {{ $beachcourt->courtCountOutdoor }}
                    @endif 

                    @if ($beachcourt->courtCountIndoor > 0) 
                        <br>Felder Indoor: {{ $beachcourt->courtCountIndoor }} </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endforeach

    {{ $beachcourts->links() }}