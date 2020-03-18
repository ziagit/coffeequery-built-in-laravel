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
  <div class="modal fade" id="addContact">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add new contact</h4>
        </div>
        <div class="modal-body">
          <div class="container">
              <div class="row">
                  <div class="col-md-12 col-md-offset-2">
                      <div class="panel panel-default">
                          <div class="panel-body">
                              <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{url('/create/contact')}}">
                                  {{ csrf_field() }}

                                  <div class="form-group{{ $errors->has('Name') ? ' has-error' : '' }}">
                                      <label for="name" class="col-md-12 control-label">Name</label>
                                      <div class="col-md-12">
                                          <input id="name" type="text" class="form-control" name="name" required autofocused>
                                      </div>
                                  </div>
                                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                      <label for="email" class="col-md-12 control-label">email</label>
                                      <div class="col-md-12">
                                          <input id="email" type="email" class="form-control" name="email" required autofocused>
                                      </div>
                                  </div>

                                  <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                                  <label for="message" class="col-md-12 control-label">Message</label>
                                  <div class="col-md-12">
                                          <textarea rows="5" id="message" class="form-control" name="message" required></textarea>
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
<div class="modal fade" id="editContactModal">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Update team</h4>
        </div>
        <div class="modal-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <form class="form-horizontal" method="POST" action="{{url('/update/contact')}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" id="id" name="id">
                                    <div class="form-group{{ $errors->has('Name') ? ' has-error' : '' }}">
                                      <label for="name" class="col-md-12 control-label">Name</label>
                                      <div class="col-md-12">
                                          <input id="name" type="text" class="form-control" name="name" required autofocused>
                                      </div>
                                  </div>
                                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                      <label for="email" class="col-md-12 control-label">email</label>
                                      <div class="col-md-12">
                                          <input id="email" type="email" class="form-control" name="email" required autofocused>
                                      </div>
                                  </div>

                                  <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                                  <label for="message" class="col-md-12 control-label">Message</label>
                                  <div class="col-md-12">
                                          <textarea rows="5" id="message" class="form-control" name="message" required></textarea>
                                      </div>
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
                <div class="card-header card-header-primary" style="display:flex;justify-content:space-between">
                    <div>
                        <h4 class="card-title ">Contacts</h4>
                     </div>
                    <div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addContact">
                        <i class="icon-plus">+</i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Actions</th>
                      </thead>
                      <tbody>
                      @foreach($contacts as $contact)
                        <tr>
                          <td>{{$contact->id}}</td>                        
                          <td>{{$contact->name}}</td>
                          <td>{{$contact->email}}</td>
                          <td>{{$contact->message}}</td>
                          <td>
                            <button type="button" class="btn btn-sm btn-success" 
                            data-toggle="modal" 
                            data-target="#editContactModal"
                            data-id="{{$contact->id}}"
                            data-name="{{$contact->name}}"
                            data-email="{{$contact->email}}"
                            data-message="{{$contact->message}}">
                            <i class="nc-icon nc-check-2"></i>
                            </button>

                            <form action="/delete/contact/{{$contact->id}}" id="deleteitem" method="get">
                                 <button class="btn btn-sm btn-danger" type="submit"><i class="nc-icon nc-simple-delete"></i></button>
                            </form>
                        </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {!! $contacts->links() !!}
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
   @endsection
