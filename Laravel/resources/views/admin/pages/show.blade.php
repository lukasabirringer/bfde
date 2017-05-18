
@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12"> 
			<h1>Name: {{ $page->name }}</h1>

			<h2>Beschreibung: {{ $page->description }}</h2>
			<h3>Inhalt: {{ $page->content }}</h3>

			<a href="{{ URL::previous() }}">Zurück zur Übersicht</a>
			
			<hr>

		</div>
	</div>
</div>

@endsection