@extends('layouts.admin')

@section('content')

<div class="container">
		<div class="row">
				<div class="col-xs-12"> 


<form class="form-horizontal" action="{{ URL::route('adminBeachcourtSubmit.update', $beachcourt->id) }}" method="POST">
<input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
			  <div class="form-group">
			    <label for="postalCode" class="col-sm-2 control-label">PLZ</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="postalCode" value="{{ $beachcourt->postalCode }}">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="city" class="col-sm-2 control-label">Stadt/Ort</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="city" value="{{ $beachcourt->courcitytName }}">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="street" class="col-sm-2 control-label">Straße</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="street" value="{{ $beachcourt->street }}">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="houseNumber" class="col-sm-2 control-label">Hausnummer</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="houseNumber" value="{{ $beachcourt->houseNumber }}">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="country" class="col-sm-2 control-label">Land</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="country" value="{{ $beachcourt->country }}">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="state" class="col-sm-2 control-label">Bundesland</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="state" value="{{ $beachcourt->state }}">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="latitude" class="col-sm-2 control-label">Latitude</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="latitude" value="{{ $beachcourt->latitude }}">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="longitude" class="col-sm-2 control-label">Longitude</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="longitude" value="{{ $beachcourt->longitude }}">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="operator" class="col-sm-2 control-label">Betreiber</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="operator" value="{{ $beachcourt->operator }}">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="operatorURL" class="col-sm-2 control-label">Webseite des Betreibers</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="operatorURL" value="{{ $beachcourt->operatorURL }}">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="chargeable" class="col-sm-2 control-label">kostenpflichtig</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="chargeable" value="{{ $beachcourt->chargeable }}">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="courtCountOutdoor" class="col-sm-2 control-label">Felder Outdoor</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="courtCountOutdoor" value="{{ $beachcourt->courtCountOutdoor }}">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="courtCountIndoor" class="col-sm-2 control-label">Felder Indoor</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="courtCountIndoor" value="{{ $beachcourt->courtCountIndoor }}">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="public" class="col-sm-2 control-label">öffentlich zugänglich</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="public" placeholder="Hier tippen ;)">
			    </div>
			  </div>

			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-primary">Speichern</button>
			    </div>
			  </div>

			</form>

			<p>Letztes Update: {{ $beachcourt->updated_at }}</p>

				</div>
		</div>
</div>

@endsection