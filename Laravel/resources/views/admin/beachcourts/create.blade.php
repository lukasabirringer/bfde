@extends('layouts.admin')

@section('content')

<div class="container">
		<div class="row">
				<div class="col-xs-12"> 

				
<form class="form-horizontal" action="/admin/pages/" method="POST">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
			  <div class="form-group">
			    <label for="pageName" class="col-sm-2 control-label">Name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="pageName" placeholder="Hier tippen ;)">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="pageDescription" class="col-sm-2 control-label">Kurzbeschreibung</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="pageDescription" placeholder="Hier tippen ;)">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="pageContent" class="col-sm-2 control-label">Inhalt</label>
			    <div class="col-sm-10">
			    	<textarea class="form-control" name="pageContent" rows="10" placeholder="Hier tippen ;)"></textarea>
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