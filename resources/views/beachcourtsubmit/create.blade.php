@extends('layouts.frontend')

@section('content')

<div class="content">
	<div class="row -spacing-widget-default">
		<div class="column column--12">
			<div class="header-page">
				<h1 class="header-page__title -text-color-blue-2">Beachvolleyballfeld submitten</h1>
				<form class="form-horizontal" action="{{ url('/beachcourtsubmit/') }}" method="POST">

    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	
			   <div class="form-group">
			    <label for="postalCode" class="col-sm-2 control-label">postalCode</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="postalCode" placeholder="Hier tippen ;)">
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
	</div>


@endsection