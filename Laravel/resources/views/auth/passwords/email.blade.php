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
                    Passwort zurücksetzen
                </h1>
                <p class="header-page__subtitle">
                    Falls du dein Passwort nicht mehr weißt, kannst du es hier problemlos zurücksetzen. Bitte gib' deine E-Mail Adresse ein und wir senden dir an diese eine E-Mail mit einem Link zum Zurücksetzen des Passwortes.
                </p>
            </div>
        </div>
    </div>
    <div class="row -spacing-static-d">
        <form role="form" method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}
            <div class="column column--12 column--s-8">
                <label class="input">
                    <input type="email" placeholder=" " class="input__field input__field--icon" name="email" value="{{ old('email') }}" required>
                    <span class="input__icon icon icon--mail"></span>
                    <span class="input__label input__label--icon">@lang('Deine E-Mail Adresse')</span>
                </label>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

            </div>
            <div class="column column--12 column--s-4">
                @include('_partials.molecules.button', ['buttonJavaScript'=>'', 'buttonType'=>'submit', 'buttonCustomClass'=>'', 'buttonBackgroundcolor'=>'', 'buttonLinkTarget'=>'', 'buttonIcon'=>'send', 'buttonLabel'=>'Link zusenden'])
            </div>
        </form>
    </div>
</div>

@include('_partials.organism.footer')

@endsection
