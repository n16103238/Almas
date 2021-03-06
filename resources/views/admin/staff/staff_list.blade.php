@extends('Dashboard.admin_dashboard')

@section('content')

<div class="container">
  <a href="{{ route('add_staff')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i>Add New Staff</a>
  <br><br>
  <div class="row">
    <div class="col-auto">

      <div class="card">
        <div class="card-header text-center">
          <h3>Staff Lists</h3>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <thead class="bg-dark text-light text-center">
              <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Position</th>
                <th>Salary</th>
                <th>Gender</th>
                <th>Address</th>
                <th></th>
                <th></th>

              </tr>
            </thead>
            <tbody class="text-center">

              @foreach($staffs as $staffs)
              <tr>
                <td>{{$staffs->name}}</td>
                <td>{{$staffs->phone}}</td>
                <td>{{$staffs->position}}</td>
                <td>{{$staffs->salary}}</td>
                <td>{{$staffs->gender}}</td>
                <td class="text-justify">{{$staffs->address}}</td>
                <td><a href="{{ route('update_staff', $staffs->id)}}" class="btn btn-primary">Update</a></td>
                <td>
                  <!-- Delete -->
                  <!-- Button trigger modal -->
                      <button type="button" onclick="dd('{{$staffs->id}}')" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
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
        <h5 class="modal-title" id="exampleModalLabel">Staff Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <form action="{{ route('delete.staff')}}" method="post">
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
