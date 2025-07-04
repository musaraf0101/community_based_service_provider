<div class="row">
    <div class="col-sm-12">
        <div class="card comman-shadow">
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="/admin/dashboard/user-store" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <h5 class="form-title student-info">User Information <a href="#">Back</a></h5>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Full Name <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="name" id="name" value="{{old('name')}}" placeholder="Enter Full Name">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>NIC Number <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="nic" id="nic" value="{{old('nic')}}" placeholder="Enter NIC Number">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Gender <span class="login-danger">*</span></label>
                                <select class="form-control select" name="gender" id="gender" value="{{old('gender')}}">
                                    <option>Select Gender</option>
                                    <option value="female">Female</option>
                                    <option value="male">Male</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms calendar-icon">
                                <label>Date Of Birth <span class="login-danger">*</span></label>
                                <input class="form-control datetimepicker" type="text" name="date_of_birth" id="date_of_birth" value="{{old('date_of_birth')}}" placeholder="DD-MM-YYYY">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>E-Mail <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="email" id="email" value="{{old('email')}}" placeholder="Enter Email Address">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Phone Number</label>
                                <input class="form-control" type="text" name="phone_number" id="phone_number" value="{{old('phone_number')}}" placeholder="Enter Phone Number">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password" id="password" value="{{old('password')}}" placeholder="Enter password">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Confirm Password</label>
                                <input class="form-control" type="password" name="password_confirmation" id="confirm_password" value="{{old('password_confirmation')}}" placeholder="Enter confirm password">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Role<span class="login-danger">*</span></label>
                                <input list="role" name="role" class="form-control" placeholder="Select role" value="{{ old('role') }}">
                                <datalist id="role">
                                    <option value="admin">
                                    <option value="user">
                                    <option value="service_provider">
                                </datalist>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Location </label>
                                <input class="form-control" type="text" name="location" id="location" value="{{old('location')}}" placeholder="Enter Location">
                            </div>
                        </div>
                        <!-- <div class="col-12 col-sm-4">
                            <div class="form-group students-up-files">
                                <label>Upload Photo (150px X 150px)</label>
                                <div class="uplod">
                                    <label class="file-upload image-upbtn mb-0">
                                        Choose File <input type="file" name="img" id="img" value="{{old('img')}}">
                                    </label>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-12">
                            <div class="student-submit">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>