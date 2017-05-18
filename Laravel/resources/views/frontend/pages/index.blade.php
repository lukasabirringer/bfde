
@extends('layouts.frontend')

@section('content')
<div class="container">
<div class="row">
<div class="col-xs-12"> 
<h1>Pages-Listing</h1>
<hr>
@foreach ($pages as $page)
<p>Name: <a href="{{ url('pages/'.$page->id) }}">{{ $page->name }}</a></p>

<p>Beschreibung: {{ $page->description }}</p>
<p>Inhalt: {{ $page->content }}</p>
<hr>
@endforeach
</div>
</div>
</div>

@endsection

