
<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form action="{{ route('login') }}" method="post">
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
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="/register">Register</a>
        </div>
      </form>
    </div>

  </body>
</html>
