@extends('Dashboard.admin_dashboard')

@section('content')
<!-- page start-->
<div class="container">
            <div class="col-md-6">

              <div class="card">
                <div class="card-header text-center">
                  <h2>
                      <i class="fa fa-plus-circle"></i>
                      Add New Staff
                  </h2>
                </div>
                <div class="card-body">
                                  <form  action="{{ route('create_staff') }}" method="POST">
                                      @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="text" class="form-control" name="name" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Phone Number</label>
                                            <input type="number" class="form-control" placeholder="01......" maxlength="11"
                                             name="phone" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Position</label>
                                            <input type="text" class="form-control" name="position" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Salary</label>
                                            <input type="text" class="form-control" name="salary" >
                                        </div>
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="form-control" name="gender" required>
                                              <option value="">--Select--</option>
                                              <option value="Male">Male</option>
                                              <option value="Female">Female</option>
                                              <option value="Other">Other</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" name="address">
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
