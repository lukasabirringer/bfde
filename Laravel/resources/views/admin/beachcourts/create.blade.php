@extends('layouts.admin')

@section('content')

<div class="container">
		<div class="row">
				<div class="col-xs-12"> 

				
<form class="form-horizontal" action="{{ url('admin/beachcourts/') }}" method="POST">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
			  <div class="form-group">
			    <label for="courtName" class="col-sm-2 control-label">Feld-Name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="courtName" placeholder="Hier tippen ;)">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="city" class="col-sm-2 control-label">Ort</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="city" placeholder="Hier tippen ;)">
			    </div>
			  </div>

			  

			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-primary">Erstellen</button>
			    </div>
			  </div>

			</form>



				</div>
		</div>
</div>

@endsection