<div class="notification-sticky">
	<div class="content notification-sticky__content">
		<span class="notification-sticky__icon icon icon--success"></span>
		<span class="notification-sticky__text">{{ Session::get('alert-' . $msg) }}</span>
	</div>
	<span class="notification-sticky__icon notification-sticky__icon--close icon icon--close"></span>
</div>