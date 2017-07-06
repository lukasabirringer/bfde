
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
            <div class="header-page">
                <h1 class="header-page__title -text-color-blue-2">@lang('Suchergebnisse')</h1>
                <p>(Gesucht nach: {{ $query }}/{{ $place }})</p>
            </div>
        </div>
    </div>
    <div class="row ">
       @include('_partials.organism.beachcourt-summary')
    </div>
</div>

@include('_partials.organism.footer')

@endsection

