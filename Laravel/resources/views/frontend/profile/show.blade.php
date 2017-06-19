
@extends('layouts.frontend')

@section('content')
<div class="row row--zero">
        <div class="column column--12 column--zero">
            @include('_partials.molecules.hero-image', ['id' => 'standard', 'heroImage'=> 'fallback.jpg'])
        </div>
    </div>
</div>
	
<div class="content">
	<div class="row -spacing-widget-default">
		<div class="column column--12">
			<div class="header-page">
				<h1 class="header-page__title -text-color-blue-2">@lang('mein profil')</h1>
			</div>
		</div>
	</div>
</div>

<div class="profile-user -spacing-f">
	<div class="content">
		<div class="row">
			<div class="column column--12 column--m-4">
				<div class="profile-user-image">
					@if($profile->pictureName !== '' )
						<img src="/uploads/profilePictures/{{ $profilepicture }}" class="image">
						<div class="profile-user-image__edit">
							<form method="POST" action="{{ url('profile/uploadprofilepicture/') }}" enctype="multipart/form-data">
								{{ csrf_field() }}
								<label class="input">
									<input type="file" class="input__field">
									<span class="input__icon icon icon--camera"></span>
								</label>
								@include('_partials.molecules.button-icon', ['buttonIconType'=> 'submit','buttonIconIcon'=>'check', 'buttonIconBackgroundcolor'=>' ', 'buttonIconCustomClass'=> ' ' ])
							</form>
						</div>
					@else
						<form method="POST" action="{{ url('profile/uploadprofilepicture/') }}" enctype="multipart/form-data">
							{{ csrf_field() }}
							<input type="file" name="profilePicture">
							
							@include('_partials.molecules.button', ['buttonType'=>'submit', 'buttonLinkTarget'=>'', 'buttonIcon'=>'check', 'buttonLabel'=>'Profilbild hochladen', 'buttonCustomClass'=>' ' ])
						</form>
						<p class="-typo-copy--large -text-color-blue-2 -font-primary">
							@lang('Leider hast du noch kein Profilbild hochgeladen.')</p>
					@endif
				</div>
			</div>

			<div class="column column--12 column--m-8">
				<h4 class="profile-user__title"> @lang('Allgemeine Informationen') </h4>
				<form method="POST" action="{{ url('profile/') }}">
					{{ csrf_field() }}
					<dl class="profile-user__details">
						<dt class="profile-user__label">@lang('Username')</dt>
						<dd class="profile-user__info">
							{{ $profile -> name }}
							<input name="newName" class="form-control" type="text" value="{{ $profile->name }}">
							<span class="icon icon--edit profile-user__icon"></span>
						</dd>
						<dt class="profile-user__label">@lang('Vorname')</dt>
						<dd class="profile-user__info">
							{{ $profile -> firstName }}
							<input name="newVorname" class="form-control" type="text" value="{{ $profile->firstName }}">
							<span class="icon icon--edit profile-user__icon"></span>
						</dd>
						<dt class="profile-user__label">@lang('Nachname')</dt>
						<dd class="profile-user__info">
							{{ $profile -> lastName }}
							<input name="newNachname" class="form-control" type="text" value="{{ $profile->lastName }}"> 
							<span class="icon icon--edit profile-user__icon"></span>
						</dd>
						<dt class="profile-user__label">@lang('Geburtsdatum')</dt>
						<dd class="profile-user__info">
							{{ $profile -> birthdate }} 
							<input name="newGeburtstag" class="form-control" type="text" value="{{ $profile->birthdate }}">
							<span class="icon icon--edit profile-user__icon"></span>
						</dd>
						<dt class="profile-user__label">@lang('E-Mail Adresse')</dt>
						<dd class="profile-user__info">
							{{ $profile -> email }} 
							<input name="newEmail" class="form-control" type="text" value="{{ $profile->email }}">
							<span class="icon icon--edit profile-user__icon"></span>
						</dd>
						<dt class="profile-user__label">@lang('PLZ')</dt>
						<dd class="profile-user__info">
							{{ $profile -> postalCode }}
							<input name="newNPLZ" class="form-control" type="text" value="{{ $profile->postalCode }}">
							<span class="icon icon--edit profile-user__icon"></span>
						</dd>
						<dt class="profile-user__label">@lang('Wohnort')</dt>
						<dd class="profile-user__info">
							{{ $profile -> city }}
							<input name="newWohnort" class="form-control" type="text" value="{{ $profile->city }}">
							<span class="icon icon--edit profile-user__icon"></span>
						</dd>
						<dt class="profile-user__label">@lang('Passwort')</dt>
						<dd class="profile-user__info">
							*******
							<input name="newPasswort" class="form-control" type="password" value="{{ $profile->password }}">
							<span class="icon icon--edit profile-user__icon"></span>
						</dd>
					</dl>
					@include('_partials.molecules.button', ['buttonType'=>'submit', 'buttonLinkTarget'=>'', 'buttonIcon'=>'check', 'buttonLabel'=>'Änderungen speichern', 'buttonCustomClass'=>' ' ])
				</form>
			</div>
		</div>
	</div>
</div>

<div class="content">
	<div class="row -spacing-widget-default">
		<div class="column column--12">
			<hr class="divider" />
		</div>
	</div>
	<div class="row -spacing-widget-default">
		<div class="column column--12">
			<div class="header-page ">
				<h1 class="header-page__title  -text-color-blue-2 ">Meine Favoriten</h1>
			</div>
		</div>
		<div class="column column--12 -spacing-f">
			@include('_partials.organism.list-beachcourt')
		</div>
	</div>
</div>

@include('_partials.organism.footer')

@endsection