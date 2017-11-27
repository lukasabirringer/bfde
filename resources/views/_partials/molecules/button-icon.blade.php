<button type="{{ $buttonIconType }}"
		class="button-icon
		@if ( $buttonIconBackgroundcolor !== '' )
			button-icon--{{ $buttonIconBackgroundcolor }}
		@endif

		@if( $buttonIconCustomClass !== ' ' )
			{{ $buttonIconCustomClass }}
		@endif" >

        <span class="button-icon__icon icon icon--{{ $buttonIconIcon }}"></span>
</button>