
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
				<h1 class="header-page__title -text-color-blue-2">Beachvolleyballfeld in {{ $beachcourt->city }}</h1>
			</div>	
			Rating:<span> <b>{{ str_limit($beachcourt->realRating, $limit = 3, $end = '') }}</b> ({{ $beachcourt->ratingCount }} Stimmen)</span>
			@if (($beachcourt->ratingCount) < 10)
			    Dieses Rating stammt von beachfelder.de
			@else
			    Dieses Rating stammt von den Usern
			@endif
		</div>
	</div>
	<div class="multifunctional-menu icon icon--ellipsis"></div>

	<div class="row -spacing-a">
		<div class="column column--12 column--m-6">
			<div class="slider-image">
				<div class="slider-image__navi">
					<div class="slider-image__navigation slider-image__navigation--left icon icon--arrow-left-thin"></div>
					<div class="slider-image__navigation slider-image__navigation--right icon icon--arrow-right-thin"></div>
				</div>
				<div class="slider-image__slider">
						<img src="https://beachfelder.de/img/dummy-image-beachcourt-detailpage.jpg" class="slider-image__image">
					  	<img src="https://beachfelder.de/img/dummy-image-beachcourt-detailpage.jpg" class="slider-image__image">
					  	<img src="https://beachfelder.de/img/dummy-image-beachcourt-detailpage.jpg" class="slider-image__image">
					  	<img src="https://beachfelder.de/img/dummy-image-beachcourt-detailpage.jpg" class="slider-image__image">
					  	<img src="https://beachfelder.de/img/dummy-image-beachcourt-detailpage.jpg" class="slider-image__image">
				</div>
			</div>
		</div>

		<div class="column column--12 column--m-6">
			<div class="navigation-tabs ">
				<ul class="navigation-tabs__title-bar">
					<li class="navigation-tabs__item navigation-tabs__item--active" data-tab="tab-1">
						<span class="navigation-tabs__title navigation-tabs__title--active">Ansprechpartner</span>
					</li>
					<li class="navigation-tabs__item" data-tab="tab-2">
						<span class="navigation-tabs__title ">Allgemeine Informationen</span>
					</li>
					<li class="navigation-tabs__item " data-tab="tab-3">
						<span class="navigation-tabs__title ">Lorem impjusm</span>
					</li>
				</ul>
				<div id="tab-1" class="navigation-tabs__content navigation-tabs__content--active">
					<p class="-typo-copy--large -font-primary -text-color-blue-2">
						Fr. Mustermann
					</p>
					<p class="-typo-copy -font-primary -text-color-blue-2 -spacing-static-a">
						{{ $beachcourt -> organization }}
					</p>
					<p class="-typo-copy -font-primary -text-color-blue-2">
						Tiefenbronner Str. 1<br>
						75233 Tiefenbronn
					</p>
					<p class="-typo-copy -font-primary -text-color-green">
						<a href="http://tiefenbronn.de" target="_blank">www.tiefenbronn.de</a>
					</p>
				</div>
				<div id="tab-2" class="navigation-tabs__content ">
					<h4 class="-typo-headline-5 -font-secondary -text-color-green">Koordinaten</h4>
					<p class="-typo-copy -font-primary -text-color-blue-2 -spacing-static-a">
						{{ $beachcourt->latitude }}<br>
						{{ $beachcourt -> longitude }}
					</p>
				</div>
				<div id="tab-3" class="navigation-tabs__content ">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam maxime iusto tempore porro a, voluptas laborum, unde.
				</div>
			</div>
		</div>
	</div>
</div>



    <form action="{{ url('/rating/new') }}" method="POST" class="form-inline upload-file-form" enctype="multipart/form-data">
        {{ csrf_field() }}
        
        <input type="hidden" value="{{ $beachcourt->id }}" content="text" name="beachcourtname">

       
        <h2>Kategorie: Sand</h2>
			    <label for="sandQuality">sandQuality</label>
			    <select class="form-control" name="sandQuality">
			    	<option value="">Bitte wählen</option>
					  <option value="10">:)</option>
					  <option value="5">:|</option>
					  <option value="1">:(</option>
					</select>
			    <label for="courtTopography">courtTopography</label>
			    <select class="form-control" name="courtTopography">
			    	<option value="">Bitte wählen</option>
					  <option value="7">:)</option>
					  <option value="4">:|</option>
					  <option value="1">:(</option>
					</select>
			    <label for="sandDepth">sandDepth</label>
			    <select class="form-control" name="sandDepth">
			    	<option value="">Bitte wählen</option>
					  <option value="10">:)</option>
					  <option value="5">:|</option>
					  <option value="1">:(</option>
					</select>
			    <label for="irrigationSystem">irrigationSystem</label>
			    <select class="form-control" name="irrigationSystem">
			    	<option value="">Bitte wählen</option>
					  <option value="7">:)</option>
					  <option value="4">:|</option>
					  <option value="1">:(</option>
					</select>

					<h2>Kategorie: Netz</h2>
			    <label for="netHeight">netHeight</label>
			    <select class="form-control" name="netHeight">
			    	<option value="">Bitte wählen</option>
					  <option value="10">:)</option>
					  <option value="5">:|</option>
					  <option value="1">:(</option>
					</select>
			    <label for="netType">netType</label>
			    <select class="form-control" name="netType">
			    	<option value="">Bitte wählen</option>
					  <option value="7">:)</option>
					  <option value="4">:|</option>
					  <option value="1">:(</option>
					</select>
			    <label for="netAntennas">netAntennas</label>
			    <select class="form-control" name="netAntennas">
			    	<option value="">Bitte wählen</option>
					  <option value="4">:)</option>
					  <option value="2">:|</option>
					  <option value="1">:(</option>
					</select>
			    <label for="netTension">netTension</label>
			    <select class="form-control" name="netTension">
			    	<option value="">Bitte wählen</option>
					  <option value="7">:)</option>
					  <option value="4">:|</option>
					  <option value="1">:(</option>
					</select>

					<h2>Kategorie: Feld</h2>
			    <label for="boundaryLines">boundaryLines</label>
			    <select class="form-control" name="boundaryLines">
			    	<option value="">Bitte wählen</option>
					  <option value="10">:)</option>
					  <option value="5">:|</option>
					  <option value="1">:(</option>
					</select>
			    <label for="fieldDimensions">fieldDimensions</label>
			    <select class="form-control" name="fieldDimensions">
			    	<option value="">Bitte wählen</option>
					  <option value="7">:)</option>
					  <option value="4">:|</option>
					  <option value="1">:(</option>
					</select>
			    <label for="securityZone">securityZone</label>
			    <select class="form-control" name="securityZone">
			    	<option value="">Bitte wählen</option>
					  <option value="10">:)</option>
					  <option value="5">:|</option>
					  <option value="1">:(</option>
					</select>

					<h2>Kategorie: Umgebung</h2>
			    <label for="windProtection">windProtection</label>
			    <select class="form-control" name="windProtection">
			    	<option value="">Bitte wählen</option>
					  <option value="7">:)</option>
					  <option value="4">:|</option>
					  <option value="1">:(</option>
					</select>
			    <label for="interferenceCourt">interferenceCourt</label>
			    <select class="form-control" name="interferenceCourt">
			    	<option value="">Bitte wählen</option>
					  <option value="4">:)</option>
					  <option value="2">:|</option>
					  <option value="1">:(</option>
					</select>

        <div class="form-group">
          <button type="submit" class="btn btn-default">
              Bewertung abgeben
          </button>
        </div>
    </form>


<div class="row -spacing-widget-default">
	<div class="column column--12">
		<iframe  width="100%" height="450" frameborder="0" zoom="5" style="border:0" allowfullscreen src="https://maps.google.de/maps?q={{ $beachcourt->latitude }},{{ $beachcourt->longitude }}&hl=es;z=14&amp;output=embed"></iframe>
	</div>
</div>

@include('_partials.newsletter')


<div class="content">
<div class="row">
		<div class="column column--12">
<h1>Das ist das Beachfeld {{ $beachcourt->courtName }} in {{ $beachcourt->city }}</h1>

</p>
<hr>


	</div></div>
</div>

@include('_partials.organism.footer')

@endsection