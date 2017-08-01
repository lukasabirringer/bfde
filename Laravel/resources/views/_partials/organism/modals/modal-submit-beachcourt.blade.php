<style>
    .tooltip_templates { display: none; }
</style>

<div class="modal-common__dialog">
    <form method="POST" action="{{ URL::route('beachcourtsubmit.store') }}" id="myform" enctype="multipart/form-data">
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
                        <input type="text" id="zipCode" name="postalCode" class="input__field" placeholder=" " value="{{ old('postalCode') }}" required>
                        <span class="input__label">@lang('PLZ')</span>

                        @if ($errors->has('postalCode'))
                            <span class="input__error">
                                {{ $errors->first('postalCode') }}
                            </span>
                        @endif
                    </label>
                    
                </div>
                <div class="column column--12 column--s-9">
                    <label class="input">
                        <input type="text" name="city" class="input__field" placeholder=" " value="{{ old('city') }}" required>
                        <span class="input__label">@lang('Ort')</span>

                        @if ($errors->has('city'))
                            <span class="input__error">
                                {{ $errors->first('city') }}
                            </span>
                        @endif
                    </label>
                    
                </div>
            </div>

            <div class="row -spacing-static-d row__hidden">
                <div class="column column--12 column--s-10">
                    <label class="input">
                        <input type="text" name="street" class="input__field" placeholder=" " value="{{ old('street') }}">
                        <span class="input__label">@lang('Straße')</span>

                        @if ($errors->has('street'))
                            <span class="input__error">
                                {{ $errors->first('street') }}
                            </span>
                        @endif
                    </label>
                    
                </div>
                <div class="column column--12 column--s-2">
                    <label class="input">
                        <input type="text" name="houseNumber" class="input__field" placeholder=" " value="{{ old('houseNumber') }}">
                        <span class="input__label">@lang('Nr').</span>

                        @if ($errors->has('houseNumber'))
                        <span class="input__error">
                            {{ $errors->first('houseNumber') }}
                        </span>
                    @endif
                    </label>
                    
                </div>
            </div>

            <div class="row -spacing-static-d row__hidden">
                <div class="column column--12 column--s-6">
                    <p class="-typo-copy -text-color-blue-2 -font-primary">Gib den Längengrad des Beachvolleyballfeldes an.
                    <a href="#" class="-text-color-green tooltip">@lang('Hilfestellung')</a>
                    </p>

                    <label class="input -spacing-static-b">
                        <input type="text" name="latitude" class="input__field" placeholder=" " value="{{ old('latitude') }}">
                        <span class="input__label">@lang('Latitude')</span>

                        @if ($errors->has('latitude'))
                        <span class="input__error">
                            {{ $errors->first('latitude') }}
                        </span>
                    @endif
                    </label>
                    
                </div>
                <div class="column column--12 column--s-6">
                    <p class="-typo-copy -text-color-blue-2 -font-primary">Gib den Breitengrad des Beachvolleyballfeldes an.
                    <a href="#" class="-text-color-green tooltip">@lang('Hilfestellung')</a></p>
                    <label class="input -spacing-static-b">
                        <input type="text" name="longitude" class="input__field" placeholder=" " value="{{ old('longitude') }}">
                        <span class="input__label" >@lang('Longitude')</span>

                        @if ($errors->has('longitude'))
                            <span class="input__error">
                                {{ $errors->first('longitude') }}
                            </span>
                        @endif
                    </label>
                    
                </div>
            </div>

            <div class="row -spacing-static-d row__hidden">
                <div class="column column--12 column--s-6">
                    <label class="input">
                        <input type="text" name="operator" class="input__field" placeholder=" " value="{{ old('operator') }}">
                        <span class="input__label">@lang('Betreiber')</span>

                        @if ($errors->has('operator'))
                            <span class="input__error">
                                {{ $errors->first('operator') }}
                            </span>
                        @endif
                    </label>
                    
                </div>
                <div class="column column--12 column--s-6">
                    <label class="input">
                        <input type="url" name="operatorURL" class="input__field" placeholder=" " value="{{ old('operatorURL') }}">
                        <span class="input__label">@lang('Website') @lang('des Betreibers')</span>

                        @if ($errors->has('operatorURL'))
                            <span class="input__error">
                                {{ $errors->first('operatorURL') }}
                            </span>
                        @endif
                    </label>
                    
                </div>
            </div>
            <div class="row -spacing-static-d row__hidden">
                <div class="column column--12 column--s-6">

                    <label class="input-range">
                        <span class="input-range__label">@lang('Anzahl der Felder') @lang('indoor')</span>
                        <input type="range" 
                                id="courtCountIndoorSlider"
                                class="input-range__field"
                                min="0"
                                max="10"
                                name="courtCountIndoor"
                                value="0"
                                onchange="updateTextInputIndoor(this.value);"
                        >
                        <output id="courtCountIndoor" class="input-range__output" value="0">0</output>
                    </label>
                </div>
                <div class="column column--12 column--s-6">

                    <label class="input-range">
                        <span class="input-range__label">@lang('Anzahl der Felder') @lang('outdoor')</span>
                        <input type="range"
                                id="courtCountOutdoorSlider"
                                class="input-range__field"
                                name="courtCountOutdoor"
                                min="0"
                                max="10"
                                value="0"
                                onchange="updateTextInputOutdoor(this.value);"
                        >
                        <output id="courtCountOutdoor" class="input-range__output">0</output>
                    </label>
                </div>
            </div>
            <div class="row -spacing-static-d row__hidden">
                <div class="row row--zero">
                    <div class="column column--12 column--s-6">
                        <label class="select ">
                          <select class="select__field" name="chargeable">
                                <option selected disabled><span class="-overflow-elipsis">@lang('Ist die Nutzung kostenfrei')?</span></option>
                                <option value="NULL"> @lang('nicht bekannt') </option>
                                <option value="0"> @lang('Ja') </option>
                                <option value="1"> @lang('Nein') </option>
                          </select>
                          <span class="select__icon icon icon--arrow-down"></span>
                        </label>
                    </div>
                    <div class="column column--12 column--s-6">
                        <label class="select ">
                          <select class="select__field" name="public">
                                <option selected disabled>@lang('Ist das Feld öffentlich zugänglich')? </option>
                                <option value="NULL"> @lang('nicht bekannt') </option>
                                <option value="1"> @lang('Ja') </option>
                                <option value="0"> @lang('Nein') </option>
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
                <span class="link__readmore-label">@lang('Mehr Infos einreichen')</span>
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

    <div class="tooltip_templates">
        <span id="tooltip_coordinates">
            <h5 class="-typo-headline-5 -font-secondary -text-color-green">Den Längengrad und Breitengrad herausfinden</h5>
            <p class="-typo-copy -font-primary -text-color-blue-2">
                Den Längengrad und Breitengrad kannst du mit Hilfe von Google Maps ganz einfach herausfinden.
            </p>
            <p class="-typo-copy -font-primary -text-color-blue-2 -spacing-static-a">
                Oder du verwendest folgende Website dafür: 
                <a href="https://www.laengengrad-breitengrad.de/" target="_blank" class="-text-color-green">laengengrad-breitengrad.de</a>
            </p>
        </span>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/js/jquery.tooltipster.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
	    $('.modal-common__close').click(function() {
            $('.overlay').remove();
            $('body').removeClass('no-scroll');
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
            content: $('#tooltip_coordinates'),
            delay: '0',
            interactive: true,
            multiple: true
        });
	});

    /**
    * Update the Value of the slider
    */
    function updateTextInputIndoor(val) {
        document.getElementById('courtCountIndoorSlider').value = val;
        document.getElementById('courtCountIndoor').value = val;
    }

    function updateTextInputOutdoor(val) {
        document.getElementById('courtCountOutdoorSlider').value = val;
        document.getElementById('courtCountOutdoor').value = val; 
    }
</script>