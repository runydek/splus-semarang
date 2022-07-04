
<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
  </head>
  <body>
    <div class="center">
      <h1>Register</h1>
      <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="txt_field">
          <input type="text" required name="username" value="{{ old('username') }}">
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" required name="password">
          <span>
          </span>
          <label>Password</label>
        </div>
        <input type="submit" value="Register">
        <div class="signup_link">
          Already a member? <a href="/login">Login</a>
        </div>
      </form>
    </div>

  </body>
</html>
