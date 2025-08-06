@extends('layouts.main')
@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .register-container {
        background-color: white;
        padding: 30px;
        margin: 10px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 350px;
    }

    .register-container h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .register-container input[type="text"],
    .register-container input[type="email"],
    .register-container input[type="password"],
    .register-container select {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .register-container input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .register-container input[type="submit"]:hover {
        background-color: rgb(70, 125, 183);
        color: black;
    }
</style>

<div class="register-container">
    <h2>Register</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif



    <form method="POST" action="{{ route('register.submit') }}">
        @csrf

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}">

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="password_confirmation">

        <label for="role">Role:</label>
        <select id="role-select" name="role">
            <option value="">Select Role</option>
            <option value="user">User</option>
            <option value="service_provider">Service Provider</option>
            <option value="admin">Admin</option>
        </select>

        <div id="service-provider-fields" style="display:none;">
            <label for="business_name">Business Name:</label>
            <input type="text" name="business_name" value="{{ old('business_name') }}">
            <label for="phone">Phone:</label>
            <input type="text" name="phone" value="{{ old('phone') }}">
            <label for="address">Address:</label>
            <input type="text" name="address" value="{{ old('address') }}">
        </div>

        <input type="submit" value="Register">
    </form>

    <p style="text-align: center; margin-top: 15px;">
        Already have an account? <a href="/login">Login here</a>
    </p>
    <p><a href="/">← Back to Home</a></p>

</div>

<script>
    document.getElementById('role-select').addEventListener('change', function() {
        document.getElementById('service-provider-fields').style.display = this.value === 'service_provider' ? 'block' : 'none';
    });
</script>

@endsection