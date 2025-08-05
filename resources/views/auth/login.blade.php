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

    .login-container {
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    .login-container h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .login-container input[type="text"],
    .login-container input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .login-container input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .login-container input[type="submit"]:hover {
        background-color: rgb(70, 125, 183);
        color: black;
    }

    a {
        text-decoration: none;
        color: #007BFF;
    }
</style>

<div class="login-container">
    <h2>Login</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="{{ route('login.submit') }}">
        @csrf
        <label for="username">Username:</label>
        <input type="text" id="email" name="email">

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">

        <input type="submit" value="Login">
    </form>

    <p style="text-align: center; margin-top: 15px;">
        Don't have an account? <a href="/register">Register here</a>
    </p>
    <p><a href="/">← Back to Home</a></p>

</div>
@endsection