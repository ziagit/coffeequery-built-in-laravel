@extends('layouts.new-layout')

@section('content')
@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
@endif
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
   <!-- add modal  -->
  <div class="modal fade" id="addTechinfoModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add new tech</h4>
        </div>
        <div class="modal-body">
          <div class="container">
              <div class="row">
                  <div class="col-md-12 col-md-offset-2">
                      <div class="panel panel-default">
                          <div class="panel-body">
                              <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{url('/create/techinfo')}}">
                                  {{ csrf_field() }}

                                  <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                                      <label for="date" class="col-md-12 control-label">Date</label>
                                      <div class="col-md-12">
                                          <input id="date" type="date" class="form-control" name="date" required autofocused>
                                      </div>
                                  </div>
                                  <div class="form-group{{ $errors->has('users') ? ' has-error' : '' }}">
                                      <label for="users" class="col-md-12 control-label">users</label>
                                      <div class="col-md-12">
                                          <input id="users" type="text" class="form-control" name="users" required autofocused>
                                      </div>
                                  </div>
                                  <div class="form-group{{ $errors->has('techs') ? ' has-error' : '' }}">
                                      <label for="techs" class="col-md-12 control-label">Techs</label>
                                      <div class="col-md-12">
                                          <select id="techs" type="text" class="form-control" name="techs" required autofocused>
                                            @foreach($techs as $tech)
                                                <option>{{$tech->name}}</option>
                                            @endforeach
                                        </select>
                                      </div>
                                  </div>

                                  <div class="form-group" style="display:flex;justify-content:space-between;">
                                      <div class="col-md-8 col-md-offset-10">
                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                      </div>
                                      <div class="col-md-4 col-md-offset-2">
                                          <button type="submit" class="btn btn-success">Save</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 <!-- edit modal  -->
<div class="modal fade" id="editTechinfoModal">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Update client</h4>
        </div>
        <div class="modal-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <form class="form-horizontal" method="POST" action="{{url('/update/techinfo')}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" id="id" name="id">
                                    <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                                      <label for="date" class="col-md-12 control-label">Date</label>
                                      <div class="col-md-12">
                                          <input id="date" type="date" class="form-control" name="date" required autofocused>
                                      </div>
                                  </div>
                                  <div class="form-group{{ $errors->has('users') ? ' has-error' : '' }}">
                                      <label for="users" class="col-md-12 control-label">users</label>
                                      <div class="col-md-12">
                                          <input id="users" type="text" class="form-control" name="users" required autofocused>
                                      </div>
                                  </div>
                                  <div class="form-group{{ $errors->has('techs') ? ' has-error' : '' }}">
                                      <label for="techs" class="col-md-12 control-label">Techs</label>
                                      <div class="col-md-12">
                                          <select id="techs" type="text" class="form-control" name="techs" required autofocused>
                                            @foreach($techs as $tech)
                                                <option>{{$tech->name}}</option>
                                            @endforeach
                                        </select>
                                      </div>
                                  </div>
                                    <div class="form-group" style="display:flex;justify-content:space-between;">
                                        <div class="col-md-6 col-md-offset-10">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                        </div>
                                        <div class="col-md-6 col-md-offset-2">
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>


<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary" style="display:flex;justify-content:space-between">
                    <div>
                        <h4 class="card-title ">Technologies data</h4>
                     </div>
                    <div>
                      <button 
                      type="button" 
                      class="btn btn-primary" 
                      data-toggle="modal" 
                      data-target="#addTechinfoModal"
                      data-techs="$techs">
                      <i class="icon-plus">+</i>
                      </button>  
                    </div> 
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>ID</th>
                        <th>Date</th>
                        <th>Users</th>
                        <th>Actions</th>
                      </thead>
                      <tbody>
                      @foreach($techinfos as $techinfo)
                        <tr>
                          <td>{{$techinfo->id}}</td>                        
            
                          <td>{{$techinfo->date}}</td>
                          <td>{{$techinfo->users}}</td>
                          <td>
                            <button type="button" class="btn btn-sm btn-success" 
                            data-toggle="modal" 
                            data-target="#editTechinfoModal"
                            data-id="{{$techinfo->id}}"
                            data-date="{{$techinfo->date}}"
                            data-users="{{$techinfo->users}}"
                            data-tech="{{$techinfo->techs}}">
                            <i class="nc-icon nc-check-2"></i>
                            </button>
                          
                            <form action="/delete/techinfo/{{$techinfo->id}}" id="deleteitem" method="get">
                                 <button class="btn btn-sm btn-danger" type="submit"><i class="nc-icon nc-simple-delete"></i></button>
                            </form>                           
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {!! $techinfos->links() !!}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

   @endsection