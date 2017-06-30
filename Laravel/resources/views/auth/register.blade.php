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
                    Registriere dich und werde ein Teil der größten Beachvolleyball Community.
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
            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <label class="input">
                    <input type="text" name="name" class="input__field" placeholder=" " value="{{ old('name') }}" required>
                        <span class="input__icon icon icon--user-circle "></span>
                    <span class="input__label">@lang('Dein Username')</span>
                </label>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif

                <br><br>

                <label class="input">
                    <input type="text" name="firstName" class="input__field" placeholder=" " value="{{ old('firstName') }}" required>
                        <span class="input__icon icon icon--user-circle "></span>
                    <span class="input__label">@lang('Dein Vorname')</span>
                </label>

                @if ($errors->has('firstName'))
                    <span class="help-block">
                        <strong>{{ $errors->first('firstName') }}</strong>
                    </span>
                @endif

                <br><br>

                <label class="input">
                    <input type="text" name="lastName" class="input__field" placeholder=" " value="{{ old('lastName') }}" required>
                        <span class="input__icon icon icon--user-circle "></span>
                    <span class="input__label">@lang('Dein Nachname')</span>
                </label>

                @if ($errors->has('lastName'))
                    <span class="help-block">
                        <strong>{{ $errors->first('lastName') }}</strong>
                    </span>
                @endif

                <br><br>

                <label class="radio-icon ">
                    <input class="radio-icon__field"
                                 type="radio"
                                 name="sex"
                                 value="male"
                                 
                                 >
                    <div class="radio-icon__container">
                        <span class="radio-icon__icon  icon icon--check "></span>
                            <span class="radio-icon__label">@lang('männlich')</span>
                    </div>
                </label>
                <label class="radio-icon ">
                    <input class="radio-icon__field"
                                 type="radio"
                                 name="sex"
                                 value="female"
                                 
                                 >
                    <div class="radio-icon__container">
                        <span class="radio-icon__icon  icon icon--check "></span>
                            <span class="radio-icon__label">@lang('weiblich')</span>
                    </div>
                </label>
                <label class="radio-icon ">
                    <input class="radio-icon__field"
                                 type="radio"
                                 name="sex"
                                 value="trans"
                                 
                                 >
                    <div class="radio-icon__container">
                        <span class="radio-icon__icon  icon icon--check "></span>
                            <span class="radio-icon__label">@lang('transsexuell/asexuel')</span>
                    </div>
                </label>

                @if ($errors->has('sex'))
                    <span class="help-block">
                        <strong>{{ $errors->first('sex') }}</strong>
                    </span>
                @endif

                <br><br>

                <label class="input">
                    <input type="text" name="postalCode" class="input__field" placeholder=" " value="{{ old('postalCode') }}">
                        <span class="input__icon icon icon--user-circle "></span>
                    <span class="input__label">@lang('Deine Postleitzahl (optional)')</span>
                </label>

                @if ($errors->has('postalCode'))
                    <span class="help-block">
                        <strong>{{ $errors->first('postalCode') }}</strong>
                    </span>
                @endif

                <br><br>

                <label class="input">
                    <input type="text" name="city" class="input__field" placeholder=" " value="{{ old('city') }}">
                        <span class="input__icon icon icon--user-circle "></span>
                    <span class="input__label">@lang('Dein Wohnort (optional)')</span>
                </label>

                @if ($errors->has('city'))
                    <span class="help-block">
                        <strong>{{ $errors->first('city') }}</strong>
                    </span>
                @endif

                <br><br>

                <label class="input">
                    <input type="text" name="birthdate" class="input__field" placeholder=" " value="{{ old('birthdate') }}">
                        <span class="input__icon icon icon--user-circle "></span>
                    <span class="input__label">@lang('Dein Geburtsdatum (optional)')</span>
                </label>

                @if ($errors->has('birthdate'))
                    <span class="help-block">
                        <strong>{{ $errors->first('birthdate') }}</strong>
                    </span>
                @endif

                <br><br>

                <label class="input">
                    <input type="email" name="email" class="input__field" placeholder=" " value="{{ old('email') }}" required>
                        <span class="input__icon icon icon--mail "></span>
                    <span class="input__label">@lang('Deine E-Mail Adresse')</span>
                </label>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

                <br><br>

                <label class="input">
                    <input type="password" name="password" class="input__field" placeholder=" " value="{{ old('email') }}" required>
                        <span class="input__icon icon icon--password "></span>
                    <span class="input__label">@lang('Dein Passwort')</span>
                </label>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

                <br><br>

                <label class="input">
                    <input type="password" name="password_confirmation" class="input__field" placeholder=" " required>
                        <span class="input__icon icon icon--password "></span>
                    <span class="input__label">@lang('Passwort wiederholen')</span>
                </label>

                <br><br><br>
                <button type="submit">Go</button>
            </form>
        </div>
    </div>
</div>

@endsection
