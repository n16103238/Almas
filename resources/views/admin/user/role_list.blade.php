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
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody class="text-center">

            @foreach($roles as $role)
              <tr>
                <td>{{$role->id}}</td>
                <td>{{$role->name}}</td>
                <td><a href="{{ route('update_role',$role->id)}}" class="btn btn-primary">Update</a></td>
                <td>
                  <!-- Delete -->
                  <!-- Button trigger modal -->
                      <button type="button" onclick="dd('{{$role->id}}')" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                      Delete
                      </button>
                </td>
              </tr>
@endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Role Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <form action="{{ route('delete.role')}}" method="post">
      @csrf
      <input type="hidden" name="id" id='delete_id'>
          <div class="modal-body text-center text-danger">
      Do You Want to Delete?
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-danger" type="submit">Delete</button>
    </div>
    </form>
  </div>
  </div>
  </div>
</div>
<script type="text/javascript">
function dd(id)
{
  document.getElementById("delete_id").value = id;
}
</script>
@endsection
