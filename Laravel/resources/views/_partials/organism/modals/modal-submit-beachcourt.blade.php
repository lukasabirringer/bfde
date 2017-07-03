  
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
				<form method="POST" action="{{ url('/beachcourtsubmit/') }}" method="POST" enctype="multipart/form-data">
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

            <div class="column column--12 column--s-12">
             <label class="input">
                <input type="textarea" name="notes" class="input__field" placeholder=" " value="{{ old('notes') }}" required>
                <span class="input__label">@lang('Notizen')</span>
              </label>

              @if ($errors->has('notes'))
                  <span class="help-block">
                      <strong>{{ $errors->first('notes') }}</strong>
                  </span>
              @endif
              </div>

            <!-- optional -->
            <div class="column column--12 column--s-12">
             <label class="input">
                <input type="text" name="street" class="input__field" placeholder=" " value="{{ old('street') }}">
                <span class="input__label">@lang('Straße')</span>
              </label>

              @if ($errors->has('street'))
                  <span class="help-block">
                      <strong>{{ $errors->first('street') }}</strong>
                  </span>
              @endif
        
             <label class="input">
                <input type="text" name="houseNumber" class="input__field" placeholder=" " value="{{ old('houseNumber') }}">
                <span class="input__label">@lang('Hausnummer')</span>
              </label>

              @if ($errors->has('houseNumber'))
                  <span class="help-block">
                      <strong>{{ $errors->first('houseNumber') }}</strong>
                  </span>
              @endif
 
             <label class="input">
                <input type="text" name="latitude" class="input__field" placeholder=" " value="{{ old('latitude') }}">
                <span class="input__label">@lang('latitude')</span>
              </label>

              @if ($errors->has('latitude'))
                  <span class="help-block">
                      <strong>{{ $errors->first('latitude') }}</strong>
                  </span>
              @endif

             <label class="input">
                <input type="text" name="longitude" class="input__field" placeholder=" " value="{{ old('longitude') }}">
                <span class="input__label">@lang('longitude')</span>
              </label>

              @if ($errors->has('longitude'))
                  <span class="help-block">
                      <strong>{{ $errors->first('longitude') }}</strong>
                  </span>
              @endif
      
             <label class="input">
                <input type="text" name="operator" class="input__field" placeholder=" " value="{{ old('operator') }}">
                <span class="input__label">@lang('Betreiber')</span>
              </label>

              @if ($errors->has('operator'))
                  <span class="help-block">
                      <strong>{{ $errors->first('operator') }}</strong>
                  </span>
              @endif

             <label class="input">
                <input type="text" name="operatorURL" class="input__field" placeholder=" " value="{{ old('operatorURL') }}">
                <span class="input__label">@lang('Webseite des Betreibers')</span>
              </label>

              @if ($errors->has('operatorURL'))
                  <span class="help-block">
                      <strong>{{ $errors->first('operatorURL') }}</strong>
                  </span>
              @endif

             <label class="radio-icon ">
                    <input class="radio-icon__field"
                                 type="radio"
                                 name="chargeable"
                                 value="kostenlos"
                                 
                                 >
                    <div class="radio-icon__container">
                        <span class="radio-icon__icon  icon icon--check "></span>
                            <span class="radio-icon__label">@lang('kostenlos')</span>
                    </div>
                </label>
                <label class="radio-icon ">
                    <input class="radio-icon__field"
                                 type="radio"
                                 name="chargeable"
                                 value="kostenfplichtig"
                                 
                                 >
                    <div class="radio-icon__container">
                        <span class="radio-icon__icon  icon icon--check "></span>
                            <span class="radio-icon__label">@lang('kostenfplichtig')</span>
                    </div>
                </label>
                
                @if ($errors->has('chargeable'))
                    <span class="help-block">
                        <strong>{{ $errors->first('chargeable') }}</strong>
                    </span>
                @endif
     
             <label class="input">
                <input type="text" name="courtCountOutdoor" class="input__field" placeholder=" " value="{{ old('courtCountOutdoor') }}">
                <span class="input__label">@lang('Anzahl der Beachfelder (Outdoor)')</span>
              </label>

              @if ($errors->has('courtCountOutdoor'))
                  <span class="help-block">
                      <strong>{{ $errors->first('courtCountOutdoor') }}</strong>
                  </span>
              @endif
            
             <label class="input">
                <input type="text" name="courtCountIndoor" class="input__field" placeholder=" " value="{{ old('courtCountIndoor') }}">
                <span class="input__label">@lang('Anzahl der Beachfelder (Indoor)')</span>
              </label>

              @if ($errors->has('courtCountIndoor'))
                  <span class="help-block">
                      <strong>{{ $errors->first('courtCountIndoor') }}</strong>
                  </span>
              @endif
    
             <label class="radio-icon ">
                    <input class="radio-icon__field"
                                 type="radio"
                                 name="public"
                                 value="öffentlich"
                                 
                                 >
                    <div class="radio-icon__container">
                        <span class="radio-icon__icon  icon icon--check "></span>
                            <span class="radio-icon__label">@lang('öffentlich')</span>
                    </div>
                </label>
                <label class="radio-icon ">
                    <input class="radio-icon__field"
                                 type="radio"
                                 name="public"
                                 value="nicht öffentlich"
                                 
                                 >
                    <div class="radio-icon__container">
                        <span class="radio-icon__icon  icon icon--check "></span>
                            <span class="radio-icon__label">@lang('nicht öffentlich')</span>
                    </div>
                </label>
                
                @if ($errors->has('public'))
                    <span class="help-block">
                        <strong>{{ $errors->first('public') }}</strong>
                    </span>
                @endif
            
         
							    <label class="input-fileupload">
							    	<input type="file" name="beachcourtPicture" class="input-fileupload__field" data-multiple-caption="{count} files selected" />
							    	<span class="input-fileupload__icon icon icon--camera"></span>
							    	<span class="input-fileupload__label">@lang('Bild des Beachcourts hochladen')</span>
							    </label>

							    @include('_partials.molecules.button-icon', ['buttonIconType'=> 'submit','buttonIconIcon'=>'upload', 'buttonIconBackgroundcolor'=>' ', 'buttonIconCustomClass'=> 'context-menu__button profile-user-image__button' ])
			     </div>
			     <!-- optional -->
          </div>
					<a href="">Mehr Infos einreichen</a>
					@include('_partials.molecules.button', ['buttonJavaScript'=>' ', 'buttonType'=>'submit', 'buttonCustomClass'=>'-spacing-static-b', 'buttonBackgroundcolor'=>'', 'buttonLinkTarget'=>'', 'buttonIcon'=>'', 'buttonLabel'=>'Beachcourt einreichen'])
        </form>
          		
   
			</div> 
  
			<div class="modal-common__footer">
					

			</div>
		</div>
	</div>
</div>