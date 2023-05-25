@extends('forum.layout.register')
@section('content')
<div class="container-log">
    <div class="form-box-log">
      <h1>Login</h1>
      <form action="login.php" method="post">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
        <p>I don't have an account <a href="/signup">sign up</a></p>
      </form>
    </div>
  </div>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @endsection