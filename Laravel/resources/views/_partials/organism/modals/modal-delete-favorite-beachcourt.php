  
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
               				Möchtest du wirklich dieses Beachvolleyball-Feld aus deinen Favoriten löschen?
               			</p>
               		</div>
          		</div>
   
			</div> 
  
			<div class="modal-common__footer">
				<div class="row row-buttons ">
					<div class="column column--12 column--s-6">
						@include('_partials.molecules.button', ['buttonJavaScript'=>' ', 'buttonType'=>'button', 'buttonCustomClass'=>'', 'buttonBackgroundcolor'=>'red', 'buttonLinkTarget'=>'', 'buttonIcon'=>'close', 'buttonLabel'=>'Löschen'])
					</div>
					<div class="column column--12 column--s-6">
						@include('_partials.molecules.button', ['buttonJavaScript'=>' ', 'buttonType'=>'submit', 'buttonCustomClass'=>'', 'buttonBackgroundcolor'=>'', 'buttonLinkTarget'=>'', 'buttonIcon'=>'delete', 'buttonLabel'=>'Löschen'])
					</div>
				</div>
            	</form>
			</div>
		</div>
	</div>
</div>