<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Panel</title>
  <link rel="stylesheet" href="{{asset('assets')}}/style.css">
</head>

<body>
  <div class="wrapper">
    <section class="form login">
      <header>Login JOHN's Chatroom</header>
      <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Not yet Signed up? <a href="{{route('register')}}">Signup now</a></div>
    </section>
  </div>
</body>
</html>
