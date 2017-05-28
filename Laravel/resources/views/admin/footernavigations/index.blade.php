@extends('layouts.admin')

@section('content')

<div class="container">
		<div class="row">
				<div class="col-xs-12"> 

				<h2>footernavigation</h2>
				
				<hr>
				<a href="{{ url('admin/footernavigations/create') }}"><button type="button" class="btn btn-primary">Neuen Menüpunkt erstellen</button></a>
				<br><br>
				
				<h3>Footer-Menü Links</h3>
				<table class="table table-striped"> 
						<thead> 
								<tr> 
										<th class="col-md-1">ID</th> 
										<th class="col-md-2">Seitenname</th> 
										<th class="col-md-2">Position</th> 
										<th class="col-md-3">Optionen</th> 
								</tr> 
						</thead> 
						<tbody> 
								@foreach ($footernavigations as $footernavigation)
								   @if ($footernavigation->position == 'left')
							       
							   
												<form action="{{ url('admin/footernavigations/'.$footernavigation->id) }}" method="POST">
								<tr> 
										<td>{{ $footernavigation->id }}</td>
										<td>{{ $footernavigation->page_name }}</td>
										<td>{{ $footernavigation->position }} </td>
										<td>
												<a href="{{ url('admin/footernavigations/'.$footernavigation->id) }}">
													<button type="button" class="btn btn-default">
														<span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> Öffnen
													</button>
												</a>
												
												<a href="{{ url('admin/footernavigations/'.$footernavigation->id.'/edit/') }}">
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
								</tr>  @endif
								@endforeach
						</tbody> 
				</table>
				
				<h3>Footer-Menü Mitte</h3>
				<table class="table table-striped"> 
						<thead> 
								<tr> 
										<th class="col-md-1">ID</th> 
										<th class="col-md-2">Seitenname</th> 
										<th class="col-md-2">Position</th> 
										<th class="col-md-3">Optionen</th> 
								</tr> 
						</thead> 
						<tbody> 
								@foreach ($footernavigations as $footernavigation)
								   @if ($footernavigation->position === 'middle')
							      
												<form action="{{ url('admin/footernavigations/'.$footernavigation->id) }}" method="POST">
								<tr> 
										<td>{{ $footernavigation->id }}</td>
										<td>{{ $footernavigation->page_name }}</td>
										<td>{{ $footernavigation->position }} </td>
										<td>
												<a href="{{ url('admin/footernavigations/'.$footernavigation->id) }}">
													<button type="button" class="btn btn-default">
														<span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> Öffnen
													</button>
												</a>
												
												<a href="{{ url('admin/footernavigations/'.$footernavigation->id.'/edit/') }}">
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
							    @endif
								@endforeach
						</tbody> 
				</table>

				<h3>Footer-Menü Rechts</h3>
				<table class="table table-striped"> 
						<thead> 
								<tr> 
										<th class="col-md-1">ID</th> 
										<th class="col-md-2">Seitenname</th> 
										<th class="col-md-2">Position</th> 
										<th class="col-md-3">Optionen</th> 
								</tr> 
						</thead> 
						<tbody> 
								@foreach ($footernavigations as $footernavigation)
								   @if ($footernavigation->position === 'right')
							      
												<form action="{{ url('admin/footernavigations/'.$footernavigation->id) }}" method="POST">
								<tr> 
										<td>{{ $footernavigation->id }}</td>
										<td>{{ $footernavigation->page_name }}</td>
										<td>{{ $footernavigation->position }} </td>
										<td>
												<a href="{{ url('admin/footernavigations/'.$footernavigation->id) }}">
													<button type="button" class="btn btn-default">
														<span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> Öffnen
													</button>
												</a>
												
												<a href="{{ url('admin/footernavigations/'.$footernavigation->id.'/edit/') }}">
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
							    @endif
								@endforeach
						</tbody> 
				</table>
		</div>
</div>

@endsection