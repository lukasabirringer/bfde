@extends('layouts.admin')

@section('content')

<div class="container">
        <div class="row">
                <div class="col-xs-12"> 

        <h2>Neuen User erstellen</h2>

   
<form class="form-horizontal" action="{{ URL::route('adminUser.store') }}" method="POST">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <label for="userName" class="col-sm-2 control-label">User-Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="userName" placeholder="Hier tippen ;)">
                </div>
              </div>

              <div class="form-group">
                <label for="userEmail" class="col-sm-2 control-label">E-Mail-Adresse</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="userEmail" placeholder="Hier tippen ;)">
                </div>
              </div>

              <div class="form-group">
                <label for="userRole" class="col-sm-2 control-label">Rolle</label>
                <div class="col-sm-10">
                    <select class="form-control" name="userRole" class="selectpicker">
                          
                         
                            <option value="registrated">registrated</option>
                            <option value="betreiber">betreiber</option>
                            <option value="admin">admin</option>
                    
                        </select>
                    
                </div>
              </div>

            <div class="form-group">
                <label for="userPass" class="col-sm-2 control-label">Passwort</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" name="userPass" placeholder="Hier tippen ;)">
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