
		<footer>
		<div class="container">
				<div class="row">
						<div class="col-xs-12"> 
						<h2>Footer (Navi)</h2>
							<h4>Links</h4>
							@foreach ($footernavigations as $footernavigation)
							 @if ($footernavigation->position == 'left')
							<p>Name: <a href="{{ url('pages/'.$footernavigation->page_name) }}">{{ $footernavigation->page_name }}</a></p>
							<hr>
							@endif
							@endforeach

							<h4>MIttig</h4>
							@foreach ($footernavigations as $footernavigation)
							 @if ($footernavigation->position == 'middle')
							<p>Name: <a href="{{ url('pages/'.$footernavigation->page_name) }}">{{ $footernavigation->page_name }}</a></p>
							<hr>
							@endif
							@endforeach

							<h4>Rechts</h4>
							@foreach ($footernavigations as $footernavigation)
							 @if ($footernavigation->position == 'right')
							<p>Name: <a href="{{ url('pages/'.$footernavigation->page_name) }}">{{ $footernavigation->page_name }}</a></p>
							<hr>
							@endif
							@endforeach
					</div>
				</div>
		</div>
		</footer>