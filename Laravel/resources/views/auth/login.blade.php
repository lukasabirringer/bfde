@extends('layouts.app')

@section('content')

<div class="content">
    <div class="row -spacing-widget-default">
        <div class="column column--12">
            {{> organisms-header-page }}
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

            <button type="submit" class="button">
                <span class="button__label ">Anmelden</span>
            </button>
        </form>
            <br><br>
            {{> molecules-input(input_label:"Dein Passwort", input_type: "password", input_icon: "password") }}
            <br><br>
            {{> molecules-button(button_label:"Anmelden") }}
            <p class="-typo-copy -text-color-blue-2 -font-primary -spacing-static-c">
                <a href="#" class="-typo-copy-link -text-color-green">Passwort vergessen?</a>
            </p>
            <p class="-typo-copy -text-color-blue-2 -font-primary -spacing-static-c">Noch kein Mitglied?
                Dann <a href="#" class="-typo-copy-link -text-color-green">registriere</a> dich jetzt</p>
        </div>
        <div class="column column--2"></div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
