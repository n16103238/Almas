@extends('Dashboard.admin_dashboard')

@section('content')
<!-- page start-->

            <div class="container">
                        <div class="col-md-6">

                          <div class="card">
                            <div class="card-header text-center">
                              <h2>
                                  <i class="fa fa-plus-circle"></i>
                                  Update Role
                              </h2>
                            </div>
                            <div class="card-body">
                              <form  action="{{ route('update.role',$role->id) }}" method="POST">
                                  @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{$role->name}}" >
                                    </div>
                                  <button type="submit" name="submit" class="btn btn-info"> Update</button>
                                  </form>
                            </div>
                          </div>
                        </div>
            </div>
        <!-- page end-->
@endsection
