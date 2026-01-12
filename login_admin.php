<?php
// Start session
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Just fake a login (since backend isn't needed yet)
    $_SESSION['username'] = $_POST['username']; // Store username if you want

    // Redirect to adminDashboard.php always
    header('Location: adminDashboard.php');
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
        .form-container {
            max-width: 400px;
            margin: 50px auto;
            background: #f7f7f7;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: white;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-container .link {
            text-align: center;
            margin-top: 15px;
        }

        .form-container .link a {
            text-decoration: none;
            color: #007bff;
        }

        .form-container .error {
            color: red;
            text-align: center;
            margin-bottom: 15px;
        }

        .form-container .login-option {
            text-align: center;
            margin-top: 10px;
        }

        .form-container .login-option button {
            background-color: #28a745;
            margin-top: 15px;
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

    <div class="form-container">
        <h2>Login</h2>
        <!-- <?php if ($error_message): ?>
            <div class="error"><?php echo $error_message; ?></div>
        <?php endif; ?> -->

        <!-- Login Form -->
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>

          

            <button type="submit">Login</button>
        </form>

       
    </div>
</body>

</html>
