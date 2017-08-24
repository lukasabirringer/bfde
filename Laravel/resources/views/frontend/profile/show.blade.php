
@extends('layouts.frontend')

@section('content')


<div class="row row--zero">
    <div class="column column--12 column--zero">
        <div class="hero-image-beachcourt-detail " style="background-image: url(http://beachfelder.de/img/header-image.jpg)">
        	<div class="hero-image-beachcourt-detail__overlay">
        		@if($eigenesprofil === 'true' )
        			<h1 class="hero-image-beachcourt-detail__title">@lang('Willkommen'), {{ $profile->name }}</h1>
        		@else
        			<h1 class="hero-image-beachcourt-detail__title">@lang('Profil') @lang('von') {{ $profile->name }}</h1>
        		@endif
        	</div>
        </div>
    </div>
</div>

<div class="profile-user__image-container">
	@if($profile->pictureName !== 'placeholder-user.png' )
		<img src="/uploads/profilePictures/{{ $profilepicture }}" class="profile-user__image">
		@if($eigenesprofil === 'true' )
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

			    @include('_partials.molecules.button', ['buttonType' => 'button', 'buttonIcon' =>'delete', 'buttonLabel' => 'Profilbild löschen', 'buttonLinkTarget' => 'profile/deleteimage', 'buttonCustomClass' => 'context-menu__button', 'buttonBackgroundcolor' => 'red', 'buttonJavaScript' => ''])
			</div>
		@endif
	@else
		<img src="/uploads/profilePictures/fallback/placeholder-user.png" class="image">
		@if($eigenesprofil === 'true' )
			<form method="POST" action="{{ url('profile/uploadprofilepicture/') }}" enctype="multipart/form-data" style="position: absolute; top: 0;">
				{{ csrf_field() }}

				<label class="input-fileupload -spacing-static-d">
					<input type="file" name="profilePicture" class="input-fileupload__field" data-multiple-caption="{count} files selected" />
					<span class="input-fileupload__icon icon icon--camera"></span>
					<span class="input-fileupload__label">@lang('Profilbild hochladen')</span>
				</label>

				@include('_partials.molecules.button-icon', ['buttonIconType'=> 'submit','buttonIconIcon'=>'upload', 'buttonIconBackgroundcolor'=>' ', 'buttonIconCustomClass'=> 'profile-user-image__button' ])
			</form>
		@endif
	@endif
</div>

<div class="content">
	<div class="row -spacing-widget-default">
		<div class="column column--12">
			<div class="header-page">
				@if($eigenesprofil === 'true' )
					<h1 class="header-page__title -text-color-blue-2">@lang('mein profil')</h1>
					<div class="multifunctional-menu icon icon--edit button--edit" onclick="load_modal_editUserProfile()"></div>
				@else
					<h1 class="header-page__title -text-color-blue-2">@lang('Profil') @lang('von') {{ $profile->name }}</h1>
    			@endif
			</div>
		</div>
	</div>
</div>

<div class="profile-user -spacing-f">
	<div class="content">
		<div class="row">
			<div class="column column--12">
				<dl class="profile-user__details">
				@if($eigenesprofil === 'true' )
					<dt class="profile-user__label">@lang('Username')</dt>
					<dd class="profile-user__info">
						{{ $profile -> name }}
					</dd>
					<dt class="profile-user__label">@lang('Vorname')</dt>
					<dd class="profile-user__info">
						{{ $profile -> firstName }}
					</dd>
					<dt class="profile-user__label">@lang('Nachname')</dt>
					<dd class="profile-user__info">
						{{ $profile -> lastName }}
					</dd>
					<dt class="profile-user__label">@lang('Geburtsdatum')</dt>
					<dd class="profile-user__info">
						@if ( $profile -> birthdate =='' )
							<span class="-text-color-gray-2 -font-primary -typo-copy">Dein Geburtstag</span>
						@else
							{{ $profile -> birthdate }}
						@endif
					</dd>
					<dt class="profile-user__label">@lang('PLZ')</dt>
					<dd class="profile-user__info">
						@if ( $profile -> postalCode =='' )
							<span class="-text-color-gray-2 -font-primary -typo-copy">Deine PLZ</span>
						@else
							{{ $profile -> postalCode }}
						@endif
					</dd>
					<dt class="profile-user__label">@lang('Wohnort')</dt>
					<dd class="profile-user__info">
						@if ( $profile -> city =='' )
							<span class="-text-color-gray-2 -font-primary -typo-copy">Dein Wohnort</span>
						@else
							{{ $profile -> city }}
						@endif
					</dd>
					<dt class="profile-user__label">@lang('E-Mail Adresse')</dt>
					<dd class="profile-user__info">
						{{ $profile -> email }} 
					</dd>
					<dt class="profile-user__label">@lang('Passwort')</dt>
					<dd class="profile-user__info">
						*******
					</dd>
				@else
					<dt class="profile-user__label">@lang('Geburtsdatum')</dt>
					<dd class="profile-user__info">
						@if ( $profile -> birthdate =='' )
							<span class="-text-color-gray-2 -font-primary -typo-copy">keine Angabe</span>
						@else
							{{ $profile -> birthdate }}
						@endif
					</dd>
					<dt class="profile-user__label">@lang('PLZ')</dt>
					<dd class="profile-user__info">
						@if ( $profile -> postalCode =='' )
							<span class="-text-color-gray-2 -font-primary -typo-copy">keine Angabe</span>
						@else
							{{ $profile -> postalCode }}
						@endif
					</dd>
					<dt class="profile-user__label">@lang('Wohnort')</dt>
					<dd class="profile-user__info">
						@if ( $profile -> city =='' )
							<span class="-text-color-gray-2 -font-primary -typo-copy">keine Angabe</span>
						@else
							{{ $profile -> city }}
						@endif
					</dd>
    			@endif
				</dl>
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
			<div class="header-page" id="meine-favoriten">
				@if($eigenesprofil === 'true' )
				<h1 class="header-page__title  -text-color-blue-2 ">@lang('Meine Favoriten')</h1>
				@else
				<h1 class="header-page__title  -text-color-blue-2 ">@lang('Favoriten von') {{ $profile->name }}</h1>
    		@endif
			</div>
		</div>
		<div class="column column--12 -spacing-f">
			@include('_partials.organism.list-beachcourt')
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
				@if($eigenesprofil === 'true' )
				<h1 class="header-page__title  -text-color-blue-2 ">@lang('Meine eingereichten Beachcourts')</h1>
				@else
				<h1 class="header-page__title  -text-color-blue-2 ">@lang('eingereichte Beachcourts von') {{ $profile->name }}</h1>
    		@endif
			</div>
		</div>
		<div class="column column--12 -spacing-f">
			@include('_partials.organism.list-submitted-beachcourt')
		</div>
	</div>
</div>
@include('_partials.organism.footer')

@endsection