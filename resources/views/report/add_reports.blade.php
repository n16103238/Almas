@extends('Dashboard.admin_dashboard')

@section('content')
<!-- page start-->
<div class="container">
            <div class="col-md-6">

              <div class="card">
                <div class="card-header text-center">
                  <h2>
                      <i class="fa fa-plus-circle"></i>
                      Add Report
                  </h2>
                </div>
                <div class="card-body">
                                  <form  action="{{ route('create_reports') }}" method="POST">
                                      @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">From</label>
                                            <input type="date" class="form-control" name="from" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">To</label>
                                            <input type="date" class="form-control" name="to" >
                                        </div>

                                        <button type="submit" name="submit" class="btn btn-info"> Submit</button>
                                      </form>
                                </div>
                        </div>
                    </div>

                    @if(isset($reports))
                    <div class="card-body">
                      <table class="table table-striped">
                        <thead class="bg-dark text-light text-center">
                          <tr>
                            <th>Order ID</th>
                            <th>Customer Name</th>
                            <th>Phone Number</th>
                            <th>Sub Total</th>
                            <th>Date</th>
                          </tr>
                        </thead>
                        <tbody class="text-center">

                          @foreach($reports as $report)
                          <tr>
                            <td>{{$report->id}}</td>
                            <td>{{$report->customer_name}}</td>
                            <td>{{$report->phone}}</td>
                            <td>{{$report->sub_total}}</td>
                            <td>{{$report->updated_at->toDateString()}}</td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    @endif
                </div>



        <!-- page end-->
@endsection
