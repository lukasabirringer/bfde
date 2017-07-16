<p>Filter
Rating
mind:
<form method="GET" action="/profile/{{ Auth::user()->id }}">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
  <select name="min">
      <option selected="selected" disabled>{{ $min }}</option>
      <option>0</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select>
bis
 <select name="max">
      <option selected="selected" disabled>{{ $max }}</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
<br>
<input type="submit"  value="filtern" name="">
</form>
</p>
<ul class="list-beachcourt ">
    @forelse ($myFavorites as $myFavorite)
        <a href="{{ url('beachcourts/'.$myFavorite->id) }}" class="list-beachcourt__link">
            <li class="list-beachcourt__item">
                <div class="list-beachcourt__image">
                    @if(!empty($myFavorite->picturePath ) > 0)
                    <img src="/uploads/beachcourts/{{ $myFavorite->id }}/hero/{{ $myFavorite->picturePath }}" alt="Beachcourt Name" class="image">
                    @else
                    <img src="/uploads/beachcourts/standard/heroimage/fallback.jpg" alt="Beachcourt Name" class="image">
                    @endif
                </div>
                <div class="list-beachcourt__title-container column--12 column--s-4">
                    <h5 class="list-beachcourt__title">{{ $myFavorite->courtName }}</h5>
                    <p class="list-beachcourt__date"> @lang('hinzugefügt am'):<br> {{ $myFavorite->created_at }} </p>
                </div>
                <div class="list-beachcourt__coordinates-container column--12 column--s-3">
                    <h5 class="list-beachcourt__title">@lang('Koordinaten')</h5>
                    <p class="list-beachcourt__coordinates">{{ $myFavorite->latitude }} <br> {{ $myFavorite->longitude }}</p>
                </div>
                <p>
                    {{ str_limit($myFavorite->realRating, $limit = 3, $end = '') }} ({{ $myFavorite->ratingCount }} Stimmen)</span>
                    @if (($myFavorite->ratingCount) < 10)
                        Dieses Rating stammt von beachfelder.de
                    @else
                        Dieses Rating stammt von den Usern
                    @endif
                </p>
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
