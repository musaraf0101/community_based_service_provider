<div class="row">
    <div class="col-sm-12">
        <div class="card comman-shadow">
            <div class="card-body">
                <form action="/user/dashboard/compliant-store" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <h5 class="form-title student-info">Compliant<span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Full Name <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="full_name" id="full_name" value="{{old('full_name')}}" placeholder="Enter Full Name">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms calendar-icon">
                                <label>Service Date <span class="login-danger">*</span></label>
                                <input class="form-control datetimepicker" type="text" name="service_date" id="service_date" value="{{old('service_date')}}" placeholder="DD-MM-YYYY">
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
                                <label>Phone Number <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="phone_number" id="phone_number" value="{{old('phone_number')}}" placeholder="Enter Phone Number">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Location <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="location" id="location" value="{{old('location')}}" placeholder="Enter Location">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Compliant <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="compliant" id="compliant" value="{{old('compliant')}}" placeholder="Enter Compliant">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Service Provider Name <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="service_provider_name" id="service_provider_name" value="{{old('service_provider_name')}}" placeholder="Enter Service Provider Name">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Profession<span class="login-danger">*</span></label>
                                <select class="form-control select" name="profession" id="profession">
                                    <option>Select Profession</option>
                                    <option value="plumber">Plumber</option>
                                    <option value="electrician">Electrician</option>
                                    <option value="mechanic">Mechanic</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group students-up-files">
                                <label>Upload Photo (150px X 150px)</label>
                                <div class="uplod">
                                    <label class="file-upload image-upbtn mb-0">
                                        Choose File <input type="file" name="compliant_img" id="compliant_img">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="student-submit">
                                <button type="submit" class="btn btn-dark">Create</button>
                                <button type="reset" class="btn btn-danger">Clear All</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>