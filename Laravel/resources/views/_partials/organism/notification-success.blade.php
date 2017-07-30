<div class="notification-box   notification-box--success ">
		<div class="notification-box__icon icon icon--success"></div>
	<div class="notification-box__message">
		<h4 class="notification-box__headline">Oki Doki</h4>
		<p class="notification-box__subline">{{ Session::get('alert-' . $msg) }}</p>
	</div>
</div>