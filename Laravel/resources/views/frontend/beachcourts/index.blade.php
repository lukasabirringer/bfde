
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
                <h1 class="header-page__title -text-color-blue-2">@lang('Übersicht aller Beachvolleyballfelder')</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="infinite-scroll">
            @include('_partials.organism.beachcourt-summary')            
        </div>
    </div>
</div>
@include('_partials.organism.footer')

@endsection