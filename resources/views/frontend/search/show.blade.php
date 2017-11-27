
@extends('layouts.frontend')

@section('content')

<div class="row row--zero">
        <div class="column column--12 column--zero">
            @include('_partials.molecules.hero-image', ['id' => 'standard', 'heroImage'=> 'fallback.jpg'])
        </div>
    </div>
</div>
<div class="content">
    <div class="row -spacing-widget-default">
        <div class="column column--12">
            <div class="header-page">
                <h1 class="header-page__title -text-color-blue-2">@lang('Suchergebnisse')</h1>
                <p>(Gesucht nach: {{ $query }}/{{ $place }})</p>
            </div>
        </div>
    </div>
    <div class="row ">
       
        @foreach ($beachcourts as $beachcourt)
            <div class="column column--12 column--s-6 column--m-4 -spacing-c">
                <div class="beachcourt-summary" >
                    <img src="http:&#x2F;&#x2F;beachfelder.de&#x2F;img&#x2F;beachcourt-summary-bg-dummy.jpg" class="beachcourt-summary__image">

                    <div class="beachcourt-summary__overlay">
                       
                     
                        <h3 class="beachcourt-summary__title"><a href="{{ url('beachcourts/'.$beachcourt->id) }}">{{ $beachcourt->courtName }}</a></h3>
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

    </div>
</div>

@include('_partials.organism.footer')

@endsection

