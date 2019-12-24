@extends('Dashboard.admin_dashboard')

@section('content')
<!-- page start-->
        <section class="panel">
            <h1>
            <header class="panel-heading">
                <i class="fa fa-plus-circle"></i>
                Update Staff Information
              </header></h2>
            <div class="">
                <div class="adv-table editable-table ">
                    <div class="clearfix">
                        <div class="col-md-6">
                            <section class="panel">
                                <div class="panel-body">
                                  <form  action="{{ route('update.staff',$sta->id) }}" method="POST">
                                      @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="text" class="form-control" name="name" value="{{$sta->name}}" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Phone Number</label>
                                            <input type="text" class="form-control" placeholder="01......" maxlength="11"
                                             name="phone" value="{{$sta->phone}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Position</label>
                                            <input type="text" class="form-control" name="position" value="{{$sta->position}}" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Salary</label>
                                            <input type="text" class="form-control" name="salary" value="{{$sta->salary}}" >
                                        </div>
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="form-control form-control-sm" value="{{$sta->gender}}" name="gender" required>
                                              <option value="{{$sta->gender}}"selected>{{$sta->gender}}</option>
                                              @if($sta->gender == "Male")
                                              <option value="Female">Female</option>
                                              <option value="Other">Other</option>
                                              @endif
                                              @if($sta->gender == "Female")
                                                <option value="Male" >Male</option>
                                                <option value="Other">Other</option>
                                              @endif
                                              @if($sta->gender == "Other")
                                              <option value="Male" >Male</option>
                                              <option value="Female">Female</option>
                                              @endif



                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" name="address"> {{$sta->address}}</textarea>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-info"> Update</button>
                                      </form>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page end-->
@endsection
