<div class="row">
    <div class="col-sm-12">
        <div class="card comman-shadow">
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @auth
                <form action="{{route('User.userBookStore')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <h5 class="form-title student-info">Booking Information </h5>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Full Name <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="full_name" value="{{old('full_name')}}" placeholder="Enter Full Name">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>NIC Number <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="nic" value="{{old('nic')}}" placeholder="Enter NIC Number">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Service Type <span class="login-danger">*</span></label>
                                <input list="serviceTypes" name="service_type" class="form-control" placeholder="Select or type service" value="{{ old('service_type') }}">
                                <datalist id="serviceTypes">
                                    <option value="Mechanic">
                                    <option value="Electrician">
                                    <option value="Plumber">
                                    <option value="Cleaner">
                                    <option value="Painter">
                                </datalist>
                            </div>
                        </div>

                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>E-Mail <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="email" value="{{old('email')}}" placeholder="Enter Email Address">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Phone Number <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="phone_number" value="{{old('phone_number')}}"  placeholder="Enter Phone Number">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Location <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="location" value="{{old('location')}}"  placeholder="Enter Location">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Date <span class="login-danger">*</span></label>
                                <input class="form-control" type="date" name="date" value="{{old('date')}}">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Time <span class="login-danger">*</span></label>
                                <input class="form-control " type="time" name="time" value="{{old('time')}}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="student-submit">
                                <button type="submit" class="btn btn-primary">Book</button>
                            </div>
                        </div>
                    </div>
                </form>
                @endauth
            </div>
        </div>
    </div>
</div>