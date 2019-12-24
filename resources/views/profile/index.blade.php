@if((Auth::user()->roles()->get()->pluck('name')) == '["Admin"]')
  <?php $panel = 'dashboard.admin_dashboard' ?>
@endif
@if((Auth::user()->roles()->get()->pluck('name')) == '["Pharmacist"]')
  <?php $panel = 'dashboard.pharmacist_dashboard' ?>
@endif

@extends($panel)
@section('content')
<!-- page start-->
@if(!$profile->isEmpty())
<div class="container">
            <div class="col-md-6">

              <div class="card">
                <div class="card-header text-center">
                  <h2>
                      <i class="fa fa-plus-circle"></i>
                      Profile Information
                  </h2>
                </div>
                <div class="card-body">
                  <form  action="{{ route('update_information') }}" method="POST">
                      @csrf
                      @foreach($profile as $profile)

                        <div class="form-group">
                            <label>Phone Number</label>
                          <input id="phoneInput" value="{{$profile->Phone_number}}" name="Phone_number"
                          class="form-control"
                          placeholder="01......" maxlength="11">
                      </div>

                      <div class="form-group">
                          <label>Present Address</label>
                          <input type="text" min=0 value="{{$profile->present_address}}" class="form-control" name="present_address">
                      </div>
                      <div class="form-group">
                          <label>Parmanent Address</label>
                          <input type="text" value="{{$profile->parmanent_address}}" class="form-control" name="parmanent_address">
                      </div>
                      <div class="form-group">
                          <label>Education</label>
                          <input type="text" value="{{$profile->education}}" class="form-control" name="education">
                      </div>

                      <div class="form-group">
                          <label>Gender</label>
                          <select class="form-control form-control-sm" value="{{$profile->gender}}" name="gender" required>
                            <option value="{{$profile->gender}}"selected>{{$profile->gender}}</option>
                            <option value="Male" >Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                          </select>
                      </div>

                      <div class="form-group">
                          <label>Blood Group</label>
                          <select class="form-control form-control-sm" value="{{$profile->blood_group}}" name="blood_group" required>
                            <option value="{{$profile->blood_group}}" selected>{{$profile->blood_group}}</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>

                          </select>
                          @endforeach
                      </div>
                        <button type="submit" name="submit" class="btn btn-info"> Submit</button>
                      </form>
                </div>
              </div>
            </div>
</div>
@else
<div class="container">
            <div class="col-md-6">

              <div class="card">
                <div class="card-header text-center">
                  <h2>
                      <i class="fa fa-plus-circle"></i>
                      Profile Information
                  </h2>
                </div>
                <div class="card-body">
                  <form  action="{{ route('add_information') }}" method="POST">
                      @csrf

                        <div class="form-group">
                            <label>Phone Number</label>
                          <input id="phoneInput" value="" name="Phone_number"
                          class="form-control"
                          placeholder="Format: 01......" maxlength="11">
                      </div>

                      <div class="form-group">
                          <label>Present Address</label>
                          <input type="text" min=0  class="form-control" name="present_address">
                      </div>
                      <div class="form-group">
                          <label>Parmanent Address</label>
                          <input type="text" class="form-control" name="parmanent_address">
                      </div>
                      <div class="form-group">
                          <label>Education</label>
                          <input type="text" class="form-control" name="education">
                      </div>
                      <div class="form-group">
                          <label>Gender</label>
                          <select class="form-control form-control-sm" name="gender" required>
                            <option value="">--Select--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Blood Group</label>
                          <select class="form-control form-control-sm" name="blood_group" required>
                            <option value="">--Select--</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>

                          </select>
                      </div>
                        <button type="submit" name="submit" class="btn btn-info"> Submit</button>
                      </form>
                </div>
              </div>
            </div>
</div>
@endif

        <!-- page end-->
@endsection
