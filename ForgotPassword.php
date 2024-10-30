<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GTEC WiFi Login Form</title>
  <link rel="stylesheet" href="LoginPage.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="wrapper">
    <form action="">
      <button onclick="window.history.back()">Go back</button>
      <img class="logo" src="GTEC_Logo_1.png" width="350">
      <h1>Reset Wifi Login</h1>
      <div class="input-box">
        <input type="text" placeholder="Username" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label></div>
      <button type="submit" class="btn">Reset</button>
      <div class="register-link">
        <p>Don't have an account? <a href="Register.php">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>