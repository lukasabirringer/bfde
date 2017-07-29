@extends('layouts.frontend')

@section('content')

    <div class="row row--zero">
            <div class="column column--12 column--zero">
                @include('_partials.molecules.hero-image', ['id' => 'standard', 'heroImage'=> 'fallback.jpg'])
            </div>
        </div>
    </div>
    <div class="-background-gray-2 -spacing-inner-a">
        <div class="content">
            <div class="row">
                <form action="{{ url('/beachcourts/search') }}" method="POST">
                <div class="column column--12 column--s-10">
                {{ csrf_field() }}
                <label class="input ">
                    <input type="text" class="input__field" placeholder="Gib eine PLZ oder einen Ort ein" id="address-input" style="height: 100%;">
                    <!-- <span class=" input__label  input__label--right">Gib eine PLZ oder einen Ort ein</span> -->
                </label>
                <!-- @include('_partials.molecules.input', ['inputName'=>'searchquery', 'inputIcon'=>'map-marker', 'inputType'=>'text', 'inputLabel'=>'Gib eine PLZ oder einen Ort ein']) -->
                </div>
                <div class="column column--12 column--s-2">
                @include('_partials.molecules.button-icon', ['buttonIconType'=> 'submit','buttonIconIcon'=>'search', 'buttonIconBackgroundcolor'=>'red', 'buttonIconCustomClass'=> ' ' ])
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="row -spacing-widget-default">
            <div class="column column--12">
                @include('_partials.header-page')
            </div>
        </div>
    </div>

    @include('_partials.newsletter')

    <div class="content">
        <div class="row -spacing-widget-default">
            <div class="column column--12">

                <div class="header-page ">
                    <h1 class="header-page__title  -text-color-blue-2 ">
                        @lang('Unsere neuesten Beachvolleyball-Felder')
                    </h1>
                </div>

            </div>
        </div>
        <div class="row -spacing-a">
            @include('_partials.organism.beachcourt-summary')
        </div>
        <div class="row">
            <div class="column column--12">
                <p class="-typo-copy--large -font-primary -text-color-green -align-center -spacing-static-d"><a href="{{ url('beachcourts') }}">@lang('Übersicht aller Beachvolleyballfelder')</a></p>
            </div>
        </div>
    </div>

    @include('_partials.organism.footer')

	<div class="panel-body">
          <a href="{{ url('beachcourts') }}"><button type="button" class="btn btn-primary">Beachcourt Übersicht</button></a>
          <a href="{{ url('pages') }}"><button type="button" class="btn btn-primary">Pages Übersicht</button></a>
	</div>
    
@endsection

