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
                <div class="column column--12 column--s-10">
                @include('_partials.molecules.input', ['inputIcon'=>'map-marker', 'inputType'=>'text', 'inputLabel'=>'Gib&#39; eine PLZ oder einen Ort ein'])
                </div>
                <div class="column column--12 column--s-2">
                @include('_partials.molecules.button-icon', ['buttonIconIcon'=>'search', 'buttonIconBackgroundcolor'=>'red'])
                </div>
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
                        Unsere neuesten Beachvolleyball-Felder
                    </h1>
                </div>

            </div>
        </div>
         <div class="row -spacing-a">
         @include('_partials.organism.beachcourt-summary')
              
           
          
          
        </div>
    </div>
    @include('_partials.organism.footer')
   




	<div class="panel-body">
          <a href="{{ url('beachcourts') }}"><button type="button" class="btn btn-primary">Beachcourt Übersicht</button></a>
          <a href="{{ url('pages') }}"><button type="button" class="btn btn-primary">Pages Übersicht</button></a>
	</div>

@endsection

