@extends('layouts.frontend')

@section('content')

@if (session('status'))
    <div class="notification-sticky">
        <div class="content notification-sticky__content">
            <span class="notification-sticky__icon icon icon--info"></span>
            <span class="notification-sticky__text">{{ session('status') }}</span>
        </div>
        <span class="notification-sticky__icon notification-sticky__icon--close icon icon--close"></span>
    </div>
@endif

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
    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <input type="hidden" name="role" value="registered">
        <div class="row -spacing-d">
            
            <div class="column column--12">
                <label class="input">
                    <input type="text" name="name" class="input__field" placeholder=" " value="{{ old('name') }}" required>
                    <span class="input__label">@lang('Dein Username')</span>

                    @if ($errors->has('name'))
                        <span class="input__error">
                            {{ $errors->first('name') }}
                        </span>
                    @endif
                </label>
            </div>
        </div>
        <div class="row">
            <div class="column column--12 column--s-6 -spacing-d">
                <label class="input">
                    <input type="text" name="firstName" class="input__field" placeholder=" " value="{{ old('firstName') }}" required>
                    <span class="input__label">@lang('Dein Vorname')</span>

                    @if ($errors->has('firstName'))
                        <span class="input__error">
                            {{ $errors->first('firstName') }}
                        </span>
                    @endif
                </label>
            </div>
            <div class="column column--12 column--s-6 -spacing-d">
                <label class="input">
                    <input type="text" name="lastName" class="input__field" placeholder=" " value="{{ old('lastName') }}" required>
                    <span class="input__label">@lang('Dein Nachname')</span>

                    @if ($errors->has('lastName'))
                        <span class="input__error">
                            {{ $errors->first('lastName') }}
                        </span>
                    @endif
                </label>
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

                    @if ($errors->has('sex'))
                        <span class="input__error">
                            {{ $errors->first('sex') }}
                        </span>
                    @endif
                </label>                
            </div>
        </div>
        <div class="row">
            <div class="column column--4 column--s-2 -spacing-d">
                <label class="input">
                    <input type="text" name="postalCode" class="input__field" placeholder=" " value="{{ old('postalCode') }}">
                    <span class="input__label">@lang('Deine PLZ (optional)')</span>

                    @if ($errors->has('postalCode'))
                        <span class="input__error">
                            {{ $errors->first('postalCode') }}
                        </span>
                    @endif
                </label>
            </div>
            <div class="column column--8 column--s-10 -spacing-d">
                <label class="input">
                    <input type="text" name="city" class="input__field" placeholder=" " value="{{ old('city') }}">
                    <span class="input__label">@lang('Dein Wohnort (optional)')</span>

                    @if ($errors->has('city'))
                        <span class="input__error">
                            {{ $errors->first('city') }}
                        </span>
                    @endif
                </label>
            </div>
        </div>
        <div class="row">
            <div class="column column--12 column--s-6 -spacing-d">
                <label class="input">
                    <input type="date" name="birthdate" class="input__field" placeholder=" " value="{{ old('birthdate') }}">
                    <span class="input__label">@lang('Dein Geburtsdatum (optional)')</span>

                    @if ($errors->has('birthdate'))
                        <span class="input__error">
                            {{ $errors->first('birthdate') }}
                        </span>
                    @endif
                </label>
            </div>
            <div class="column column--12 column--s-6 -spacing-d">
                <label class="input">
                    <input type="email" name="email" class="input__field" placeholder=" " value="{{ old('email') }}" required>
                    <span class="input__label">@lang('Deine E-Mail Adresse')</span>

                    @if ($errors->has('email'))
                        <span class="input__error">
                            {{ $errors->first('email') }}
                        </span>
                    @endif
                </label>
            </div>
        </div>
        <div class="row">
            <div class="column column--12 column--s-6 -spacing-d">
                <label class="input">
                    <input type="password" name="password" class="input__field" placeholder=" " value="{{ old('email') }}" required>
                    <span class="input__label">@lang('Dein Passwort')</span>

                    @if ($errors->has('password'))
                        <span class="input__error">
                            {{ $errors->first('password') }}
                        </span>
                    @endif
                </label>
            </div>

            <div class="column column--12 column--s-6 -spacing-d">
                <label class="input">
                    <input type="password" name="password_confirmation" class="input__field" placeholder=" " required>
                    <span class="input__label">@lang('Passwort wiederholen')</span>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="column column--auto column--s-10 -spacing-d"></div>
            <div class="column column--12 column--s-2 -spacing-d">
                @include('_partials.molecules.button', ['buttonJavaScript'=>'', 'buttonType'=>'submit', 'buttonCustomClass'=>'-spacing-static-b', 'buttonBackgroundcolor'=>'', 'buttonLinkTarget'=>'', 'buttonIcon'=>'', 'buttonLabel'=>'Jetzt registrieren'])
            </div>
        </div>
    </form>
</div>
@include('_partials.organism.footer')

@endsection