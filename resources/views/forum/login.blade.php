@extends('forum.layout.auth')
@section('title', 'Login')
@section('content')
<div class="container-log">
    <div class="form-box-log">
        <h1>Login</h1>
        <form action="{{ url('login') }}" method="post">@csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
            <p>I don't have an account <a href="{{ url('register') }}">sign up</a></p>
        </form>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
