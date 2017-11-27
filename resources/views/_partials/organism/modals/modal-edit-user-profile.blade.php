<div class="modal-common__dialog">
	<div class="modal-common__content">
		<div class="modal-common__close icon icon--close"></div>
		<div class="modal-common__header">@lang('Aktualisiere deine Informationen')</div>
		<form method="POST" action="{{ URL::route('profile.update') }}">
		{{ csrf_field() }}

		<div class="modal-common__body">
			<div class="row -spacing-static-c">
				<div class="column column--12">
					<label class="input">
						<input name="newName" class="input__field" type="text" value="{{ $profile->name }}">	
						<span class="input__label">@lang('Dein Username')</span>
					</label>
				</div>
			</div>
			<div class="row -spacing-static-d">
				<div class="column column--12 column--s-4">
					<label class="input">
						<input name="newVorname" class="input__field" type="text" value="{{ $profile->firstName }}">	
						<span class="input__label">@lang('Dein Vorname')</span>
					</label>
				</div>
				<div class="column column--12 column--s-4">
					<label class="input">
						<input name="newNachname" class="input__field" type="text" value="{{ $profile->lastName }}">	
						<span class="input__label">@lang('Dein Nachname')</span>
					</label>
				</div>
				<div class="column column--12 column--s-4">
					<label class="input">
						<input name="newGeburtstag" class="input__field" type="text" value="{{ $profile->birthdate }}">	
						<span class="input__label">@lang('Dein Geburtstag')</span>
					</label>
				</div>
			</div>
			<div class="row -spacing-static-d">
				<div class="column column--12 column--s-3">
					<label class="input">
						<input name="newNPLZ" class="input__field" type="text" value="{{ $profile->postalCode }}">	
						<span class="input__label">@lang('Deine PLZ')</span>
					</label>
				</div>
				<div class="column column--12 column--s-9">
					<label class="input">
						<input name="newWohnort" class="input__field" type="text" value="{{ $profile->city }}">	
						<span class="input__label">@lang('Dein Wohnort')</span>
					</label>
				</div>
			</div>
			<div class="row -spacing-static-d">
				<div class="column column--12 column--s-6">
					<label class="input">
						<input name="newEmail" class="input__field" type="email" value="{{ $profile->email }}">	
						<span class="input__label">@lang('Deine E-Mail Adresse')</span>
					</label>
				</div>
				<div class="column column--12 column--s-6">
					<label class="input">
						<input name="newPasswort" class="input__field" type="password" value="{{ $profile->password }}">	
						<span class="input__label">@lang('Dein Passwort')</span>
					</label>
				</div>
			</div>
			<div class="row -spacing-static-d">
				<div class="column column--12 column--s-6">
					<label class="checkbox">
					  <input class="checkbox__field publicFavorites" type="checkbox" name="publicFavorites" value="{{ $profile->publicFavorites }}">

					  <span class="checkbox__icon icon icon--check"></span>
					    <span class="checkbox__label tooltip" title="Möchtest du deine Favoriten für andere User öffentlich machen?">@lang('Favoriten öffentlich')</span>
					</label>
				</div>
				<div class="column column--12 column--s-6">
					<label class="checkbox">
					  <input class="checkbox__field publicSubmittedCourts" type="checkbox" name="publicSubmittedCourts" value="{{ $profile->publicSubmittedCourts }}">

					  <span class="checkbox__icon icon icon--check"></span>
					    <span class="checkbox__label tooltip" title="Möchtest du deine eingereichten Felder für andere User öffentlich machen?">@lang('Eingereichte Felder öffentlich')</span>
					</label>
				</div>
			</div>
		</div>
		<div class="modal-common__footer">
			@include('_partials.molecules.button', ['buttonJavaScript'=>'', 'buttonType'=>'submit', 'buttonLinkTarget'=>'', 'buttonIcon'=>'save', 'buttonLabel'=>'Änderungen speichern', 'buttonCustomClass'=>' ', 'buttonBackgroundcolor'=>' ' ])
		</div>
	</div>
	</form>
</div>

<script type="text/javascript">
	$(document).ready(function() {
	    $('.modal-common__close').click(function() {
            $('.overlay').remove();
            $('body').removeClass('no-scroll');
	        $(this).parents('.modal-common').remove();
	    });

	    /**
	    * Tooltips
	    */
	    $('.tooltip').tooltipster({
	        theme: 'tooltipster-shadow',
	        delay: '0',
	        multiple: true
	    });

	    $('.publicSubmittedCourts').on('change', function(){
	       this.value = this.checked ? 1 : 0;
	       console.log(this.value);
	    }).change();

	    $('.publicFavorites').on('change', function(){
	       this.value = this.checked ? 1 : 0;
	       console.log(this.value);
	    }).change();
	});
</script>