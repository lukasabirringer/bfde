
@extends('layouts.frontend')

@section('content')


<div class="row row--zero">
    <div class="column column--12 column--zero">
		<div class="hero-image-profile " style="background-image: url('/uploads/profilePictures/{{ $profilepicture }}')">
			<div class="hero-image-profile__overlay">
				
				<div class="image-profile hero-image-profile__image">
					@if($profile->pictureName !== 'placeholder-user.png')
						<img src="/uploads/profilePictures/{{ $profilepicture }}"
							 class="image image-profile__image">
					@else 
						<img src="/uploads/profilePictures/fallback/placeholder-user.png"
							 class="image image-profile__image">
					@endif
					@if($eigenesprofil === 'true')
						<form method="POST" action="{{ url('profile/uploadprofilepicture/') }}" enctype="multipart/form-data">
							{{ csrf_field() }}
							<div class="image-profile__overlay">
								<label class="image-profile__upload">
									<input type="file" name="profilePicture" class="image-profile__field" data-multiple-caption="{count} files selected" />
									<span class="icon icon--camera image-profile__icon"></span>
									<span class="image-profile__label"> </span>	
								</label>

								<span class="icon icon--delete image-profile__button" onclick="window.location.href='{{ url('') }}/profile/deleteimage'"></span>

								<button type="button" class="icon icon--save image-profile__button image-profile__button--save" onclick="window.location.href='{{ url('') }}/profile/deleteimage'"></button>
							</div>
						</form>
					@endif
				</div>
				@if($eigenesprofil === 'true')
					<h1 class="hero-image-profile__title">@lang('Willkommen'), {{ $profile->name }}</h1>
					<h2 class="hero-image-profile__subtitle">
						<span class="icon icon--map-marker"></span>
						{{$profile->city}}
					</h2>
				@else
					<h1 class="hero-image-profile__title">>{{ $profile->name }}</h1>
					<h2 class="hero-image-profile__subtitle">
						<span class="icon icon--map-marker"></span>
						{{$profile->city}}
					</h2>
				@endif
			</div>
		</div>

        <!-- <div class="hero-image-beachcourt-detail " style="background-image: url('/uploads/profilePictures/{{ $profilepicture }}')">
        	<div class="hero-image-beachcourt-detail__overlay">
        		@if($eigenesprofil === 'true')
					@if($profile->pictureName !== 'placeholder-user.png' )
						<div class="multifunctional-menu icon icon--camera profile-user__multifunctional-menu"></div>
						
						<div class="context-menu profile-user-image__context-menu">
						    
						   
						</div>

					@else 
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
        </div> -->
    </div>
</div>

<div class="content">
	<div class="row -spacing-widget-default">
		<div class="column column--12">
			<div class="header-page">
				@if($eigenesprofil === 'true' )
					<h1 class="header-page__title -text-color-blue-2">@lang('mein profil')</h1>
					<div class="multifunctional-menu icon icon--cog button--edit" onclick="load_modal_editUserProfile()"></div>
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