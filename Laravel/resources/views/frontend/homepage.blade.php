@extends('layouts.frontend')

@section('content')
<div class="container">
<div class="row">
<div class="col-xs-12"> 
	<div class="panel-body">
          <a href="{{ url('beachcourts') }}"><button type="button" class="btn btn-primary">Beachcourt Übersicht</button></a>
          <a href="{{ url('pages') }}"><button type="button" class="btn btn-primary">Pages Übersicht</button></a>
	</div>
	<h2>UNSERE NEUESTEN BEACHVOLLEYBALL-FELDER</h2>
	@forelse ($beachcourts as $beachcourt)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Name: {{ $beachcourt->courtName }}
                    </div>

                    <div class="panel-body">

                        Ort: {{ $beachcourt->city }} // ID: {{ $beachcourt->id }}
                    </div>
                    @if (Auth::check())
										    <div class="panel-footer">
										        <favorite
										            :beachcourt={{ $beachcourt->id }}
										            :favorited={{ $beachcourt->favorited() ? 'true' : 'false' }}
										        ></favorite>
										    </div>
										@endif
                </div>
            @empty
                <p>No Courts created.</p>
            @endforelse

</div>
</div>
</div>

@endsection

