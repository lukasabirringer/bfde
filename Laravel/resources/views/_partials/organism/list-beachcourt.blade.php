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
                <div class="list-beachcourt__coordinates-container column--4 column--s-1">
                    <h5 class="list-beachcourt__title">@lang('Koordinaten')</h5>
                    <p class="list-beachcourt__coordinates"> 48.806320<br>8.820813 </p>
                </div>
                <div class="list-beachcourt__benefits column--3">
                    <ul class="list-beachcourt__icon-list">
                        <li><span class="icon icon--shower"></span></li>
                        <li><span class="icon icon--eating"></span></li>
                        <li><span class="icon icon--parking"></span></li>
                    </ul>
                </div>
                <div class="list-beachcourt__action">
                    <form action="#" method="post" class="list-beachcourt__form">
                    {{ csrf_field() }}
                        <button type="submit" class="button-icon list-beachcourt__button">
                            <span class="button-icon__icon icon icon--delete"></span>
                        </button>
                    </form>
                </div>
            </li>
        </a>
    @empty
        <p class="-typo-copy--large -text-color-blue-2 -font-primary">@lang('Du hast noch keine Favoriten gespeichert.')</p>
    @endforelse
</ul>
