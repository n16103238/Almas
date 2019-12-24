@extends('Dashboard.admin_dashboard')

@section('content')
<!-- page start-->
<div class="container">
            <div class="col-md-6">

              <div class="card">
                <div class="card-header text-center">
                  <h2>
                      <i class="fa fa-plus-circle"></i>
                      Add Medicine
                  </h2>
                </div>
                <div class="card-body">
                                  <form  action="{{ route('create_category') }}" method="POST">
                                      @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="text" class="form-control" name="name" >
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description">
                                            </textarea>
                                        </div>

                                        <button type="submit" name="submit" class="btn btn-info"> Submit</button>
                                      </form>
                                </div>
                        </div>
                    </div>
                </div>

        <!-- page end-->
@endsection
