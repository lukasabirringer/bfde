<ul class="list-beachcourt ">
    @forelse ($myFavorites as $myFavorite)
        <a href="{{ url('beachcourts/'.$myFavorite->id) }}" class="list-beachcourt__link">
            <li class="list-beachcourt__item">
                <div class="list-beachcourt__image">
                    <img src="https:&#x2F;&#x2F;dummyimage.com&#x2F;180x130&#x2F;f1f1f1&#x2F;333.jpg" alt="Beachcourt Name" class="image">
                </div>
                <div class="list-beachcourt__title-container column--12 column--s-4">
                    <h5 class="list-beachcourt__title">{{ $myFavorite->courtName }}</h5>
                    <p class="list-beachcourt__date"> @lang('hinzugefügt am'):<br> {{ $myFavorite->created_at }} </p>
                </div>
                <div class="list-beachcourt__coordinates-container column--12 column--s-3">
                    <h5 class="list-beachcourt__title">@lang('Koordinaten')</h5>
                    <p class="list-beachcourt__coordinates">{{ $myFavorite->latitude }} <br> {{ $myFavorite->longitude }}</p>
                </div>
                <div class="list-beachcourt__action">

                    <form action="{{ url('unfavorite/'.$myFavorite->id) }}" class="list-beachcourt__form" method="POST">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

                        <button type="submit" class="button-icon list-beachcourt__button">
                            <span class="button-icon__icon icon icon--delete"></span>
                        </button>
                    </form>
                </div>
            </li>
        </a>
    @empty
        <div class="column column--12 -spacing-inner-a -background-gray-3">
          <p class="icon icon--heart-o -typo-headline-1 -text-color-blue-2 -align-center"></p>
          <p class="-typo-copy--large -text-color-blue-2 -font-primary -align-center -spacing-static-b">@lang('Du hast noch keine Favoriten gespeichert.')</p>
          <p class="-typo-copy--large -text-color-green -font-primary -align-center -spacing-static-b">
              <a href="{{ url('beachcourts') }}">Füge dein erstes Beachvolleyballfeld hinzu</a>
          </p>  
        </div>
    @endforelse
</ul>
