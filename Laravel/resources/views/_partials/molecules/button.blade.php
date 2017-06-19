<button type="{{ $buttonType }}"
		class="button 
		@if( $buttonCustomClass !== ' ' )
			{{ $buttonCustomClass }}
		@endif

		@if ( $buttonBackgroundcolor !== '' )
			button--{{ $buttonBackgroundcolor }}
		@endif" 
		
		@if ( $buttonLinkTarget !== ' ' )
			onclick="window.location.href='{{ url('') }}/{{ $buttonLinkTarget }}' 
		@endif 
	">
	<span class="button__icon icon icon--{{ $buttonIcon }}"></span>
	<span class="button__label button__label--icon">{{ $buttonLabel }}</span>
</button>