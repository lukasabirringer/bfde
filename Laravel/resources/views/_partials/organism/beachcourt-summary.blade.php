@foreach ($beachcourts as $beachcourt)
    <div class="column column--12 column--s-6 column--m-4 -spacing-c">
        <div class="beachcourt-summary" >
            <img src="http:&#x2F;&#x2F;beachfelder.de&#x2F;img&#x2F;beachcourt-summary-bg-dummy.jpg" class="beachcourt-summary__image">

            <div class="beachcourt-summary__overlay">
                @if (Auth::check())                
                    <favorite
                        :beachcourt={{ $beachcourt->id }}
                        :favorited={{ $beachcourt->favorited() ? 'true' : 'false' }}
                    ></favorite>
                @endif
                <h3 class="beachcourt-summary__title"><a href="{{ URL::route('beachcourts.show', array('city'=>$beachcourt->citySlug,'latitude'=>$beachcourt->latitude,'longitude'=>$beachcourt->longitude,)) }}">{{ $beachcourt->courtName }}</a></h3>
                <p class="-typo-copy--large -text-color-white -font-primary"> {{ $beachcourt->city }} </p>
                <span class="beachcourt-summary__distance">
                    <span class="icon icon--distance beachcourt-summary__icon-distance"></span>
                    <?php 
                        $distance = round($beachcourt->distance, 1)*2;
                        $distance = str_replace('.', ',', $distance);
                    ?>
                    {{ $distance }} km entfernt
                </span>
            
                @if ($beachcourt->latitude !== '')
                    <div class="beachcourt-summary__location">
                        <span class="beachcourt-summary__icon-location icon icon--map-marker"></span>
                        <span class="beachcourt-summary__coordinate">{{ $beachcourt->latitude }} <br> {{ $beachcourt->longitude }} </span>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endforeach

    {{ $beachcourts->links() }}