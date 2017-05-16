
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
<hr>
<a href="{{ URL::previous() }}">Zurück zur Übersicht</a>
<hr>

</div>
</div>
</div>

@endsection