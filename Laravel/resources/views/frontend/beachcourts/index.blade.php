
@extends('layouts.frontend')

@section('content')
<div class="container">
<div class="row">
<div class="col-xs-12"> 
<h1>Beachfeld-Listing</h1>   
<meta name="token" id="token" value="{{ csrf_token() }}">
<hr>
 <div class="col-md-12 ">
            <div class="page-header">
                <h3>All Posts</h3>
            </div>
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

            {{ $beachcourts->links() }}
        </div>


</div>
</div>
</div>

@endsection

