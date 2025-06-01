<style>
    .container {
        margin-top: 150px;
    }

    input {
        text-align: center;
    }

    form {
        padding: 40px;
        border-radius: 10px;
        background-color: rgba(0, 0, 0, 0.8);
    }
    label{
        color: white;
    }
</style>
<div class="container text-center">
    <div class="row">
        <div class="col">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{route('Contact.store')}}" method="post">
                @csrf

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="full_name" class="form-label">Full Name</label>
                        <input type="text" name="full_name" class="form-control" placeholder="Enter Full Name">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email </label>
                        <input type="text" name="email" class="form-control" placeholder="Enter Email">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="phone_number" class="form-label">Phone Number</label>
                        <input type="text" name="phone_number" class="form-control" placeholder="Enter Phone Number">
                    </div>
                    <div class="col-md-6">
                        <label for="message" class="form-label">Message</label>
                        <input type="text" name="message" class="form-control" placeholder="Enter Message">
                    </div>
                </div>


                <div class="mb-3">
                    <button type="submit" class="btn btn-dark">Send Message</button>
                    <button type="reset" class="btn btn-danger">Clear All</button>
                </div>
            </form>
        </div>
    </div>

</div>