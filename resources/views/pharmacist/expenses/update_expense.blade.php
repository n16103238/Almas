@extends('Dashboard.pharmacist_dashboard')

@section('content')
<!-- page start-->

            <div class="container">
                        <div class="col-md-6">

                          <div class="card">
                            <div class="card-header text-center">
                              <h2>
                                  <i class="fa fa-plus-circle"></i>
                                  Update Expense
                              </h2>
                            </div>
                            <div class="card-body">
                              <form  action="{{ route('update.expense',$exp->id) }}" method="POST">
                                  @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{$exp->name}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Amount(tk)</label>
                                        <input type="number"  min='1'  class="form-control" name="amount"
                                        value="{{$exp->amount}}">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-info"> Update</button>
                                  </form>
                            </div>
                          </div>
                        </div>
            </div>
        <!-- page end-->
@endsection
