
@extends('layouts.frontend')

@section('content')
<div class="container">
<div class="row">
<div class="col-xs-12"> 
<h1>Profil von {{ $profile->name }}</h1>
<h2>Email-Adresse: {{ $profile->email }}</h2>
<a href="{{ URL::previous() }}">Zurück zur Übersicht</a>
<hr>

</div>
</div>
</div>

@endsection