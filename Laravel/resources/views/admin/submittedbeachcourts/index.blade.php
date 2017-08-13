@extends('layouts.admin')

@section('content')

<div class="container">
		<div class="row">
				<div class="col-xs-12"> 

				<h2>eingereichte Beachfelder</h2>
				
				<hr>
				
				<table class="table table-striped"> 
						<thead> 
								<tr> 
										<th class="col-md-1">ID</th> 
										<th class="col-md-2">Status</th> 
										<th class="col-md-3">Ort</th> 
										<th class="col-md-2">eingereicht von</th> 
										<th class="col-md-4">Optionen</th> 
								</tr> 
						</thead> 
						<tbody> 
								@foreach ($beachcourts as $beachcourt)
												<form action="{{ URL::route('adminBeachcourtSubmit.destroy', $beachcourt->id) }}" method="POST">
								<tr> 
										<td>{{ $beachcourt->id }}</td>
										<td>{{ $beachcourt->submitState }}</td>
										<td>{{ $beachcourt->postalCode }} {{ $beachcourt->city }}</td>
										<td>{{ $beachcourt->user_id }}</td>
										<td>
												<a href="{{ URL::route('adminBeachcourtSubmit.show', $beachcourt->id) }}">
													<button type="button" class="btn btn-default">
														<span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> Öffnen
													</button>
												</a>
												
												<a href="{{ URL::route('adminBeachcourtSubmit.edit', $beachcourt->id) }}">
													<button type="button" class="btn btn-info">
														<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Bearbeiten
													</button>
												</a>

												<input name="_method" type="hidden" value="DELETE">
												<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
												<a href="#" >
													<button type="submit" class="btn btn-danger">
														<span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Löschen
													</button>
												</form>
												</a>

										</td>
								</tr> 
								@endforeach
						</tbody> 
				</table>
				{{ $beachcourts->links() }}
		</div>
</div>

@endsection