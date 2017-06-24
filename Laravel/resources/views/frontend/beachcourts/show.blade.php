
@extends('layouts.frontend')

@section('content')
<div class="container">
<div class="row">
<div class="col-xs-12"> 
<h1>Das ist das Beachfeld {{ $beachcourt->courtName }} in {{ $beachcourt->city }}</h1>
<p>Rating:<span> <b>{{ str_limit($beachcourt->realRating, $limit = 3, $end = '') }}</b> ({{ $beachcourt->ratingCount }} Stimmen)</span>
@if (($beachcourt->ratingCount) < 10)
    Dieses Rating stammt von beachfelder.de
@else
    Dieses Rating stammt von den Usern
@endif
</p>
<hr>
<img src="https://www.zeltwiese-absberg.de/media/filer_public_thumbnails/filer_public/2d/96/2d96fb9c-3ef8-4458-932a-257d45009b24/beachvolleyball_tournir_aufschlag.jpg__1140x250_q85_crop_subsampling-2_upscale.jpg" style="width:100%; height:250px;">
<a href="{{ URL::previous() }}">Zurück zur Übersicht</a>
<hr>
<div class="upload-form-wrapper">

    <form action="{{ url('/rating/new') }}" method="POST" class="form-inline upload-file-form" enctype="multipart/form-data">
        {{ csrf_field() }}
        
        <input type="hidden" value="{{ $beachcourt->id }}" content="text" name="beachcourtname">
       
        <div class="form-group">
			    <label for="sandquali">Sandqualität</label>
			     <select class="form-control" name="sandquali">
			    <option value="">Bitte wählen</option>
				  <option value="1">1</option>
				  <option value="2">2</option>
				  <option value="3">3</option>
				  <option value="4">4</option>
				  <option value="5">5</option>
				</select>
			  </div><br>
			  <div class="form-group">
			    <label for="sicherheit">Sicherheit</label>
			     <select class="form-control" name="sicherheit">
				  <option value="">Bitte wählen</option>
				  <option value="1">1</option>
				  <option value="2">2</option>
				  <option value="3">3</option>
				  <option value="4">4</option>
				  <option value="5">5</option>
				</select>
			  </div><br>
			  <div class="form-group">
			    <label for="netzquali">Netzqualität</label>
			     <select class="form-control" name="netzquali">
				  <option value="">Bitte wählen</option>
				  <option value="1">1</option>
				  <option value="2">2</option>
				  <option value="3">3</option>
				  <option value="4">4</option>
				  <option value="5">5</option>
				</select>
			  </div><br>
			  <div class="form-group">
			    <label for="sonnenquali">Sonnenqualität</label>
			     <select class="form-control" name="sonnenquali">
				  <option value="">Bitte wählen</option>
				  <option value="1">1</option>
				  <option value="2">2</option>
				  <option value="3">3</option>
				  <option value="4">4</option>
				  <option value="5">5</option>
				</select>
			  </div><br>
			  <div class="form-group">
			    <label for="luftquali">Luftqualität</label>
			     <select class="form-control" name="luftquali">
				  <option value="">Bitte wählen</option>
				  <option value="1">1</option>
				  <option value="2">2</option>
				  <option value="3">3</option>
				  <option value="4">4</option>
				  <option value="5">5</option>
				</select>
			  </div><br>
        <div class="form-group">
                <button type="submit" class="btn btn-default">
                    Bewertung abgeben
                </button>
        </div>
    </form>
</div>
<table class="table table-striped">


												<tr>
													<td>ID</td>
													<td>Court-ID</td>
													<td>Sandqualität</td>
													<td>Sicherheit</td>
													<td>Netzqualität</td>
													<td>Sonnenqualität</td>
													<td>Luftqualität</td>
												</tr>@foreach ($ratings as $rating)
                        <tr>
                            <td class="table-text">{{ $rating->id }}</td>
                            <td class="table-text">{{ $rating->beachcourt_id }}</td>
                            <td class="table-text">{{ $rating->k1_sandqualitaet }}</td>
                            <td class="table-text">{{ $rating->k2_sicherheit }}</td>
                            <td class="table-text">{{ $rating->k3_netzqualitaet }}</td>
                            <td class="table-text">{{ $rating->k4_sonnenqualitaet }}</td>
                            <td class="table-text">{{ $rating->k5_luftqualitaet }}</td>

       
                        </tr>
                    @endforeach    
</table>
INFOBOX <br>
BFDE-INFOBOX <br>

<iframe  width="600" height="450" frameborder="0" zoom="8" style="border:0" allowfullscreen src="https://maps.google.de/maps?q={{ $beachcourt->latitude }},{{ $beachcourt->longitude }}&hl=es;z=14&amp;output=embed"></iframe>

</div>
</div>
</div>

@endsection