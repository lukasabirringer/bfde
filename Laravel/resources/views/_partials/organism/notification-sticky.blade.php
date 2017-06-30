<div class="notification-sticky 
			
			@if( $notificationStickyError === true )
				notification-sticky--error
			@endif">
	<div class="content notification-sticky__content">
		<span class="notification-sticky__icon icon icon--{{ $notificationStickyIcon }}"></span>
		<span class="notification-sticky__text">{{ $notificationStickyMessage }}</span>

		@if ( $notificationStickyButton === true )
			<button type="button" class="button notification-sticky__button
										 @if( $notificationStickyError === true )
										 	notification-sticky__button--error
										 @endif">
				<span class="button__label ">{{ $notificationStickyButtonLabel }}</span>
			</button>
		@else
			<span class="notification-sticky__icon notification-sticky__icon--close icon icon--close"></span>
		@endif
	</div>
</div>