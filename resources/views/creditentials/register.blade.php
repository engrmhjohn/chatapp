<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Panel</title>
  <link rel="stylesheet" href="{{asset('assets')}}/style.css">
</head>

<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Register JOHN's Chatroom</header>
      <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="error-text"></div>
          <div class="field input">
            <label>Full Name</label>
            <input type="text" name="name" placeholder="Full name" required>
          </div>
        
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field input">
          <label>Confirm Password</label>
          <input type="password" name="password_confirmation" placeholder="Confirm new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <!-- <div class="field image">
          <label>Select Image</label>
          <input type="file" name="avater" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div> -->
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Already Signed up? <a href="{{route('login')}}">Login now</a></div>
    </section>
  </div>

</body>
</html>
