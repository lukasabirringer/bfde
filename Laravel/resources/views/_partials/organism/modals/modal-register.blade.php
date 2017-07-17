<div class="modal-common__dialog">
    <div class="modal-common__content">
        <span class="modal-common__close icon icon--close"></span>
        <div class="modal-common__header">
            @lang('Melde dich an')
        </div>
        <div class="modal-common__body">
            <form role="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <input type="hidden" name="role" value="registered">
                <div class="row -spacing-d">
                    
                    <div class="column column--12">
                        <label class="input">
                            <input type="text" name="name" class="input__field" placeholder=" " value="{{ old('name') }}" required>
                            <span class="input__label">@lang('Dein Username')</span>
                        </label>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="column column--12 column--s-6 -spacing-d">
                        <label class="input">
                            <input type="text" name="firstName" class="input__field" placeholder=" " value="{{ old('firstName') }}" required>
                            <span class="input__label">@lang('Dein Vorname')</span>
                        </label>

                        @if ($errors->has('firstName'))
                            <span class="help-block">
                                <strong>{{ $errors->first('firstName') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="column column--12 column--s-6 -spacing-d">
                        <label class="input">
                            <input type="text" name="lastName" class="input__field" placeholder=" " value="{{ old('lastName') }}" required>
                            <span class="input__label">@lang('Dein Nachname')</span>
                        </label>

                        @if ($errors->has('lastName'))
                            <span class="help-block">
                                <strong>{{ $errors->first('lastName') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="column column--4 -spacing-d">
                        <label class="radio-icon">
                            <input class="radio-icon__field" type="radio" name="sex" value="male">
                            <div class="radio-icon__container">
                                <span class="radio-icon__icon  icon icon--male "></span>
                                <span class="radio-icon__label">@lang('männlich')</span>
                            </div>
                        </label>
                    </div>
                    <div class="column column--4 -spacing-d">
                        <label class="radio-icon ">
                            <input class="radio-icon__field" type="radio" name="sex" value="female">
                            <div class="radio-icon__container">
                                <span class="radio-icon__icon  icon icon--female "></span>
                                <span class="radio-icon__label">@lang('weiblich')</span>
                            </div>
                        </label>
                    </div>
                    <div class="column column--4 -spacing-d">
                        <label class="radio-icon ">
                            <input class="radio-icon__field" type="radio" name="sex" value="trans">
                            <div class="radio-icon__container">
                                <span class="radio-icon__icon  icon icon--transgender "></span>
                                <span class="radio-icon__label">@lang('transgender')</span>
                            </div>
                        </label>

                        @if ($errors->has('sex'))
                            <span class="help-block">
                                <strong>{{ $errors->first('sex') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="column column--4 column--s-3 -spacing-d">
                        <label class="input">
                            <input type="text" name="postalCode" class="input__field" placeholder=" " value="{{ old('postalCode') }}">
                            <span class="input__label">@lang('Deine PLZ (optional)')</span>
                        </label>

                        @if ($errors->has('postalCode'))
                            <span class="help-block">
                                <strong>{{ $errors->first('postalCode') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="column column--8 column--s-9 -spacing-d">
                        <label class="input">
                            <input type="text" name="city" class="input__field" placeholder=" " value="{{ old('city') }}">
                            <span class="input__label">@lang('Dein Wohnort (optional)')</span>
                        </label>

                        @if ($errors->has('city'))
                            <span class="help-block">
                                <strong>{{ $errors->first('city') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="column column--12 column--s-6 -spacing-d">
                        <label class="input">
                            <input type="date" name="birthdate" class="input__field" placeholder=" " value="{{ old('birthdate') }}">
                            <span class="input__label">@lang('Dein Geburtsdatum (optional)')</span>
                        </label>

                        @if ($errors->has('birthdate'))
                            <span class="help-block">
                                <strong>{{ $errors->first('birthdate') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="column column--12 column--s-6 -spacing-d">
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
                </div>
                <div class="row">
                    <div class="column column--12 column--s-6 -spacing-d">
                        <label class="input">
                            <input type="password" name="password" class="input__field" placeholder=" " value="{{ old('email') }}" required>
                            <span class="input__label">@lang('Dein Passwort')</span>
                        </label>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="column column--12 column--s-6 -spacing-d">
                        <label class="input">
                            <input type="password" name="password_confirmation" class="input__field" placeholder=" " required>
                            <span class="input__label">@lang('Passwort wiederholen')</span>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="column column--auto column--s-8 -spacing-d"></div>
                    <div class="column column--12 column--s-4 -spacing-d">
                        @include('_partials.molecules.button', ['buttonJavaScript'=>'', 'buttonType'=>'submit', 'buttonCustomClass'=>'-spacing-static-b', 'buttonBackgroundcolor'=>'', 'buttonLinkTarget'=>'', 'buttonIcon'=>'', 'buttonLabel'=>'Jetzt registrieren'])
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
            $('body').removeClass('no-scroll');
            $(this).parents('.modal-common').remove();
        });
    });
</script>
