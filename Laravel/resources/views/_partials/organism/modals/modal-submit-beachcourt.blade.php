<div class="modal-common__dialog">
	<div class="modal-common__content">
		<div class="modal-common__close icon icon--close"></div>
		<div class="modal-common__header">Beachvolleyballfeld vorschlagen</div>
		<div class="modal-common__body">
			<p class="-typo-copy--large -text-color-blue-2 -font-primary">
            Wir freuen uns, wenn du uns ein Beachvolleyballfeld vorschlagen willst! Du benötigst nicht viel dafür. Für die Einreichung reichen schon die Postleitzahl und der Ort des Feldes. Den Rest übernehmen wir für dich.</p>

            <p class="-typo-copy--large -text-color-blue-2 -font-primary -spacing-static-c">
            Wenn du mehr über das Beachvolleyballfeld weißt, darfst du uns aber gerne mehr Informationen darüber geben. Klicke dazu einfach unten im Formular auf "Mehr Infos einreichen".</p>

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

            <div class="row -spacing-static-d row__hidden">
                <div class="column column--12 column--s-10">
                    <label class="input">
                        <input type="text" name="street" class="input__field" placeholder=" " value="{{ old('street') }}">
                        <span class="input__label">@lang('Straße')</span>
                    </label>
                    @if ($errors->has('street'))
                        <span class="help-block">
                            <strong>{{ $errors->first('street') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="column column--12 column--s-2">
                    <label class="input">
                        <input type="number" name="housenumber" class="input__field" placeholder=" " value="{{ old('housenumber') }}">
                        <span class="input__label">@lang('Nr.')</span>
                    </label>
                    @if ($errors->has('housenumber'))
                        <span class="help-block">
                            <strong>{{ $errors->first('housenumber') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row -spacing-static-d row__hidden">
                <div class="column column--12 column--s-6">
                    <label class="input">
                        <input type="text" name="owner" class="input__field" placeholder=" " value="{{ old('owner') }}">
                        <span class="input__label">@lang('Betreiber')</span>
                    </label>
                    @if ($errors->has('owner'))
                        <span class="help-block">
                            <strong>{{ $errors->first('owner') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="column column--12 column--s-6">
                    <label class="input">
                        <input type="url" name="ownerwebaddress" class="input__field" placeholder=" " value="{{ old('ownerwebaddress') }}">
                        <span class="input__label">@lang('Website des Betreibers')</span>
                    </label>
                    @if ($errors->has('ownerwebaddress'))
                        <span class="help-block">
                            <strong>{{ $errors->first('ownerwebaddress') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="row -spacing-static-d row__hidden">
                <div class="column column--12 column--s-6">
                    <label class="select ">
                      <select class="select__field" name="countBeachcourtIndoor">
                            <option value=" " selected disabled> Anzahl der Felder indoor </option>
                            <option value="NaN"> nicht bekannt </option>
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                      </select>
                      <span class="select__icon icon icon--arrow-down"></span>
                    </label>
                </div>
                <div class="column column--12 column--s-6">
                    <label class="select ">
                      <select class="select__field" name="countBeachcourtOutdoor">
                            <option value=" " selected disabled> Anzahl der Felder outdoor </option>
                            <option value="NaN"> nicht bekannt </option>
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                      </select>
                      <span class="select__icon icon icon--arrow-down"></span>
                    </label>
                </div>
            </div>
            <div class="row -spacing-static-d row__hidden">
                <div class="row row--zero">
                    <div class="column column--12 column--s-6">
                        <label class="select ">
                          <select class="select__field" name="#">
                                <option value=" " selected disabled> Ist die Nutzung gebührenpflichtig oder kostenfrei? </option>
                                <option value="NaN"> nicht bekannt </option>
                                <option value="free"> gebührenfrei </option>
                                <option value="chargeable"> gebührenpflichtig </option>
                          </select>
                          <span class="select__icon icon icon--arrow-down"></span>
                        </label>
                    </div>
                    <div class="column column--12 column--s-6">
                        <label class="select ">
                          <select class="select__field" name="#">
                                <option value=" " selected disabled> Ist das Feld öffentlich zugänglich? </option>
                                <option value="NaN"> nicht bekannt </option>
                                <option value="free"> öffentlich </option>
                                <option value="chargeable"> nicht öffentlich </option>
                          </select>
                          <span class="select__icon icon icon--arrow-down"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
		<div class="modal-common__footer">
            <p class="-typo-copy -text-color-green -font-primary -align-center link__readmore">
                <span class="icon icon--arrow-down -text-color-green link__readmore-icon"></span>
                <span class="link__readmore-label">Mehr Infos einreichen</span>
            </p>
        
            <div class="row row-buttons ">
                <div class="column column--auto column--s-10">
                </div>
                <div class="column column--12 column--s-2">
                    @include('_partials.molecules.button', ['buttonJavaScript'=>' ', 'buttonType'=>'submit', 'buttonCustomClass'=>'', 'buttonBackgroundcolor'=>'', 'buttonLinkTarget'=>'', 'buttonIcon'=>'send', 'buttonLabel'=>'Feld vorschlagen'])
                </div>
            </div>
            </form>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
	    $('.modal-common__close').click(function() {
            $('.overlay').remove();
	        $(this).parents('.modal-common').remove();
	    });

        $('.link__readmore').on('click', function() {
            $('.link__readmore-icon').toggleClass('link__readmore-icon--open');
            $('.row__hidden').delay(500).slideToggle();
            
        });
	});
</script>