@extends('layouts.admin')

@section('content')

<div class="container">
		<div class="row">
				<div class="col-xs-12"> 

	
<form class="form-horizontal" action="{{ URL::route('adminUser.update', $user->id) }}" method="POST">
<input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
			  <div class="form-group">
			    <label for="userName" class="col-sm-2 control-label">Name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="userName" value="{{ $user->name }}">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="userEmail" class="col-sm-2 control-label">E-Mail-Adresse</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="userEmail" value="{{ $user->email }}">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="firstName" class="col-sm-2 control-label">Vorname</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="firstName" value="{{ $user->firstName }}">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="lastName" class="col-sm-2 control-label">Nachname</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="lastName" value="{{ $user->lastName }}">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="postalCode" class="col-sm-2 control-label">PLZ</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="postalCode" value="{{ $user->postalCode }}">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="city" class="col-sm-2 control-label">Stadt</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="city" value="{{ $user->city }}">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="birthdate" class="col-sm-2 control-label">Geburtstag</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="birthdate" value="{{ $user->birthdate }}">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="sex" class="col-sm-2 control-label">Geschlecht</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="sex" value="{{ $user->sex }}">
			    </div>
			  </div>


			  <div class="form-group">
			    <label for="userRole" class="col-sm-2 control-label">Rolle</label>
			    <div class="col-sm-10">
			      <select class="form-control" name="userRole" class="selectpicker">
						  <optgroup label="aktuelle Rolle">
						    <option>{{ $user->role }}</option>
						  </optgroup>
						  <optgroup label="neue Rolle">
						    <option value="registrated">registrated</option>
                <option value="betreiber">betreiber</option>
                <option value="admin">admin</option>
						  </optgroup>
						</select>

			    </div>
			  </div>

	

			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-primary">Speichern</button>
			    </div>
			  </div>

			</form>

			<p>Letztes Update: {{ $user->updated_at }}</p>

				</div>
		</div>
</div>

@endsection