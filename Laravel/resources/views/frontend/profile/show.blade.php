
@extends('layouts.frontend')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12"> 
			<a href="{{ URL::previous() }}">Zurück zur Übersicht</a>
			<h1>Profil von {{ $profile->name }}</h1>
			<img width="300" src="https://www.xing.com/image/0_c_3_3fce34b38_15444149_3/fabian-pecher-foto.1024x1024.jpg">
			<p>Username: {{ $profile->name }}</p>
			<p>Vorname: {{ $profile->name }}</p>
			<p>Nachname: {{ $profile->name }}</p>
			<p>PLZ: {{ $profile->name }}</p>
			<p>Wohnort: {{ $profile->name }}</p>
			<p>Geburtsdatum: {{ $profile->name }}</p>
			<p>Email-Adresse: {{ $profile->email }}</p>
			<p>Passwort: {{ $profile->name }}</p>
			
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