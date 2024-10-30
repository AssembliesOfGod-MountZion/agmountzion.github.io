<?php
session_start();

include("db.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
  $user_name = $_POST['id'];
  $contact = $_POST['contact'];
  $password = $_POST['password'];
  $department = $_POST['department'];

  if(!empty($contact) && !empty($password) && !is_numeric($department))
{

  $query = "insert into form (id, contact, password, department) values ('$user_name', '$contact', '$password', '$department')";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GTEC WiFi Login Form</title>
  <link rel="stylesheet" href="Register.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="wrapper">
    
      
      <img class="logo" src="GTEC_Logo_1.png" width="350">
      <h1>Wifi Captive Portal</h1>
      <center><h2>SignUp</h2></center>
      <form method="POST">
      <div class="input-box">
        <input type="text" placeholder="Username" name="id" required>
        <i class='bx bxs-user'></i>
      </div>
      
      <div class="input-box">
        <input type="text" placeholder="Contact (Eg, 0243234234)" name="contact" required>
        <i class='bx bxs-phone'></i>
      </div>
      
      <div class="input-box">
        <input type="password" placeholder="Password" name="password" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      
      <div class="input-box">
        <input type="text" placeholder="Department" name="department" required>
        <i class='bx bxs-group'></i>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="Help.html">Contact Us</a>
      </div>
      <button type="submit" class="btn">Sign Up</button>
      <div class="register-link">
        <p>Have an account already? <a href="LoginPage.php"><b><i>LOG IN</a></p>
          <i class='bx bxs-flashing'></i>
          
        </div>
    </form>
  </div>
</body>
</html>