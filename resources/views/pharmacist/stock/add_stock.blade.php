@extends('dashboard.pharmacist_dashboard')

@section('content')
<!-- page start-->
<div class="container">
            <div class="col-md-6">

              <div class="card">
                <div class="card-header text-center">
                  <h2>
                      <i class="fa fa-plus-circle"></i>
                      Add Stock
                  </h2>
                </div>
                <div class="card-body">
                                  <form  action="{{ route('create_stock') }}" method="POST">
                                      @csrf
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Name</label>
                                            <select class="form-control" width="50%" name="id" id="sel1">
                                          @foreach($medicines as $medicine)
                                          <option value="{{$medicine -> id}}">{{$medicine -> name}}</option>
                                          @endforeach
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input type="number" min=0  class="form-control" name="quantity">
                                        </div>

                                        <button type="submit" name="submit" class="btn btn-info"> Submit</button>
                                      </form>
                                </div>

                        </div>
                    </div>
                </div>

        <!-- page end-->
@endsection
