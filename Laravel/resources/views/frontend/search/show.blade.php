
@extends('layouts.frontend')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12"> 

			<a href="{{ URL::previous() }}">Zurück</a>
			<h1>Suchergebnisse</h1>


			<table class="table table-striped"> 
						<thead> 
							
							<tr> 
										<th class="col-md-3">Name</th> 
										<th class="col-md-3">Ort</th> </tr>
						
								 
						</thead> 
						<tbody> 

								<!-- @foreach ($results as $result => $name)	<tr> 
										<td class="col-md-3">{{ $name['zip'] }}</td> 
										<td class="col-md-3">{{ $name['city'] }}</td> 
								@endforeach
								<td>
								@foreach ($beachcourts as $beachcourt)a
								@endforeach
								</td>
</tr>  -->

		
			@foreach ($beachcourts as $beachcourt)
			@if ($beachcourt->postalCode == 'left')
				<tr>
					<td class="col-md-3">{{ $beachcourt->courtName }}</td> 
				</tr>
			@endforeach

			</tbody> 
				</table>
		</div>
	</div>
</div>

@endsection