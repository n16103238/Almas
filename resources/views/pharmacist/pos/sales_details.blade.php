@extends('Dashboard.pharmacist_dashboard')

@section('content')
<!-- page start-->
<div class="container">
            <div class="col-md-6">

              <div class="card">
                <div class="card-header text-center">
                  <h2>
                      <i class="fa fa-plus-circle"></i>
                      Add Sales Details
                  </h2>
                </div>
                <div class="card-body">
                                  <form  action="{{ route('add_sales_details') }}" method="POST">
                                      @csrf
                                      <input type="hidden" name="sale_id" value="{{session('id')}}">
                                      <div class="form-group d-flex">
                                          <label>Order Number: {{session('id')}}<label>
                                      </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Medicine Id</label>
                                            <select class="form-control" width="50%" name="medicine_id" id="sel1">
                                          @foreach($medicines as $medicine)
                                          <option value="{{$medicine -> id}}">{{$medicine -> name}}</option>
                                          @endforeach
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Quantity</label>
                                            <input type="number" min="1" class="form-control" name="quantity" >
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-info d-flex"> Submit</button>

                                      </form>
                                      <br><br>
                                        <center><a href="{{ route('confirm', session('id'))}}" class="btn btn-primary">Confirm</a></center>

                                </div>
                        </div>
                    </div>
                </div>

        <!-- page end-->
@endsection
