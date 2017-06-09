
@extends('layouts.frontend')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12"> 
			<a href="{{ URL::previous() }}">Zurück zur Übersicht</a>
			<h1>Profil von {{ $profile->name }}</h1>
			
			<img width="300px" src="/uploads/profilePictures/{{ $profilepicture }}"></img>

			<form method="POST" action="{{ url('profile/uploadprofilepicture/') }}" enctype="multipart/form-data">
					{{ csrf_field() }}

					<input type="file" name="profilePicture">

					<button type="submit">Profilbild speichern</button>

			</form>
			<form method="POST" action="{{ url('profile/') }}">
					{{ csrf_field() }}

					<!-- USERNAME -->
					<div class="form-group row">
					  <label for="newName" class="col-2 col-form-label">Username</label>
					  <div class="col-10">
					    <input name="newName" class="form-control" type="text" value="{{ $profile->name }}">
					  </div>
					</div>
					<!-- Vorname -->
					<div class="form-group row">
					  <label for="newVorname" class="col-2 col-form-label">Vorname</label>
					  <div class="col-10">
					    <input name="newVorname" class="form-control" type="text" value="{{ $profile->firstName }}">
					  </div>
					</div>
					<!-- Nachname -->
					<div class="form-group row">
					  <label for="newNachname" class="col-2 col-form-label">Nachname</label>
					  <div class="col-10">
					    <input name="newNachname" class="form-control" type="text" value="{{ $profile->lastName }}">
					  </div>
					</div>
					<!-- PLZ -->
					<div class="form-group row">
					  <label for="newPLZ" class="col-2 col-form-label">PLZ</label>
					  <div class="col-10">
					    <input name="newNPLZ" class="form-control" type="text" value="{{ $profile->postalCode }}">
					  </div>
					</div>
					<!-- Wohnort -->
					<div class="form-group row">
					  <label for="newWohnort" class="col-2 col-form-label">Wohnort</label>
					  <div class="col-10">
					    <input name="newWohnort" class="form-control" type="text" value="{{ $profile->city }}">
					  </div>
					</div>
					<!-- Geburtstag -->
					<div class="form-group row">
					  <label for="newGeburtstag" class="col-2 col-form-label">Geburtstag (im Format: YYYY-MM-DD)</label>
					  <div class="col-10">
					    <input name="newGeburtstag" class="form-control" type="text" value="{{ $profile->birthdate }}">
					  </div>
					</div>
					<!-- Email -->
					<div class="form-group row">
					  <label for="newEmail" class="col-2 col-form-label">Email</label>
					  <div class="col-10">
					    <input name="newEmail" class="form-control" type="text" value="{{ $profile->email }}">
					  </div>
					</div>
					<!-- Passwort -->
					<div class="form-group row">
					  <label for="newPasswort" class="col-2 col-form-label">Passwort</label>
					  <div class="col-10">
					    <input name="newPasswort" class="form-control" type="password" value="{{ $profile->password }}">
					  </div>
					</div>

					<button type="submit">Daten speichern</button>

			</form>




			<hr>

			<h1>Meine Favoriten</h1>
			<div class="container">
			    <div class="row">
			        <div class="col-md-12">
			            @forelse ($myFavorites as $myFavorite)
			                <div class="panel panel-default">
			                    <div class="panel-heading">
			                        {{ $myFavorite->courtName }}
			                    </div>

			                    <div class="panel-body">
			                        {{ $myFavorite->city }}
			                    </div>
			                    @if (Auth::check())
			                        <div class="panel-footer">
			                            <favorite
			                                :beachcourt={{ $myFavorite->id }}
			                                :favorited={{ $myFavorite->favorited() ? 'true' : 'false' }}
			                            ></favorite>
			                        </div>
			                    @endif
			                </div>
			            @empty
			                <p>You have no favorite posts.</p>
			            @endforelse
			         </div>
			    </div>
			</div>
		

		</div>
	</div>
</div>

@endsection