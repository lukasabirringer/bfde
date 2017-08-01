  
<div class="modal-common ">
	<div class="modal-common__dialog">
		<div class="modal-common__content">
			<div class="modal-common__close icon icon--close"></div>
			<div class="modal-common__header">
				Löschen bestätigen
			</div>

			<div class="modal-common__body">
				<form action="{{ url('unfavorite/'.$myFavorite->id) }}" class="list-beachcourt__form" method="POST">
                	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

                <div class="row -spacing-static-f">
               		<div class="column column--12">
               			<p class="-typo-copy--large -font-primary -text-color-blue-2">
               				Möchtest du wirklich dieses Beachvolleyballfeld aus deinen Favoriten entfernen? Diese Aktion ist kann nicht rückgängig gemacht werden.
               			</p>
               		</div>
          		</div>
  
			</div> 
  
			<div class="modal-common__footer">
				<div class="row row-buttons ">
					<div class="column column--12 column--s-6">
						<button type="button" class="button button--red button--abort">
							<span class="button__icon icon icon--close"></span>
							<span class="button__label button__label--icon">Nein, doch nicht</span>
						</button>	
					</div>
					<div class="column column--12 column--s-6">
						<button type="submit" class="button" >
								<span class="button__icon icon icon--delete"></span>
							<span class="button__label button__label--icon">Ja, ich bin mir sicher</span>
						</button>
					</div>
				</div>
            	</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
	    $('.modal-common__close, .button--abort').click(function() {
            $('.overlay').remove();
            $('body').removeClass('no-scroll');
	        $(this).parents('.modal-common').remove();
	    });

	});
</script>