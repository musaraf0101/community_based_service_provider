<div class="container text-center">
    <div class="row">
        @if ($errors->any)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col">
            <img src="#" alt="not found">
        </div>
        <div class="col">
            <form action="{{route('Contact.store')}}" method="post">
                @csrf
                <div class="col-12 col-sm-4">
                    <div class="form-group local-forms">
                        <label>Full Name <span class="login-danger">*</span></label>
                        <input class="form-control" type="text" name="full_name" placeholder="Enter Full Name">
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="form-group local-forms">
                        <label>Email <span class="login-danger">*</span></label>
                        <input class="form-control" type="text" name="email" placeholder="Enter Email">
                    </div>
                </div>

                <div class="col-12 col-sm-4">
                    <div class="form-group local-forms">
                        <label>Phone <span class="login-danger">*</span></label>
                        <input class="form-control" type="text" name="phone_number" placeholder="Enter Phone Number">
                    </div>
                </div>
                <div class="col-12">
                    <div class="submit">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>