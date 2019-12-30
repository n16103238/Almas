@extends('Dashboard.admin_dashboard')

@section('content')
<!-- page start-->
<div class="container">
            <div class="col-auto">

              <div class="card">
                <div class="card-header text-center">
                  <h2>
                      <i class="fa fa-plus-circle"></i>
                      Sales Report Details
                  </h2>
                </div>
                <div class="card-body">
                                  <form class="form-inline justify-content-center"  action="{{ route('create_reports_details') }}"
                                   method="POST">
                                      @csrf
                                        <div class="form-group">
                                        <label >From:</label>
                                        <input type="date" class="form-control ml-2"  name="from">
                                      </div>
                                      <div class="form-group">
                                        <label class="ml-4">To:</label>
                                        <input type="date" class="form-control ml-2"  name="to">
                                      </div>
                                        <button type="submit" name="submit" class="btn btn-info ml-4"> Submit</button>
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
                            <th>Medicine Name</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Date</th>
                          </tr>
                        </thead>
                        <tbody class="text-center">
                          <?php $q_total = 0; $total = 0; ?>
                          @foreach($reports as $report)
                          <tr>
                            <td>{{$report->id}}</td>
                            <td>{{$report->medicines->name}}</td>
                            <td>{{$report->quantity}}</td>
                            <?php $q_total = $q_total + ($report->quantity); $total = $total + ($report->total);?>
                            <td>{{$report->total}}</td>
                            <td>{{$report->updated_at->toDateString()}}</td>
                            </tr>
                          @endforeach
                          <tr>
                            <td><b>Total:</b></td>
                            <td></td>
                            <td>{{$q_total}}</td>
                            <td>{{$total}}</td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    @endif
                </div>
        <!-- page end-->
@endsection
