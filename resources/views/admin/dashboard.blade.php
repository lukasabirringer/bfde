@extends('layouts.admin')

@section('content')

<div class="container">
		<div class="row">
				<div class="col-xs-12"> 

				<h2>Dashboard</h2>
				
				<hr>
				<div class="column column--12 -spacing-f">
					@include('_partials.organism.list-submitted-beachcourt')
				</div>
				
		</div>
</div>

@endsection