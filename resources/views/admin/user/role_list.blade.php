@extends('Dashboard.admin_dashboard')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-auto">

      <div class="card">
        <div class="card-header text-center">
          <h3>Role list </h3>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <thead class="bg-dark text-light text-center">
              <tr>
                <th>Id</th>
                <th>Name</th>

              </tr>
            </thead>
            <tbody class="text-center">

              @foreach($roles as $role)
              <tr>
                <td>{{$role->id}}</td>
                <td>{{$role->name}}</td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>

      </div>

    </div>

  </div>
</div>
@endsection
