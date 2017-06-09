
             @foreach ($beachcourts as $beachcourt)
         <div class="column column--12 column--s-4">
    <div class="beachcourt-summary" >
        <img src="http:&#x2F;&#x2F;beachfelder.de&#x2F;img&#x2F;beachcourt-summary-bg-dummy.jpg" class="beachcourt-summary__image">

        <div class="beachcourt-summary__overlay">
             @if (Auth::check())
                                   
             <favorite
                :beachcourt={{ $beachcourt->id }}
                :favorited={{ $beachcourt->favorited() ? 'true' : 'false' }}
            ></favorite>
             @endif
             
            <h3 class="beachcourt-summary__title"><a href="{{ url('beachcourts/'.$beachcourt->id) }}">{{ $beachcourt->city }}</a></h3>
            <span class="beachcourt-summary__distance">
                <span class="icon icon--distance beachcourt-summary__icon-distance"></span>
                {{ $beachcourt->id }}km entfernt
            </span>
            <div class="beachcourt-summary__location">
                <span class="beachcourt-summary__icon-location icon icon--map-marker"></span>
                <span class="beachcourt-summary__coordinate">48.806320 <br> 8.820813</span>
            </div>

            <ul class="beachcourt-summary__benefits">
                    <li><span class="icon icon--shower"></span> </li>
                    <li><span class="icon icon--eating"></span> </li>
                    <li><span class="icon icon--parking"></span> </li>
            </ul>
        </div>

    </div>

            </div>

        @endforeach