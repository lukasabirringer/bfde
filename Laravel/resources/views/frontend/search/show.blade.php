
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
										<th class="col-md-3">Ort</th> 
										<th class="col-md-3">Betreiber</th> 
						</tr>
					
						</thead> 
						<tbody> 
					
							
						
						@foreach ($results as $innerArray) 

												       @foreach ($innerArray as $value) 

												        			 @foreach ($beachcourts as $beachcourt) 
												      						@if ($beachcourt->postalCode == $value)
												      							<tr>
																					   <td>{{ $beachcourt->courtName }}</td>
																					   <td>{{ $beachcourt->city }}</td>
																					   <td>{{ $beachcourt->operator }}</td>
																				   	</tr>
																					@endif
											       					@endforeach 
												  	@endforeach 
									@endforeach
								
					

			</tbody> 
				</table>
		</div>
	</div>
</div>

@endsection