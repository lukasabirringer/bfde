<ul class="list-beachcourt ">
    @forelse ($subs as $mySubmittedBeachcourt)
        
        <li class="list-beachcourt__item">
            <div class="list-beachcourt__image">
                @if(!empty($mySubmittedBeachcourt->picturePath ) > 0)
                <img src="/uploads/beachcourts/submitted/{{ $mySubmittedBeachcourt->id }}/hero/{{ $mySubmittedBeachcourt->picturePath }}" class="image">
                @else
                <img src="/uploads/beachcourts/standard/list-view-image/beachcourt-list-blind-image.jpg" class="image">
                @endif
            </div>
            <div class="list-beachcourt__title-container column--12 column--s-4">
                <h5 class="list-beachcourt__title">{{ $mySubmittedBeachcourt->city }}</h5>
                <p class="list-beachcourt__date"> @lang('eingereicht am'):<br> {{ $mySubmittedBeachcourt->created_at }} </p>
            </div>
            <div class="list-beachcourt__coordinates-container column--12 column--s-3">
                <h5 class="list-beachcourt__title">@lang('Status')</h5>
                <p class="list-beachcourt__coordinates">{{ $mySubmittedBeachcourt->submitState }}</p>
            </div>
            <div class="list-beachcourt__action">

                <form action="{{ url('unfavorite/'.$mySubmittedBeachcourt->id) }}" class="list-beachcourt__form" method="POST">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

                    <button type="submit" class="button-icon list-beachcourt__button">
                        <span class="button-icon__icon icon icon--delete"></span>
                    </button>
                </form>
            </div>
        </li>
        
    @empty
        <div class="column column--12 -spacing-inner-a -background-gray-3">
          <p class="icon icon--plus -typo-headline-1 -text-color-blue-2 -align-center"></p>
          <p class="-typo-copy--large -text-color-blue-2 -font-primary -align-center -spacing-static-b">@lang('Du hast noch kein Beachvolleyballfeld eingereicht.')</p>
          <p class="-typo-copy--large -text-color-green -font-primary -align-center -spacing-static-b">
              <a href="{{ url('beachcourts') }}">@lang('Schlage uns doch ein Feld vor, welches wir aufnehmen sollen')</a>
          </p>  
        </div>
    @endforelse
</ul>
