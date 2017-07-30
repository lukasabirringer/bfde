
@extends('layouts.frontend')

@section('content')
<div class="row row--zero">
    <div class="column column--12 column--zero">
        <div class="hero-image-beachcourt-detail " style="background-image: url(http://beachfelder.de/img/header-image.jpg)">
        	<div class="hero-image-beachcourt-detail__overlay">
        		<h1 class="hero-image-beachcourt-detail__title">Beachvolleyballfeld<br>in {{ $beachcourt-> city }}</h1>
        		<h2 class="hero-image-beachcourt-detail__subtitle">{{ $beachcourt-> latitude }}, {{ $beachcourt-> longitude }}</h2>
        	</div>
        </div>
    </div>
</div>
<div class="content">
	<div class="row -spacing-widget-default">
		<div class="column column--12">
			<div class="header-page">
			@if (Auth::check())                 
	           <favorite
	              :beachcourt={{ $beachcourt->id }}
	              :favorited={{ $beachcourt->favorited() ? 'true' : 'false' }}
	          ></favorite>
     		@endif
			</div>
			Rating:<span> <b>{{ str_limit($beachcourt->realRating, $limit = 3, $end = '') }}</b> ({{ $beachcourt->ratingCount }} Stimmen)</span>
		</div>
	</div>
	<div class="row -spacing-a">
		<div class="column column--12 column--m-6">
			<div class="slider-image">
				<div class="slider-image__navi">
					<div class="slider-image__navigation slider-image__navigation--left icon icon--arrow-left-thin"></div>
					<div class="slider-image__navigation slider-image__navigation--right icon icon--arrow-right-thin"></div>
				</div>
				<div class="slider-image__slider">
						@if(!empty($myFavorite->sliderPath ) > 0)
						<img src="/uploads/beachcourts/{{ $beachcourt->id }}/slider/1.png" class="slider-image__image">
						<img src="/uploads/beachcourts/{{ $beachcourt->id }}/slider/2.png" class="slider-image__image">
						<img src="/uploads/beachcourts/{{ $beachcourt->id }}/slider/3.png" class="slider-image__image">
						<img src="/uploads/beachcourts/{{ $beachcourt->id }}/slider/4.png" class="slider-image__image">
						<img src="/uploads/beachcourts/{{ $beachcourt->id }}/slider/5.png" class="slider-image__image">
						@else
						<img src="https://beachfelder.de/img/dummy-image-beachcourt-detailpage.jpg" class="slider-image__image">
						<img src="https://beachfelder.de/img/dummy-image-beachcourt-detailpage.jpg" class="slider-image__image">
						<img src="https://beachfelder.de/img/dummy-image-beachcourt-detailpage.jpg" class="slider-image__image">
						<img src="https://beachfelder.de/img/dummy-image-beachcourt-detailpage.jpg" class="slider-image__image">
						<img src="https://beachfelder.de/img/dummy-image-beachcourt-detailpage.jpg" class="slider-image__image">
						@endif
				</div>
			</div>
		</div>
 						
		<div class="column column--12 column--m-6">
			<div class="navigation-tabs ">
				<ul class="navigation-tabs__title-bar">
					<li class="navigation-tabs__item navigation-tabs__item--active" data-tab="tab-1">
						<span class="navigation-tabs__title navigation-tabs__title--active">Allgemeine Informationen </span>
					</li>
					<li class="navigation-tabs__item" data-tab="tab-2">
						<span class="navigation-tabs__title ">Ansprechpartner</span>
					</li>
				</ul>
				<div id="tab-1" class="navigation-tabs__content navigation-tabs__content--active">
					<h4 class="-typo-headline-5 -font-secondary -text-color-blue-1">Koordinaten</h4>
					<p class="-typo-copy -font-primary -text-color-blue-2 -spacing-static-a">
						{{ $beachcourt->latitude }}<br>
						{{ $beachcourt -> longitude }}
					</p>
					<h4 class="-typo-headline-5 -font-secondary -text-color-blue-1 -spacing-static-c">Anschrift</h4>
					<p class="-typo-copy -font-primary -text-color-blue-2 -spacing-static-a">
						{{ $beachcourt->street }} {{ $beachcourt->houseNumber }}<br>
						{{ $beachcourt->postalCode }} {{ $beachcourt->city }}
					</p>

					<h4 class="-typo-headline-5 -font-secondary -text-color-blue-1 -spacing-static-c">Anzahl der Felder</h4>
					<p class="-typo-copy -font-primary -text-color-blue-2 -spacing-static-a">
						Indoor: {{ $beachcourt->courtCountIndoor }}<br>
						Outdoor: {{ $beachcourt->courtCountOutdoor }}
					</p>

					<h4 class="-typo-headline-5 -font-secondary -text-color-blue-1 -spacing-static-c">Kann ich auf diesem Feld kostenlos spielen?</h4>
					<p class="-typo-copy -font-primary -text-color-blue-2 -spacing-static-a">
						@if ($beachcourt->chargeable == 1 )
							Nein, dieses Feld ist kostenpflichtig. Die Preise dafür kannst du beim Betreiber in Erfahrung bringen.
						@else
							Ja, auf diesem Feld kannst du kostenlos spielen.
						@endif
					</p>
				</div>
				<div id="tab-2" class="navigation-tabs__content">
					<p class="-typo-copy--large -font-primary -text-color-blue-2">
						{{ $beachcourt -> operator }}
					</p>
					<p class="-typo-copy -font-primary -text-color-blue-2 -spacing-static-a">
						{{ $beachcourt -> organization }}
					</p>
					<p class="-typo-copy -font-primary -text-color-green">
						<a href="{{ $beachcourt->operatorURL }}" target="_blank">{{ $beachcourt->operatorURL }}</a>
					</p>
				</div>
				
			</div>
		</div>
	</div>
	<div class="row">
		<div class="column column--12 column--s-6 -spacing-a">
			<div class="notification-box-rating ">
				<div class="notification-box-rating__summary">
					<img src="http://beachfelder.de/img/badge-rating-beachcourt-detail-page@2x.png" class="notification-box-rating__image">
					<h4 class="notification-box-rating__points">{{ $beachcourt->realRating }} von 5</h4>
				</div>
				<div class="notification-box-rating__details">
					<dl>
						<dt class="notification-box-rating__label"> Sand </dt>
						<dd class="notification-box-rating__rating"> {{ $beachcourt->SandRating }} von 34 Punkten </dd>
					</dl>
					<dl>
						<dt class="notification-box-rating__label"> Netz </dt>
						<dd class="notification-box-rating__rating"> {{ $beachcourt->NetRating }} von 28 Punkten </dd>
					</dl>
					<dl>
						<dt class="notification-box-rating__label"> Feld </dt>
						<dd class="notification-box-rating__rating"> {{ $beachcourt->CourtRating }} von 27 Punkten </dd>
					</dl>
					<dl>
						<dt class="notification-box-rating__label"> Umgebung </dt>
						<dd class="notification-box-rating__rating"> {{ $beachcourt->EnvironmentRating }} von 11 Punkten </dd>
					</dl>
				</div>
			</div>
		</div>
		<div class="column column--12 column--s-6 -spacing-a">
			@if ($beachcourt->notes !== '')
				<div class="notification-box   notification-box--info ">
					<div class="notification-box__icon icon icon--info"></div>
					<div class="notification-box__message">
						<h4 class="notification-box__headline">Bemerkungen</h4>
						<p class="notification-box__subline">{{ $beachcourt->notes }}</p>
					</div>
				</div>
			@endif
		</div>
	</div>
</div>


<div class="row row--zero -spacing-widget-default">
	<div class="column column--zero column--12">
		<div class="map">
			<iframe class="map__canvas" width="100%" height="450" frameborder="0" zoom="5" style="border:0" allowfullscreen src="https://maps.google.de/maps?q={{ $beachcourt->latitude }},{{ $beachcourt->longitude }}&hl=es;z=14&amp;output=embed"></iframe>
			<div class="map__overlay">@lang('Klicke, um auf der Karte zu navigieren')</div>	
		</div>
	</div>
</div>

<div class="content">
	<div class="row -spacing-widget-default">
		<div class="column column--12 -spacing-a -spacing-inner-b -background-gray-3">
			    @if (Auth::guest())
			    	@include('_partials.organism.teaser-link', ['teaserLinkIcon'=>'plus', 'teaserLinkTitle' => 'Melde dich an, um dieses Beachvolleyballfeld bewerten zu können', 'teaserLinkLinkTarget'=>'../login', 'teaserLinkName'=>'Jetzt anmelden', 'teaserLinkButton' => false])
			    @else

			    <form action="{{ url('/rating/new') }}" method="POST" class="form-inline upload-file-form" enctype="multipart/form-data">
			        {{ csrf_field() }}
			        
			        <input type="hidden" value="{{ $beachcourt->id }}" content="text" name="beachcourtname">
			       	
					<div class="row">
						<div class="column column--12">
							<h2 class="-typo-headline-2 -font-secondary -text-color-green">Bewerte dieses Beachvolleyballfeld</h2>
						</div>
					</div>

					<div class="section section--sand">
						<div class="row">
							<div class="column column--12 -spacing-static-f">
								<h3 class="-typo-headline-3 -font-secondary -text-color-blue-2">Sand</h3>
								<p class="-typo-copy--large -font-primary -text-color-blue-2">Wie ist die Qualität des Sandes?</p>			
							</div>
						</div>
						<div class="row">
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="sandQuality" value="10">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--super "></span>
										<span class="radio-icon__label">Sehr gut</span>
									</div>
								</label>
							</div>
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="sandQuality" value="5">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--normal"></span>
										<span class="radio-icon__label">Gut</span>
									</div>
								</label>
							</div>
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="sandQuality" value="1">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--bad "></span>
										<span class="radio-icon__label">Schlecht</span>
									</div>
								</label>
							</div>
						</div>

						<div class="row row__step">
							<div class="column column--12 -spacing-static-f">
								<p class="-typo-copy--large -font-primary -text-color-blue-2">Ist die Spielfläche eben?</p>			
							</div>
						</div>
						<div class="row row__step">
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="courtTopography" value="7">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--super "></span>
										<span class="radio-icon__label">Ja</span>
									</div>
								</label>
							</div>
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="courtTopography" value="4">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--normal"></span>
										<span class="radio-icon__label">Es geht so</span>
									</div>
								</label>
							</div>
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="courtTopography" value="1">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--bad "></span>
										<span class="radio-icon__label">Nein</span>
									</div>
								</label>
							</div>
						</div>

						<div class="row row__step">
							<div class="column column--12 -spacing-static-f">
								<p class="-typo-copy--large -font-primary -text-color-blue-2">Wie tief ist der Sand an der flachsten Stelle des Feldes?</p>			
							</div>
						</div>
						<div class="row row__step">
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="sandDepth" value="10">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--super "></span>
										<span class="radio-icon__label">Mehr als 30cm</span>
									</div>
								</label>
							</div>
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="sandDepth" value="5">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--normal"></span>
										<span class="radio-icon__label">20-30cm</span>
									</div>
								</label>
							</div>
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="sandDepth" value="1">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--bad "></span>
										<span class="radio-icon__label">Weniger als 20cm</span>
									</div>
								</label>
							</div>
						</div>

						<div class="row row__step">
							<div class="column column--12 -spacing-static-f">
								<p class="-typo-copy--large -font-primary -text-color-blue-2">Ist ein Staubschutz, wie zum Beispiel eine Bewässerungsanlage vorhanden?</p>			
							</div>
						</div>
						<div class="row row__step">
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="irrigationSystem" value="7">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--super "></span>
										<span class="radio-icon__label">Keine Staubentwicklung und/oder Wasseranschluss vorhanden</span>
									</div>
								</label>
							</div>
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="irrigationSystem" value="4">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--normal"></span>
										<span class="radio-icon__label">Leichte Staubentwicklung,<br>kein Wasseranschluss</span>
									</div>
								</label>
							</div>
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="irrigationSystem" value="1">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--bad "></span>
										<span class="radio-icon__label">Starke Staubentwicklung,<br>kein Wasseranschluss</span>
									</div>
								</label>
							</div>
						</div>
					</div> <!-- section sand ENDE -->

					<div class="section section--net">
						<div class="row -spacing-static-f">
							<div class="column column--12">
								<hr class="divider">
							</div>
						</div>

						<div class="row row__step">
							<div class="column column--12 -spacing-static-f">
								<h3 class="-typo-headline-3 -font-secondary -text-color-blue-2">Netz</h3>
								<p class="-typo-copy--large -font-primary -text-color-blue-2">Ist die Netzhöhe frei wählbar?</p>			
							</div>
						</div>
						<div class="row row__step">
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="netHeight" value="10">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--super "></span>
										<span class="radio-icon__label">Ja, man kann alle Höhen von 2m bis 2,43m wählen</span>
									</div>
								</label>
							</div>
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="netHeight" value="5">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--normal"></span>
										<span class="radio-icon__label">Die Höhe stimmt, ist aber nicht verstellbar</span>
									</div>
								</label>
							</div>
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="netHeight" value="1">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--bad "></span>
										<span class="radio-icon__label">Nein, leider ist die Höhe nicht veränderbar</span>
									</div>
								</label>
							</div>
						</div>

						<div class="row row__step">
							<div class="column column--12 -spacing-static-f">
								<p class="-typo-copy--large -font-primary -text-color-blue-2">Wie ist die Beschaffenheit des Netzes?</p>		
							</div>
						</div>
						<div class="row row__step">
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="netType" value="7">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--super "></span>
										<span class="radio-icon__label">Stabiles Beachnetz <br>mit fester Einfassung</span>
									</div>
								</label>
							</div>
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="netType" value="4">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--normal"></span>
										<span class="radio-icon__label">Provisorisches Netz (zum Beispiel Hallen-Netz), Beachnetz mit Mängeln</span>
									</div>
								</label>
							</div>
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="netType" value="1">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--bad "></span>
										<span class="radio-icon__label">Schnur oder Kettennetz <br>oder Netz fehlt</span>
									</div>
								</label>
							</div>
						</div>

						<div class="row row__step">
							<div class="column column--12 -spacing-static-f">
								<p class="-typo-copy--large -font-primary -text-color-blue-2">Sind Antennen vorhanden?</p>			
							</div>
						</div>
						<div class="row row__step">
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="netAntennas" value="4">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--super "></span>
										<span class="radio-icon__label">Ja</span>
									</div>
								</label>
							</div>
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="netAntennas" value="2">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--normal"></span>
										<span class="radio-icon__label">Ja, aber die Befestigung ist mangelhaft</span>
									</div>
								</label>
							</div>
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="netAntennas" value="1">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--bad "></span>
										<span class="radio-icon__label">Nein</span>
									</div>
								</label>
							</div>
						</div>

						<div class="row row__step">
							<div class="column column--12 -spacing-static-f">
								<p class="-typo-copy--large -font-primary -text-color-blue-2">Lässt sich das Netz korrekt spannen?</p>			
							</div>
						</div>
						<div class="row row__step">
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="netTension" value="7">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--super "></span>
										<span class="radio-icon__label">Spannseil und Abspannung intakt</span>
									</div>
								</label>
							</div>
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="netTension" value="4">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--normal"></span>
										<span class="radio-icon__label">Zu wenig Spannung, nicht justierbar</span>
									</div>
								</label>
							</div>
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="netTension" value="1">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--bad "></span>
										<span class="radio-icon__label">Netz hängt durch, bzw. schwingt stark</span>
									</div>
								</label>
							</div>
						</div>
					</div> <!-- section net ENDE -->

					<div class="section section--court">
						<div class="row -spacing-static-f">
							<div class="column column--12">
								<hr class="divider">
							</div>
						</div>

						<div class="row row__step">
							<div class="column column--12 -spacing-static-f">
								<h3 class="-typo-headline-3 -font-secondary -text-color-blue-2">Spielfeld</h3>
								<p class="-typo-copy--large -font-primary -text-color-blue-2">Wie ist die Beschaffenheit der Linien?</p>		
							</div>
						</div>
						<div class="row row__step">
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="boundaryLines" value="10">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--super "></span>
										<span class="radio-icon__label">5 cm breit, im Boden verankert</span>
									</div>
								</label>
							</div>
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="boundaryLines" value="5">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--normal"></span>
										<span class="radio-icon__label">Falsche Breite oder Verankerung lose</span>
									</div>
								</label>
							</div>
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="boundaryLines" value="1">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--bad "></span>
										<span class="radio-icon__label">Keine Linien oder Linien nicht verankert</span>
									</div>
								</label>
							</div>
						</div>

						<div class="row row__step">
							<div class="column column--12 -spacing-static-f">
								<p class="-typo-copy--large -font-primary -text-color-blue-2">Sind die Spielfeldmaße regelkonform?</p>		
							</div>
						</div>
						<div class="row row__step">
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="fieldDimensions" value="7">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--super "></span>
										<span class="radio-icon__label">8 x 16 m +/- 5 cm,<br>rechteckig</span>
									</div>
								</label>
							</div>
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="fieldDimensions" value="4">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--normal"></span>
										<span class="radio-icon__label">Abweichung 5-25 cm<br>oder nicht rechteckig gespannt</span>
									</div>
								</label>
							</div>
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="fieldDimensions" value="1">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--bad "></span>
										<span class="radio-icon__label">Abweichung >25 cm<br>oder geringe Abweichung + nicht rechteckig </span>
									</div>
								</label>
							</div>
						</div>

						<div class="row row__step">
							<div class="column column--12 -spacing-static-f">
								<p class="-typo-copy--large -font-primary -text-color-blue-2">Besteht eine ausreichende Sicherheitszone um das Spielfeld?</p>		
							</div>
						</div>
						<div class="row row__step">
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="securityZone" value="10">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--super "></span>
										<span class="radio-icon__label">3 m ringsum oder mehr</span>
									</div>
								</label>
							</div>
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="securityZone" value="5">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--normal"></span>
										<span class="radio-icon__label">2 - 3 m</span>
									</div>
								</label>
							</div>
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="securityZone" value="1">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--bad "></span>
										<span class="radio-icon__label">Unter 2 m</span>
									</div>
								</label>
							</div>
						</div>
					</div> <!-- section court ENDE -->

			       	
					<div class="section section--surroundings">
						<div class="row -spacing-static-f">
							<div class="column column--12">
								<hr class="divider">
							</div>
						</div>

						<div class="row row__step">
							<div class="column column--12 -spacing-static-f">
								<h3 class="-typo-headline-3 -font-secondary -text-color-blue-2">Umgebung</h3>
								<p class="-typo-copy--large -font-primary -text-color-blue-2">Wie gut ist das Spielfeld gegen Wind geschützt?</p>		
							</div>
						</div>
						<div class="row row__step">
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="windProtection" value="7">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--super "></span>
										<span class="radio-icon__label">Gut windgeschützt</span>
									</div>
								</label>
							</div>
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="windProtection" value="4">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--normal"></span>
										<span class="radio-icon__label">Windanfällig bei schlechtem Wetter</span>
									</div>
								</label>
							</div>
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="windProtection" value="1">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--bad "></span>
										<span class="radio-icon__label">Eigentlich immer windig, ohne Schutzmaßnahmen</span>
									</div>
								</label>
							</div>
						</div>

						<div class="row row__step">
							<div class="column column--12 -spacing-static-f">
								<p class="-typo-copy--large -font-primary -text-color-blue-2">Beeinträchtigen andere Spielfelder das Spielgeschehen?</p>		
							</div>
						</div>
						<div class="row row__step">
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="interferenceCourt" value="4">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--super "></span>
										<span class="radio-icon__label">Einzelfeld,<br>bzw. Schutz durch Ballfangzaun</span>
									</div>
								</label>
							</div>
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="interferenceCourt" value="2">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--normal"></span>
										<span class="radio-icon__label">Maximal 2 Felder nebeneinander<br>ohne Ballfangzaun</span>
									</div>
								</label>
							</div>
							<div class="column column--12 column--s-4 -spacing-static-c">
								<label class="radio-icon ">
									<input class="radio-icon__field" type="radio" name="interferenceCourt" value="1">
									<div class="radio-icon__container">
										<span class="radio-icon__icon icon icon--bad "></span>
										<span class="radio-icon__label">Mehrere Felder direkt nebeneinander<br>ohne Ballfangzaun</span>
									</div>
								</label>
							</div>
						</div>

						<div class="row row__step">
							<div class="column column--auto column--s-8"></div>
							<div class="column column--12 column--s-4 -spacing-static-f">
								<button type="submit" class="button">
									<span class="button__icon icon icon--send"></span>
									<span class="button__label">Bewertung abgeben</span>
								</button>
							</div>
						</div>	
					</div> <!-- section surroundings ENDE -->
			    </form>
				@endif
		</div>
	</div>
</div>

@include('_partials.newsletter')

@include('_partials.organism.footer')

@endsection