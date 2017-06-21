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
                    <span class="input__label">@lang('Deine Username')</span>
                </label>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
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
                @include('_partials.molecules.button', ['buttonType'=>'submit', 'buttonLinkTarget'=>'', 'buttonIcon'=>'', 'buttonLabel'=>'Jetzt registrieren', 'buttonCustomClass'=>'', 'buttonBackgroundcolor'=>''])
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
