@extends('Dashboard.pharmacist_dashboard')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-auto">

      <div class="card">
        <div class="card-header text-center">
          <h4>Invoice</h4>
        </div>
        <div class="card-body">
          <center><h5><b>Sanaz Pharmacy</b></h5></center>
          <div class="form-group d-flex">
              <label>Order Number: {{$order ->id}}<label>
              <label class="ml-4 text-right"> Date: {{now()->toDateString()}}</label>
          </div>
          <div class="form-group d-flex">
              <label>Customer Name: {{$order ->customer_name}}</label>
              <label class="ml-3">Phone Number: {{$order ->phone}}</label>
              <label class="ml-3">Age: {{$order ->age}}</label>
          </div>
          <table class="table table-striped">
            <thead class="bg-dark text-light text-center">
              <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price(tk/unit)</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody class="text-center">

              @foreach($sales as $sale)
              <tr>
                <td>{{$sale->medicines->name}}</td>
                <td>{{$sale->quantity}}</td>
                <td>{{$sale->medicines->selling_price}}</td>
                <td>{{$sale->total}}</td>
              </tr>
              @endforeach
              <tr>
                <td></td>
                <td></td>
                <td><b>Sub Total:</b></td>
                <td><b>{{$order ->sub_total}}</b></td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>

    </div>

  </div>
@endsection
