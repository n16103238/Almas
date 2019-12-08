@extends('Dashboard.admin_dashboard')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-auto">

      <div class="card">
        <div class="card-header text-center">
          <h3>User list </h3>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <thead class="bg-dark text-light text-center">
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody class="text-center">

              @foreach($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{implode(',',$user->roles()->get()->pluck('name')->toArray())}}</td>
                <td><a href="{{ route('user_update', $user->id)}}" class="btn btn-primary">Assign Role</a></td>

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
