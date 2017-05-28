@extends('layouts.admin')

@section('content')

<div class="container">
		<div class="row">
				<div class="col-xs-12"> 

				<h2>Page-Listing</h2>
				
				<hr>
				<a href="{{ url('admin/pages/create') }}"><button type="button" class="btn btn-primary">Neue Page erstellen</button></a>
				<br><br>
				

				<table class="table table-striped"> 
						<thead> 
								<tr> 
										<th class="col-md-1">ID</th> 
										<th class="col-md-2">Name</th> 
										<th class="col-md-2">Beschreibung</th> 
										<th class="col-md-2">Slug</th> 
										<th class="col-md-2">sichtbar?</th> 
										<th class="col-md-3">Optionen</th> 
								</tr> 
						</thead> 
						<tbody> 
								@foreach ($pages as $page)
												<form action="{{ url('admin/pages/'.$page->slug) }}" method="POST">
								<tr> 
										<td>{{ $page->id }}</td>
										<td>{{ $page->name }}</td>
										<td>{{ $page->description }} </td>
										<td>{{ $page->slug }}</td>
										<td>{{ $page->visible }} </td>
										<td>
												<a href="{{ url('admin/pages/'.$page->slug) }}">
													<button type="button" class="btn btn-default">
														<span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> Öffnen
													</button>
												</a>
												
												<a href="{{ url('admin/pages/'.$page->slug.'/edit/') }}">
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
				
		</div>
</div>

@endsection