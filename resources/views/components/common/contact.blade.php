<style>
    .container {
        margin-top: 50px;
        margin-bottom: 50px;
        max-width: 700px;
    }

    form {
        padding: 40px;
        border-radius: 15px;
        background: linear-gradient(135deg,rgb(174, 174, 174),rgb(174, 174, 174));
        box-shadow: 0 8px 25px rgba(174, 174, 174,0);
    }

    label {
        color: #ffffff;
        font-weight: 500;
    }

    input.form-control {
        background-color: #f1f1f1;
        border: none;
        border-radius: 8px;
        padding: 10px 15px;
        text-align: center;
        transition: all 0.3s ease;
    }

    input.form-control:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgb(255, 255, 255);
    }

    .btn-dark {
        background-color: #2c3e50;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-dark:hover {
        background-color: #1a242f;
    }

    .btn-danger {
        background-color: #e74c3c;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-danger:hover {
        background-color: #c0392b;
    }

    .alert-danger {
        border-radius: 10px;
        font-size: 0.9rem;
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