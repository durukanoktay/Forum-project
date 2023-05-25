@extends('forum.layout.register')
@section('content')
<div class="container-log">
    <div class="form-box-log">
      <h1>Sign Up</h1>
      <form action="signup.php" method="post">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        <input type="submit" value="Sign Up">
        <p> I have an account <a href="/login"> login</a></p>
        <p> I want to go <a href="/home"> home</a></p>
      </form>
    </div>
  </div>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @endsection