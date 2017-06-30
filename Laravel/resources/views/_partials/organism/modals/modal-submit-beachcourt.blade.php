  
<div class="modal-common ">
	<div class="modal-common__dialog">
		<div class="modal-common__content">
			<div class="modal-common__close icon icon--close"></div>
			<div class="modal-common__header">
				Beachcourt einreichen
			</div>
			<div class="modal-common__body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="row -spacing-static-f">
                <div class="column column--12 column--s-3">
                	 <label class="input">
                    <input type="text" name="postalCode" class="input__field" placeholder=" " value="{{ old('postalCode') }}" required>
                    <span class="input__label">@lang('Postleitzahl')</span>
	                </label>

	                @if ($errors->has('postalCode'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('postalCode') }}</strong>
	                    </span>
	                @endif
                </div>
                <div class="column column--12 column--s-9">
                	 <label class="input">
                    <input type="text" name="city" class="input__field" placeholder=" " value="{{ old('city') }}" required>
                    <span class="input__label">@lang('Ort')</span>
	                </label>

	                @if ($errors->has('city'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('city') }}</strong>
	                    </span>
	                @endif
                </div>
   
          			</div>
   
			</div> 
  
			<div class="modal-common__footer">
					<a href="">Mehr Infos einreichen</a>
					@include('_partials.molecules.button', ['buttonType'=>'submit', 'buttonCustomClass'=>'-spacing-static-b', 'buttonBackgroundcolor'=>'', 'buttonLinkTarget'=>'', 'buttonIcon'=>'', 'buttonLabel'=>'Anmelden'])
            </form>

			</div>
		</div>
	</div>
</div>


pivot
------
user-id
court-id 
Status-Freitext
Datum einreichung
letzte änderung

Status
-----------------
eingereicht
in überprüfung
abgelehnt
online