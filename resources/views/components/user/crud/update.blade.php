<div class="row">
    <div class="col-sm-12">
        <div class="card comman-shadow">
            <div class="card-body">
                <form action="{{route('AdminUser.update',$user->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12">
                            <h5 class="form-title student-info">User Information <a href="/admin/dashboard/user-list">Back</a>
                            </h5>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Full Name <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="name" id="name" value="{{$user->name}}" placeholder="Enter Full Name">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>NIC Number <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="nic" id="nic" value="{{$user->nic}}" placeholder="Enter NIC Number">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Gender <span class="login-danger">*</span></label>
                                <select class="form-control select" name="gender" id="gender" value="{{$user->gender}}">
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
                                <input class="form-control datetimepicker" type="text" name="date_of_birth" id="date_of_birth" value="{{$user->date_of_birth}}" placeholder="DD-MM-YYYY">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>E-Mail <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="email" id="email" value="{{$user->email}}" placeholder="Enter Email Address">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Phone Number</label>
                                <input class="form-control" type="text" name="phone_number" id="phone_number" value="{{$user->phone_number}}" placeholder="Enter Phone Number">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password" id="password" value="{{$user->password}}" placeholder="Enter password">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Confirm Password</label>
                                <input class="form-control" type="password" name="password_confirmation" id="confirm_password" value="{{$user->password_confirmation}}" placeholder="Enter confirm password">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Role<span class="login-danger">*</span></label>
                                <input list="role" name="role" class="form-control" placeholder="Select role" value="{{ $user-> role}}" disabled>
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
                                <input class="form-control" type="text" name="location" id="location" value="{{$user->location}}" placeholder="Enter Location">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="student-submit">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>