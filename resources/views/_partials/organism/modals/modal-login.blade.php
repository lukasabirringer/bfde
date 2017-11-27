  
  <div class="modal-image__dialog">
	<div class="modal-image__content">
		<span class="modal-image__close icon icon--close"></span>
		<div class="modal-image__image">
			<img src="http:&#x2F;&#x2F;beachfelder.de&#x2F;img&#x2F;header-image.jpg" class="image" />
			<div class="modal-image__overlay">
				<!-- <div class="header-page ">
					<h1 class="header-page__title  -text-color-white ">
						Deine Vorteile
					</h1>
				</div>

				<ul class="list-common modal-image__list -spacing-static-b">
					<li class="list-common__item">
						<span class="list-common__icon icon icon--caret-right"></span>
						Bewerten von Beachvolleyballfeldern
					</li>
					<li class="list-common__item">
						<span class="list-common__icon icon icon--caret-right"></span>
						Checkin an Beachvolleyballfeldern
					</li>
					<li class="list-common__item">
						<span class="list-common__icon icon icon--caret-right"></span>
						Einreichen von neuen Beachvolleyballfeldern
					</li>
				</ul> -->
			</div>
		</div>
		<div class="modal-image__inner">
			<div class="modal-image__header">
				@lang('Melde dich an')
			</div>

			<form method="POST" action="{{ URL::route('login') }}">
				{{ csrf_field() }}
				<div class="row modal-image__body">
					<div class="row row--zero">
						<div class="column column--12">
							<label class="input">
				        		<input type="email" name="email" class="input__field" placeholder=" " value="{{ old('email') }}" required>
				                <span class="input__label">@lang('Deine E-Mail Adresse')</span>
				            </label>

			                @if ($errors->has('email'))
			                    <span class="help-block">
			                        <strong>{{ $errors->first('email') }}</strong>
			                    </span>
			                @endif
						</div>

						<div class="column column--12">
							<label class="input -spacing-static-b">
								<input type="password" class="input__field input__field--right input__field--icon" id="password-field" placeholder=" " name="password" required>
							    <span class="input__icon-wrapper">
							    	<span class="input__icon icon icon--eye input__icon--right toggle-password" toggle="#password-field"></span>
							    </span>
							    <span class="input__label  input__label--right input__label--icon ">@lang('Dein Passwort')</span>
							</label>

							@if ($errors->has('password'))
							    <span class="help-block">
							        <strong>{{ $errors->first('password') }}</strong>
							    </span>
							@endif
						</div>

						<div class="column column--12">
							<label class="checkbox-switch -spacing-static-b">
								<input class="checkbox-switch__field" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
							   	<span class="checkbox-switch__label">@lang('Login-Daten speichern')</span>
							</label>
						</div>

						<div class="column column--12 -align-right">
							<p class="-typo-copy -text-color-blue-2 -font-primary -spacing-static-c">
								<a href="{{ route('password.request') }}" class="-typo-copy-link -text-color-green">Passwort vergessen?</a>
							</p>
							<p class="-typo-copy -text-color-blue-2 -font-primary -spacing-static-c">Noch kein Mitglied?
								Dann <a href="{{ route('register') }}" class="-typo-copy-link -text-color-green">registriere</a> dich jetzt</p>
						</div>
					</div>
				</div>

				<div class="modal-image__footer">
					@include('_partials.molecules.button', ['buttonJavaScript'=>'', 'buttonType'=>'submit', 'buttonCustomClass'=>'-spacing-static-b', 'buttonBackgroundcolor'=>'', 'buttonLinkTarget'=>'', 'buttonIcon'=>'', 'buttonLabel'=>'Anmelden'])
				</div>		
			</form>

		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
	    $('.modal-image__close').click(function() {
	    	$('.overlay').remove();
	    	$('body').removeClass('no-scroll');
	        $(this).parents('.modal-image').remove();
	    });

	    /**
	    * Show and hide password
	    */
	    $('.input__icon-wrapper').click(function() {
	    	$('.toggle-password').toggleClass('icon--eye icon--password');
	    			
	    	var input = $($('.toggle-password').attr('toggle'));
	    	if (input.attr('type') == 'password') {
	    		input.attr('type', 'text');
	    	} else {
	    		input.attr('type', 'password');
	    	}
	    });
	});
</script>