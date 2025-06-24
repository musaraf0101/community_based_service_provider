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
                <form action="{{route('ServiceProvider.complaintUpdate',$compliant->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12">
                            <h5 class="form-title student-info">Compliant</h5>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Full Name <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="full_name" id="full_name" value="{{old('full_name')}}" placeholder="Enter Full Name" disabled>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms calendar-icon">
                                <label>Service Date <span class="login-danger">*</span></label>
                                <input class="form-control datetimepicker" type="text" name="service_date" id="service_date" value="{{old('service_date')}}" placeholder="DD-MM-YYYY" disabled>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>E-Mail <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="email" id="email" value="{{old('email')}}" placeholder="Enter Email Address" disabled>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Phone Number <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="phone_number" id="phone_number" value="{{old('phone_number')}}" placeholder="Enter Phone Number" disabled>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Location <span class="login-danger">*</span></label>
                                <select name="location" class="form-control" value="{{ old('location') }}" disabled>
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
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Complaint Status <span class="login-danger">*</span></label>
                                <select name="complaint_status" class="form-control" value="{{ old('complaint_status') }}">
                                    <option value="">Please Select status</option>
                                    <option value="pending">Pending</option>
                                    <option value="going">ON Going</option>
                                    <option value="complete">Complete</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Compliant <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="compliant" id="compliant" value="{{old('compliant')}}" placeholder="Enter Compliant" disabled>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Service Provider Name <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="service_provider_name" id="service_provider_name" value="{{old('service_provider_name')}}" placeholder="Enter Service Provider Name" disabled>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Profession <span class="login-danger">*</span></label>
                                <select class="form-control select" name="profession" value="{{ old('profession') }}" disabled>
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