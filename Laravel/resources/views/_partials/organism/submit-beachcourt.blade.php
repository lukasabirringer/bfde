 <div class="row -spacing-d -spacing-inner-a">
        <div class="column column--2"></div>
        <div class="column column--12 column--m-8 -align-right">
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <label class="input">
                    <input type="email" name="email" class="input__field" placeholder=" " value="{{ old('email') }}" required>
                    <span class="input__label">@lang('Deine E-Mail Adresse')</span>
                </label>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                
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

                <label class="checkbox-switch -spacing-static-b">
                  <input class="checkbox-switch__field"
                         type="checkbox"
                         name="remember"
                         {{ old('remember') ? 'checked' : '' }}>
                    <span class="checkbox-switch__label">@lang('Login-Daten speichern')</span>
                </label>

                @include('_partials.molecules.button', ['buttonType'=>'submit', 'buttonCustomClass'=>'-spacing-static-b', 'buttonBackgroundcolor'=>'', 'buttonLinkTarget'=>'', 'buttonIcon'=>'', 'buttonLabel'=>'Anmelden'])
            </form>
            <p class="-typo-copy -font-primary -spacing-static-c">
                <a href="{{ route('password.request') }}" class="-typo-copy-link -text-color-green">@lang('Passwort vergessen?')</a>
            </p>
            <p class="-typo-copy -font-primary -spacing-static-c">
                <a href="{{ route('register') }}" class="-typo-copy-link -text-color-green">
                    @lang('Noch kein Mitglied? Dann melde dich schnell an!')</a> 
            </p>
        </div>
        <div class="column column--2"></div>
    </div>