
@extends('layouts.frontend')

@section('content')
<div class="container">
<div class="row">
<div class="col-xs-12"> 
<h1>Beachfeld-Listing</h1>
<hr>
@foreach ($beachcourts as $beachcourt)
<p>Name: <a href="/beachcourts/{{ $beachcourt->id }}">{{ $beachcourt->courtName }}</a></p>
<p>in {{ $beachcourt->city }}</p>
<p>owned by {{ $beachcourt->organization }}</p>
<hr>
@endforeach
</div>
</div>
</div>

@endsection

