<div class="teaser-link ">
	<span class="teaser-link__icon icon icon--{{ $teaserLinkIcon }}"></span>
	<p class="teaser-link__title">{{ $teaserLinkTitle }}</p>
	@if ($teaserLinkLinkTarget !== '')
		<p class="teaser-link__link">
			<a href="{{ $teaserLinkLinkTarget }}"> {{ $teaserLinkName }} </a>
		</p>
	@endif
	@if ($teaserLinkButton == true)
		@include('_partials.molecules.button', ['buttonJavaScript'=>'load_modal_login()', 'buttonType'=>'button', 'buttonLinkTarget'=>'', 'buttonIcon'=>'user-circle', 'buttonLabel'=>'Anmelden', 'buttonCustomClass'=>'-spacing-static-c', 'buttonBackgroundcolor'=>' '])
	@endif
</div>