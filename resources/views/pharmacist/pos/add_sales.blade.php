@extends('Dashboard.pharmacist_dashboard')

@section('content')
<!-- page start-->
<div class="container">
            <div class="col-md-6">

              <div class="card">
                <div class="card-header text-center">
                  <h2>
                      <i class="fa fa-plus-circle"></i>
                      Add Sales
                  </h2>
                </div>
                <div class="card-body">
                                  <form  action="{{ route('add_sales') }}" method="POST">
                                      @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Customer Name</label>
                                            <input type="text" class="form-control" name="customer_name" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Phone Number</label>
                                            <input type="number" maxlength="11" class="form-control" name="phone" placeholder="01.........">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Age</label>
                                            <input type="number" min="15" class="form-control" name="age" >
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-info"> Submit</button>
                                      </form>
                                </div>
                        </div>
                    </div>
                </div>

        <!-- page end-->
@endsection
