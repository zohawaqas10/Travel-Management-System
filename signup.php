<?php
session_start();

$signupError = '';  // To show error messages
$signupSuccess = '';  // To show success messages

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // For now, any username, email, and password will be accepted
    $_SESSION['username'] = $_POST['username']; // Store username in session
    $_SESSION['email'] = $_POST['email']; // Store email in session

    // Redirect to user dashboard after successful signup
    header('Location: userDashboard.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/fevicon.png" type="">

  <title> AtoZ </title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
  
  <style>
    body {
      font-family: 'Roboto', sans-serif;
    }
    .signup-container {
      max-width: 600px;
      margin: 50px auto;
      padding: 50px;
      border-radius: 15px;
      background-color: #f9f9f9;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    }
    .form-control {
      margin-bottom: 15px;
    }
    .btn-block {
      background-color: #007bff;
      color: white;
      border-radius: 4px;
    }
    .error-msg {
      color: red;
      text-align: center;
      margin-bottom: 15px;
    }
    .success-msg {
      color: green;
      text-align: center;
      margin-bottom: 15px;
    }
  </style>
</head>
<body>
  <div class="hero_area">
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid ">
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +92 1234567890
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email : AtoZ@gmail.com
              </span>
            </a>
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location
              </span>
            </a>
          </div>
        </div>
      </div>
    </header>

    <div class="signup-container">
      <h2 class="text-center">Sign Up</h2>
      
      <!-- Show error message if there is any -->
      <?php if ($signupError): ?>
        <div class="error-msg"><?= $signupError ?></div>
      <?php endif; ?>

      <!-- Show success message if user has signed up successfully -->
      <?php if ($signupSuccess): ?>
        <div class="success-msg"><?= $signupSuccess ?></div>
      <?php endif; ?>
      
      <!-- Sign Up Form -->
      <form method="POST">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" required>
        </div>
        
        <!-- New Email Field -->
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
        </div>
        <div class="form-group">
          <label for="confirm_password">Confirm Password</label>
          <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm password" required>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Sign Up</button>

        <div class="text-center">
          <a href="login.php" class="toggle-link">Already have an account? Login</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
