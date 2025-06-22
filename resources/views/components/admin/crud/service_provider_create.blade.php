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
                <form action="/admin/dashboard/service-provider-store" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <h5 class="form-title student-info">User Information </h5>
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
                                <label>Profession <span class="login-danger">*</span></label>
                                <select class="form-control select" name="profession" value="{{ old('profession') }}">
                                    <option value="">Please Select Profession</option>
                                    <option value="plumber">Plumber</option>
                                    <option value="electrician">Electrician</option>
                                    <option value="mechanic">Mechanic</option>
                                    <option value="carpenter">Carpenter</option>
                                    <option value="painter">Painter</option>
                                    <option value="mason">Mason</option>
                                    <option value="roofer">Roofer</option>
                                    <option value="gardener">Gardener</option>
                                    <option value="cleaner">Cleaner</option>
                                    <option value="housekeeper">Housekeeper</option>
                                    <option value="hvac-technician">HVAC Technician</option>
                                    <option value="welder">Welder</option>
                                    <option value="appliance-repair-technician">Appliance Repair Technician</option>
                                    <option value="tailor">Tailor</option>
                                    <option value="tutor">Tutor</option>
                                    <option value="it-computer-technician">IT / Computer Technician</option>
                                    <option value="security-guard">Security Guard</option>
                                    <option value="driver">Driver</option>
                                    <option value="beautician">Beautician</option>
                                    <option value="hairdresser">Hairdresser</option>
                                    <option value="photographer">Photographer</option>
                                    <option value="courier-service">Courier Service</option>
                                    <option value="home-health-aide">Home Health Aide</option>
                                    <option value="pool-cleaner">Pool Cleaner</option>
                                    <option value="maintenance-specialist">Maintenance Specialist</option>
                                </select>
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
                                <label>Description </label>
                                <input class="form-control" type="text" name="description" id="description" value="{{old('description')}}" placeholder="Enter description">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Location <span class="login-danger">*</span></label>
                                <select name="location" class="form-control" value="{{ old('location') }}">
                                    <option value="">Please Select District</option>
                                    <option value="colombo">Colombo</option>
                                    <option value="gampaha">Gampaha</option>
                                    <option value="kalutara">Kalutara</option>
                                    <option value="kandy">Kandy</option>
                                    <option value="matale">Matale</option>
                                    <option value="nuwara-eliya">Nuwara Eliya</option>
                                    <option value="galle">Galle</option>
                                    <option value="matara">Matara</option>
                                    <option value="hambantota">Hambantota</option>
                                    <option value="jaffna">Jaffna</option>
                                    <option value="kilinochchi">Kilinochchi</option>
                                    <option value="mannar">Mannar</option>
                                    <option value="mullaitivu">Mullaitivu</option>
                                    <option value="vavuniya">Vavuniya</option>
                                    <option value="ampara">Ampara</option>
                                    <option value="batticaloa">Batticaloa</option>
                                    <option value="trincomalee">Trincomalee</option>
                                    <option value="kurunegala">Kurunegala</option>
                                    <option value="puttalam">Puttalam</option>
                                    <option value="anuradhapura">Anuradhapura</option>
                                    <option value="polonnaruwa">Polonnaruwa</option>
                                    <option value="badulla">Badulla</option>
                                    <option value="monaragala">Monaragala</option>
                                    <option value="kegalle">Kegalle</option>
                                    <option value="ratnapura">Ratnapura</option>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="col-12 col-sm-4">
                            <div class="form-group students-up-files">
                                <label>Upload Photo (150px X 150px)</label>
                                <div class="uplod">
                                    <label class="file-upload image-upbtn mb-0">
                                        Choose File <input type="file" name="img" id="img" value="{{old('img')}}" >
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