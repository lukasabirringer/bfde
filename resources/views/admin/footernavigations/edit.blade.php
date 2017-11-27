@extends('layouts.admin')

@section('content')

<div class="container">
		<div class="row">
				<div class="col-xs-12"> 


<form class="form-horizontal" action="{{ url('admin/footernavigations/'.$footernavigation->id) }}" method="POST">
<input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

			  <div class="form-group">
			    <label for="pageName" class="col-sm-2 control-label">Name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="pageName" value="{{ $footernavigation->page_name }}">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="menuPosition" class="col-sm-2 control-label">Beschreibung</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="menuPosition" value="{{ $footernavigation->position }}">
			    </div>
			  </div>

			 

			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-primary">Speichern</button>
			    </div>
			  </div>


			</form>

			<p>Letztes Update: {{ $footernavigation->updated_at }}</p>

				</div>
		</div>
</div>

@endsection