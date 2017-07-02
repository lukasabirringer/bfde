<div class="modal-common__dialog">
	<div class="modal-common__content">
		<div class="modal-common__close icon icon--close"></div>
		<div class="modal-common__header">Aktualisiere deine Informationen</div>
		<form method="POST" action="{{ url('profile/') }}">
		{{ csrf_field() }}
		
		<div class="modal-common__body">
			<p class="-typo-copy--large -text-color-blue-2 -font-primary">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, labore? Ratione, vero quos numquam est facilis eveniet ad eaque dolorem aliquid doloremque ex impedit fugit saepe, ipsa, iste minus, fuga.</p>
				
			<div class="row -spacing-static-c">
				<div class="column column--12">
					<label class="input">
						<input name="newName" class="input__field" type="text" value="{{ $profile->name }}">	
						<span class="input__label">Dein Username</span>
					</label>
				</div>
			</div>
			<div class="row -spacing-static-d">
				<div class="column column--12 column--s-4">
					<label class="input">
						<input name="newVorname" class="input__field" type="text" value="{{ $profile->firstName }}">	
						<span class="input__label">Dein Vorname</span>
					</label>
				</div>
				<div class="column column--12 column--s-4">
					<label class="input">
						<input name="newNachname" class="input__field" type="text" value="{{ $profile->lastName }}">	
						<span class="input__label">Dein Nachname</span>
					</label>
				</div>
				<div class="column column--12 column--s-4">
					<label class="input">
						<input name="newGeburtstag" class="input__field" type="date" value="{{ $profile->birthdate }}">	
						<span class="input__label">Dein Geburtstag</span>
					</label>
				</div>
			</div>
			<div class="row -spacing-static-d">
				<div class="column column--12 column--s-3">
					<label class="input">
						<input name="newNPLZ" class="input__field" type="text" value="{{ $profile->postalCode }}">	
						<span class="input__label">Deine PLZ</span>
					</label>
				</div>
				<div class="column column--12 column--s-9">
					<label class="input">
						<input name="newWohnort" class="input__field" type="text" value="{{ $profile->city }}">	
						<span class="input__label">Dein Wohnort</span>
					</label>
				</div>
			</div>
			<div class="row -spacing-static-d">
				<div class="column column--12 column--s-6">
					<label class="input">
						<input name="newEmail" class="input__field" type="email" value="{{ $profile->email }}">	
						<span class="input__label">Deine E-Mail Adresse</span>
					</label>
				</div>
				<div class="column column--12 column--s-6">
					<label class="input">
						<input name="newPasswort" class="input__field" type="password" value="{{ $profile->password }}">	
						<span class="input__label">Dein Passwort</span>
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
	        $(this).parents('.modal-common').remove();
	    });
	});
</script>