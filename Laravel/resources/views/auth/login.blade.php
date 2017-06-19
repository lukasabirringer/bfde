@extends('layouts.frontend')

@section('content')
<div class="row row--zero">
        <div class="column column--12 column--zero">
            @include('_partials.molecules.hero-image', ['id' => 'standard', 'heroImage'=> 'fallback.jpg'])    
        </div>
    </div>
</div>
<div class="content">
    <div class="row -spacing-widget-default">
        <div class="column column--12">
            <div class="header-page ">
                <h1 class="header-page__title  -text-color-blue-2 ">
                    Melde dich an
                </h1>
                <p class="header-page__subtitle">
                    In deinem Benutzerprofil kannst du deine Daten ändern, Beachvolleyball Felder bewerten und deine Favoriten verwalten.
                </p>
            </div>
        </div>
    </div>
    <div class="row -spacing-d -spacing-inner-a">
        <div class="column column--2"></div>
        <div class="column column--12 column--m-8 -align-right">
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <label class="input">
                    <input type="email" name="email" class="input__field" placeholder=" " value="{{ old('email') }}" required>
                        <span class="input__icon icon icon--mail "></span>
                    <span class="input__label">Deine E-Mail Adresse</span>
                </label>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <br><br>

                <label class="input">
                    <input type="password" class="input__field" placeholder=" " name="password" required>
                        <span class="input__icon icon icon--password "></span> 
                    <span class="input__label">Dein Passwort</span>
                </label>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <br><br>
                <label class="checkbox-switch ">
                  <input class="checkbox-switch__field"
                         type="checkbox"
                         name="remember"
                         {{ old('remember') ? 'checked' : '' }}>
                    <span class="checkbox-switch__label">@lang('Login-Daten speichern')</span>
                </label>
                <br><br><br>
                <button type="submit" class="button">
                    <span class="button__label ">Anmelden</span>
                </button>
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
</div>
@endsection
