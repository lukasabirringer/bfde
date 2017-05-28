@extends('layouts.admin')

@section('content')

<div class="container">
		<div class="row">
				<div class="col-xs-12"> 

				
<form class="form-horizontal" action="{{ url('admin/footernavigations/') }}" method="POST">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
			  
			  <div class="form-group">
            <label for="pageName" class="col-sm-2 control-label">Seiten-Name (Verlinkung)</label>
            <div class="col-sm-10">
                <select class="form-control" name="pageName" class="selectpicker">
                      
                     @foreach ($pages as $page)
                        <option value="{{$page->slug}}">{{$page->slug}}</option>
                         @endforeach
                
                    </select>
                    
            </div>
          </div>

			  

 				<div class="form-group">
            <label for="menuPosition" class="col-sm-2 control-label">Positon</label>
            <div class="col-sm-10">
                <select class="form-control" name="menuPosition" class="selectpicker">
                      
                     		<option value="left">links</option>
                        <option value="middle">mittig</option>
                       	<option value="right">rechts</option>
                
                    </select>
                
            </div>
          </div>


			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-primary">Erstellen</button>
			    </div>
			  </div>

			</form>



				</div>
		</div>
</div>

@endsection