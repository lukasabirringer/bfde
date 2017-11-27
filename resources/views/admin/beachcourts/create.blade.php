@extends('layouts.admin')

@section('content')

<div class="container">
		<div class="row">
				<div class="col-xs-12"> 

				
<form class="form-horizontal" action="{{ URL::route('adminBeachcourt.store') }}" method="POST">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

			  <div class="form-group">
			    <label for="postalCode" class="col-sm-2 control-label">PLZ</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="postalCode" placeholder="Hier tippen ;)">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="city" class="col-sm-2 control-label">Stadt/Ort</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="city" placeholder="Hier tippen ;)">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="street" class="col-sm-2 control-label">Straße</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="street" placeholder="Hier tippen ;)">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="houseNumber" class="col-sm-2 control-label">Hausnummer</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="houseNumber" placeholder="Hier tippen ;)">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="country" class="col-sm-2 control-label">Land</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="country" placeholder="Hier tippen ;)">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="state" class="col-sm-2 control-label">Bundesland</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="state" placeholder="Hier tippen ;)">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="latitude" class="col-sm-2 control-label">Latitude</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="latitude" placeholder="Hier tippen ;)">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="longitude" class="col-sm-2 control-label">Longitude</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="longitude" placeholder="Hier tippen ;)">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="operator" class="col-sm-2 control-label">Betreiber</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="operator" placeholder="Hier tippen ;)">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="operatorURL" class="col-sm-2 control-label">Webseite des Betreibers</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="operatorURL" placeholder="Hier tippen ;)">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="chargeable" class="col-sm-2 control-label">kostenpflichtig</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="chargeable" placeholder="Hier tippen ;)">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="courtCountOutdoor" class="col-sm-2 control-label">Felder Outdoor</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="courtCountOutdoor" placeholder="Hier tippen ;)">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="courtCountIndoor" class="col-sm-2 control-label">Felder Indoor</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="courtCountIndoor" placeholder="Hier tippen ;)">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="public" class="col-sm-2 control-label">öffentlich zugänglich</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="public" placeholder="Hier tippen ;)">
			    </div>
			  </div>
			  <div class="form-group">
			    
			    <div class="col-sm-10">
			      <input class="btn btn-primary" type="submit" name="" value="speichern">
			    </div>
			  </div>



			</form>



				</div>
		</div>
</div>

@endsection