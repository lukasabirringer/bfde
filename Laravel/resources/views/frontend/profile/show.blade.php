
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
				<div class="profile-user__image-container">
					@if($profile->pictureName !== '' )
						<img src="/uploads/profilePictures/{{ $profilepicture }}" class="profile-user__image">
						<div class="multifunctional-menu icon icon--edit profile-user__multifunctional-menu"></div>

						<div class="context-menu profile-user-image__context-menu">
						    <form method="POST" action="{{ url('profile/uploadprofilepicture/') }}" enctype="multipart/form-data">
						    	{{ csrf_field() }}

							    <label class="input-fileupload">
							    	<input type="file" name="profilePicture" class="input-fileupload__field" data-multiple-caption="{count} files selected" />
							    	<span class="input-fileupload__icon icon icon--camera"></span>
							    	<span class="input-fileupload__label">@lang('Neues Profilbild hochladen')</span>
							    </label>

							    @include('_partials.molecules.button-icon', ['buttonIconType'=> 'submit','buttonIconIcon'=>'upload', 'buttonIconBackgroundcolor'=>' ', 'buttonIconCustomClass'=> 'context-menu__button profile-user-image__button' ])
						    </form>
						    <form action="#" method="POST">
						    	<input name="_method" type="hidden" value="DELETE">
						    	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

						    	<button class="button context-menu__button button--red" type="submit">
						    		<span class="button__icon icon icon--delete"></span>
						    		<span class="button__label">Profilbild löschen</span>
						    	</button>
						    </form>
						</div>
					@else
						<p class="-typo-copy--large -text-color-blue-2 -font-primary">
							@lang('Leider hast du noch kein Profilbild hochgeladen.')</p>

						<p class="-typo-copy--large -text-color-blue-2 -font-primary -spacing-static-b">
							@lang('Tipps für das perfekte Profilbild'):</p>						

						<ul class="list-common -spacing-static-b">
							<li class="list-common__item">
								<span class="list-common__icon icon icon--caret-right"></span>
								@lang('zeige uns dein schönstes Lächeln') @lang('oder')
							</li>
							<li class="list-common__item">
								<span class="list-common__icon icon icon--caret-right"></span>
								@lang('zeige dich in Action')
							</li>
						</ul>


						<form method="POST" action="{{ url('profile/uploadprofilepicture/') }}" enctype="multipart/form-data">
							{{ csrf_field() }}

							<label class="input-fileupload -spacing-static-d">
								<input type="file" name="profilePicture" class="input-fileupload__field" data-multiple-caption="{count} files selected" />
								<span class="input-fileupload__icon icon icon--camera"></span>
								<span class="input-fileupload__label">@lang('Profilbild hochladen')</span>
							</label>

							@include('_partials.molecules.button-icon', ['buttonIconType'=> 'submit','buttonIconIcon'=>'upload', 'buttonIconBackgroundcolor'=>' ', 'buttonIconCustomClass'=> 'profile-user-image__button' ])

						</form>
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
					@include('_partials.molecules.button', ['buttonType'=>'submit', 'buttonLinkTarget'=>'', 'buttonIcon'=>'check', 'buttonLabel'=>'Änderungen speichern', 'buttonCustomClass'=>' ', 'buttonBackgroundcolor'=>' ' ])
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
			<div class="header-page" id="my-favorites">
				<h1 class="header-page__title  -text-color-blue-2 ">@lang('Meine Favoriten')</h1>
			</div>
		</div>
		<div class="column column--12 -spacing-f">
			@include('_partials.organism.list-beachcourt')
		</div>
	</div>
</div>

@include('_partials.organism.footer')

@endsection