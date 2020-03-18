
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
<!-- add team modal -->
<div class="modal fade" id="addTeamModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add new member</h4>
        </div>
        <div class="modal-body">
          <div class="container">
              <div class="row">
                  <div class="col-md-12 col-md-offset-2">
                      <div class="panel panel-default">
                          <div class="panel-body">
                              <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{url('/create/team')}}">
                                  {{ csrf_field() }}
                                    <input type="hidden" name="companyId" id="companyId">
                                  <div class="form-group{{ $errors->has('Name') ? ' has-error' : '' }}">
                                      <label for="name" class="col-md-12 control-label">Name</label>
                                      <div class="col-md-12">
                                          <input id="name" type="text" class="form-control" name="name" required autofocused>
                                      </div>
                                  </div>
                                  <div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
                                      <label for="position" class="col-md-12 control-label">position</label>
                                      <div class="col-md-12">
                                          <input id="position" type="text" class="form-control" name="position" required autofocused>
                                      </div>
                                  </div>
                                  <div>
                                      <label for="image" class="col-md-4 control-label">Select image</label>
                                      <div class="col-md-12">
                                          <input id="image" type="file" class="form-control" name="image">
                                      </div>
                                    </div>

                                  <div class="form-group{{ $errors->has('details') ? ' has-error' : '' }}">
                                    <label for="details" class="col-md-12 control-label">Details</label>
                                      <div class="col-md-12">
                                          <textarea rows="5" id="details" class="form-control" name="details" required></textarea>
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


   <!-- add modal  -->
<div class="modal fade" id="addCompanyModal">
    <div class="modal-dialog" style="max-width:850px;">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add company</h4>
        </div>
        <div class="modal-body">
          <div class="container">
              <div class="row">
                  <div class="col-md-12 col-md-offset-2">
                      <div class="panel panel-default">
                          <div class="panel-body">
                              <form action="{{url('create/company')}}" method="POST" enctype="multipart/form-data">
                                  {{ csrf_field() }}
                                  @method('PUT')
                                  <div class="form-group">
                                      <label for="name">Name</label>
                                      <input class="form-control" id="name" name="name">
                                  </div>
                                  <div class="form-group">
                                      <label for="slogan">Slogan</label>
                                      <input class="form-control" id="slogan" name="slogan">
                                  </div>
                                      <input type="file" class="form-control" id="logo" name="logo">
                                      <input type="file" class="form-control" id="slide" name="slide">
                                  <div class="form-group">
                                      <label for="details">Details</label>
                                      <textarea class="form-control" id="details" name="details" rows="30"></textarea>
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
<div class="modal fade" id="editCompanyModal">
    <div class="modal-dialog" style="max-width:850px;">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Update post</h4>
        </div>
        <div class="modal-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                              <form action="{{url('update/company')}}" method="POST" enctype="multipart/form-data">
                                  {{ csrf_field() }}

                                  <input type="hidden" name="id" id="id">
                                  <div class="form-group">
                                      <label for="name">Name</label>
                                      <input class="form-control" id="name" name="name">
                                  </div>
                                  <div class="form-group">
                                      <label for="slogan">Slogan</label>
                                      <input class="form-control" id="slogan" name="slogan">
                                  </div>
                                  <div>
                                        <label for="logo" class="col-md-4 control-label">Select logo</label>
                                        <div class="col-md-12">
                                            <input type="file" class="form-control" id="logo" name="logo">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="slide" class="col-md-4 control-label">Select slide</label>
                                        <div class="col-md-12">
                                            <input type="file" class="form-control" id="slide" name="slide">
                                        </div>
                                    </div>
                                      <div class="form-group">
                                      <label for="details">Details</label>
                                      <textarea class="form-control" id="details" name="details" rows="30"></textarea>
                                  </div>
                                  <div class="form-group" style="display:flex;justify-content:space-between;">
                                      <div class="col-md-8 col-md-offset-10">
                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                      </div>
                                      <div class="col-md-4 col-md-offset-2">
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
                <div class=" col-md-12 card-header card-header-primary search-container">
                    <div class="blog-header">
                        <h4 class="card-title ">Companies</h4>
                     </div>
                     <div class="col-md-6 search-blog">
                        <form action="/blog/search" method="get">
                            <div class="form-group" style="display:flex;justify-content:space-between;">
                                <input type="search" name="search" class="form-control ">
                                <span class="form-group-btn">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <div class="blog-submit">
                       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCompanyModal">
                        <i class="icon-plus">+</i>
                        </button>
                    </div>   
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>ID</th>
                        <th>Logo</th>
                        <th>Slide</th>
                        <th>Name</th>
                        <th>Slogan</th>
                        <th>Details</th>
                        <th>Actions</th>
                      </thead>
                      <tbody>
                      @foreach($companies as $company)
                        <tr>
                          <td>{{$company->id}}</td>     
                          <td>
                            <img src="{{ URL::to('/') }}/images/coffeequery/{{$company->logo}}" class="image-thumbnail" width="75">
                          </td>                 
                          <td>
                            <img src="{{ URL::to('/') }}/images/coffeequery/{{$company->slide}}" class="image-thumbnail" width="75">
                          </td>                 
                          <td>{{$company->name}}</td>
                          <td>{{$company->slogan}}</td>
                          <td>{{$company->details}}</td>
                          <td>
                          <button type="button" class="btn btn-success" 
                          data-toggle="modal" 
                          data-target="#addTeamModal"
                          data-id="{{$company->id}}">
                        <i class="icon-plus">+</i>
                        </button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-sm btn-success" 
                            data-toggle="modal" 
                            data-target="#editCompanyModal"
                            data-id="{{$company->id}}"
                            data-name="{{$company->name}}"
                            data-slogan="{{$company->slogan}}"
                            data-details="{{$company->details}}">
                            <i class="nc-icon nc-check-2"></i>
                            </button>
                         
                            <form action="/delete/company/{{$company->id}}" id="deleteitem" method="GET">
                                 <button class="btn btn-sm btn-danger" type="submit"><i class="nc-icon nc-simple-delete"></i></button>
                            </form>                           
                         </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    
@endsection
