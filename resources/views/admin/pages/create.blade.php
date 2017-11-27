@extends('layouts.admin')

@section('content')

<div class="container">
		<div class="row">
				<div class="col-xs-12"> 

				
<form class="form-horizontal" action="{{ url('admin/pages/') }}" method="POST">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
			  <div class="form-group">
			    <label for="pageName" class="col-sm-2 control-label">Seiten-Name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="pageName" placeholder="Hier tippen ;)">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="pageDescription" class="col-sm-2 control-label">Beschreibung</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="pageDescription" placeholder="Hier tippen ;)">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="pageContent" class="col-sm-2 control-label">Inhalt</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="pageContent" placeholder="Hier tippen ;)">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="pageSlug" class="col-sm-2 control-label">Slug</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="pageSlug" placeholder="Hier tippen ;)">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="pageVisible" class="col-sm-2 control-label">sichtbar?</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="pageVisible" placeholder="Hier tippen ;)">
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