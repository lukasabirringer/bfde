<div class="modal-common__dialog">
    <form method="POST" action="{{ URL::route('beachcourtsubmit.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
	<div class="modal-common__content">
		<div class="modal-common__close icon icon--close"></div>
		<div class="modal-common__header">Beachvolleyballfeld vorschlagen</div>
		<div class="modal-common__body">
			<p class="-typo-copy--large -text-color-blue-2 -font-primary">
            Wir freuen uns, wenn du uns ein Beachvolleyballfeld vorschlagen willst! Du benötigst nicht viel dafür. Für die Einreichung reichen schon die Postleitzahl und der Ort des Feldes. Den Rest übernehmen wir für dich.</p>

            <p class="-typo-copy--large -text-color-blue-2 -font-primary -spacing-static-c">
            Wenn du mehr über das Beachvolleyballfeld weißt, darfst du uns aber gerne mehr Informationen darüber geben. Klicke dazu einfach unten im Formular auf "Mehr Infos einreichen".</p>

            <div class="row -spacing-static-f">
                <div class="column column--12 column--s-3">
                    <label class="input">
                        <input type="search" id="zipCode" name="postalCode" class="input__field" placeholder=" " value="{{ old('postalCode') }}" required>
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
                        <input type="text" name="houseNumber" class="input__field" placeholder=" " value="{{ old('houseNumber') }}">
                        <span class="input__label">@lang('Nr.')</span>
                    </label>
                    @if ($errors->has('houseNumber'))
                        <span class="help-block">
                            <strong>{{ $errors->first('houseNumber') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row -spacing-static-d row__hidden">
                <div class="column column--12 column--s-6">
                    <p class="-typo-copy -text-color-blue-2 -font-primary tooltip" title="Den Längengrad kannst du bei Google Maps herausfinden">Gib den Längengrad des Beachvolleyballfeldes an.</p>
                    <label class="input -spacing-static-b">
                        <input type="text" name="latitude" class="input__field" placeholder=" " value="{{ old('latitude') }}">
                        <span class="input__label">@lang('Latitude')</span>
                    </label>
                    @if ($errors->has('latitude'))
                        <span class="help-block">
                            <strong>{{ $errors->first('latitude') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="column column--12 column--s-6">
                    <p class="-typo-copy -text-color-blue-2 -font-primary">Gib den Breitengrad des Beachvolleyballfeldes an.</p>
                    <label class="input -spacing-static-b">
                        <input type="text" name="longitude" class="input__field" placeholder=" " value="{{ old('longitude') }}">
                        <span class="input__label tooltip" title="Den Breitengrad kannst du bei Google Maps herausfinden" >@lang('Longitude')</span>
                    </label>
                    @if ($errors->has('longitude'))
                        <span class="help-block">
                            <strong>{{ $errors->first('longitude') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row -spacing-static-d row__hidden">
                <div class="column column--12 column--s-6">
                    <label class="input">
                        <input type="text" name="operator" class="input__field" placeholder=" " value="{{ old('operator') }}">
                        <span class="input__label">@lang('Betreiber')</span>
                    </label>
                    @if ($errors->has('operator'))
                        <span class="help-block">
                            <strong>{{ $errors->first('operator') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="column column--12 column--s-6">
                    <label class="input">
                        <input type="url" name="operatorURL" class="input__field" placeholder=" " value="{{ old('operatorURL') }}">
                        <span class="input__label">@lang('Website des Betreibers')</span>
                    </label>
                    @if ($errors->has('operatorURL'))
                        <span class="help-block">
                            <strong>{{ $errors->first('operatorURL') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="row -spacing-static-d row__hidden">
                <div class="column column--12 column--s-6">
                    <label class="select ">
                      <select class="select__field" name="courtCountIndoor">
                            <option selected disabled> Anzahl der Felder indoor </option>
                            <option value="NULL"> nicht bekannt </option>
                            <option value="0"> 0 </option>
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
                      <select class="select__field" name="courtCountOutdoor">
                            <option selected disabled> Anzahl der Felder outdoor </option>
                            <option value="NULL"> nicht bekannt </option>
                            <option value="0"> 0 </option>
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
                          <select class="select__field" name="chargeable">
                                <option selected disabled> Ist die Nutzung gebührenpflichtig oder kostenfrei? </option>
                                <option value="NULL"> nicht bekannt </option>
                                <option value="gebührenfrei"> gebührenfrei </option>
                                <option value="gebührenpflichtig"> gebührenpflichtig </option>
                          </select>
                          <span class="select__icon icon icon--arrow-down"></span>
                        </label>
                    </div>
                    <div class="column column--12 column--s-6">
                        <label class="select ">
                          <select class="select__field" name="public">
                                <option selected disabled> Ist das Feld öffentlich zugänglich? </option>
                                <option value="NULL"> nicht bekannt </option>
                                <option value="öffentlich"> öffentlich </option>
                                <option value="nicht öffentlich"> nicht öffentlich </option>
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
                <div class="column column--12 column--s-6 column--l-5">
                    @include('_partials.molecules.button', ['buttonJavaScript'=>' ', 'buttonType'=>'submit', 'buttonCustomClass'=>'', 'buttonBackgroundcolor'=>'', 'buttonLinkTarget'=>'', 'buttonIcon'=>'send', 'buttonLabel'=>'Feld vorschlagen'])
                </div>
            </div>
		</div>
	</div>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/js/jquery.tooltipster.min.js"></script>
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

        /**
        * Tooltips
        */
        $('.tooltip').tooltipster({
            theme: 'tooltipster-shadow',
            delay: '0'
        });
	});
</script>