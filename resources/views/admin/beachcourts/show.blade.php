
@extends('layouts.admin')

@section('content')
<div class="container">
<div class="row">
<div class="col-xs-12"> 
<h1>Das ist das Beachfeld {{ $beachcourt->courtName }} in {{ $beachcourt->city }}</h1>
<p>Rating:<span> <b>{{ str_limit($beachcourt->realRating, $limit = 3, $end = '') }}</b> ({{ $beachcourt->ratingCount }} Stimmen)</span>
@if (($beachcourt->ratingCount) < 10)
    Dieses Rating stammt von beachfelder.de
@else
    Dieses Rating stammt von den Usern
@endif
</p>
<p>PLZ: {{ $beachcourt->postalCode }}</p>
<p>Stadt: {{ $beachcourt->city }}</p>
<p>Straße: {{ $beachcourt->street }}</p>
<p>Hausnummer: {{ $beachcourt->houseNumber }}</p>
<p>Land: {{ $beachcourt->country }}</p>
<p>Bundesland: {{ $beachcourt->state }}</p>
<p>Latitude: {{ $beachcourt->latitude }}</p>
<p>Longitude: {{ $beachcourt->longitude }}</p>
<p>Betreiber: {{ $beachcourt->operator }}</p>
<p>Webseite des Betreibers: {{ $beachcourt->operatorURL }}</p>
<p>Kostenpflichtig?: {{ $beachcourt->chargeable }}</p>
<p>Plätze Outdoor: {{ $beachcourt->courtCountOutdoor }}</p>
<p>Plätze Indoor: {{ $beachcourt->courtCountIndoor }}</p>
<p>öffentlich zugänglich: {{ $beachcourt->public }}</p>
<hr>
<a href="{{ URL::previous() }}">Zurück zur Übersicht</a>
<hr>

</div>
</div>
</div>

@endsection