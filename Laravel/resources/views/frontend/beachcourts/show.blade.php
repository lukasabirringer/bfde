
@extends('layouts.frontend')

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
<img src="https://www.zeltwiese-absberg.de/media/filer_public_thumbnails/filer_public/2d/96/2d96fb9c-3ef8-4458-932a-257d45009b24/beachvolleyball_tournir_aufschlag.jpg__1140x250_q85_crop_subsampling-2_upscale.jpg" style="width:100%; height:250px;">
<a href="{{ URL::previous() }}">Zurück zur Übersicht</a>
<hr>

</div>
</div>
</div>

@endsection