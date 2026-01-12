<?php
require_once 'mongodb/src/functions.php';

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$bulkWrite = new MongoDB\Driver\BulkWrite;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $id_card = htmlspecialchars($_POST['id_card']);
    $gender = htmlspecialchars($_POST['gender']);
    $source = htmlspecialchars($_POST['source']);
    $destination = htmlspecialchars($_POST['destination']);
    $cnic = htmlspecialchars($_POST['cnic']);
    $payment = htmlspecialchars($_POST['payment']);
    $travel_date = htmlspecialchars($_POST['travel_date']);
    $passengers = (int)$_POST['passengers'];
    $category = htmlspecialchars($_POST['category']);
    $ticket_price = (float)$_POST['ticket_price'];
    $total_bill = (float)$_POST['total_bill'];

    $document = [
        'name' => $name,
        'phone' => $phone,
        'email' => $email,
        'id_card' => $id_card,
        'gender' => $gender,
        'source' => $source,
        'destination' => $destination,
        'cnic' => $cnic,
        'payment' => $payment,
        'travel_date' => $travel_date,
        'passengers' => $passengers,
        'category' => $category,
        'ticket_price' => $ticket_price,
        'total_bill' => $total_bill,
        'created_at' => new MongoDB\BSON\UTCDateTime()
    ];

    try {
        $bulkWrite->insert($document);
        $manager->executeBulkWrite('atoz.bookings', $bulkWrite);

        echo "<script>alert('Record saved successfully!');</script>";
    } catch (MongoDB\Driver\Exception\Exception $e) {
        echo "<script>alert('Error: " . $e->getMessage() . "');</script>";
    }
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
         .booking-form {
        max-width: 900px;
        margin: 30px auto;
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
    }
    .form-row {
        display: flex;
        gap: 20px;
        margin-bottom: 15px;
    }
    .form-row > div {
        flex: 1;
    }
    label {
        font-weight: 600;
        margin-bottom: 5px;
        display: block;
    }
    input, select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-top: 5px;
    }
    button[type="submit"] {
        width: 100%;
        background-color: #007bff;
        color: #fff;
        font-size: 18px;
        padding: 12px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 20px;
    }
    button[type="submit"]:hover {
        background-color: #0056b3;
    }
    </style>
</head>
<body>
    
    <!-- header section strats -->
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
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.php">
              <span>
                AtoZ
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
              <li class="nav-item active">
                  <a class="nav-link" href="userDashboard.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="userDashboard.php">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="userDashboard.php"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="userDashboard.php">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="form.php">Book Now</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="bookings.php"> <i class="fa fa-user" aria-hidden="true"></i> My Bookings</a>
                </li>
                
                <button style="padding:0px; background-color:#ffffff; border-color:black;"><a href="index.php">Log Out</a></button>
                
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
    
<div class="booking-form">
  <h2 class="text-center mb-4">Bus / Plane Booking Form</h2>
  <form action="form.php" method="post">
    
    <div class="form-row">
      <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required placeholder="abc@gmail.com">
      </div>
    </div>


    <div class="form-row">
  <div>
    <label for="country_code">Country Code</label>
    <select id="country_code" name="country_code" required>
      <option value="">-- Select Code --</option>
      <option value="+92">Pakistan (+92)</option>
      <option value="+1">USA (+1)</option>
      <option value="+44">UK (+44)</option>
      <option value="+61">Australia (+61)</option>
      <option value="+971">UAE (+971)</option>
      <!-- Add more countries if needed -->
    </select>
  </div>
  <div>
    <label for="phone">Phone Number</label>
    <input type="text" id="phone" name="phone" pattern="\d{9}" maxlength="9" required placeholder="Enter 9-digit number">
    <small>Enter 9 digits without country code</small>
  </div>

      <div>
        <label for="id_card">ID Card Number</label>
        <input type="text" id="id_card" name="id_card" required>
        <small>without dashes</small>
      </div>
    </div>

    <div class="form-row">
      <div>
        <label for="gender">Gender</label>
        <select id="gender" name="gender" required>
          <option value="">-- Select Gender --</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
      <div>
        <label for="source">Source</label>
        <input type="text" id="source" name="source" required>
      </div>
    </div>

    <div class="form-row">
      <div>
        <label for="destination">Destination</label>
        <input type="text" id="destination" name="destination" required>
      </div>
      <div>
        <label for="cnic">CNIC Number</label>
        <input type="text" id="cnic" name="cnic" required pattern="\d{5}-\d{7}-\d{1}">
      </div>
    </div>

    <div class="form-row">
      <div>
        <label for="payment">Payment Method</label>
        <select id="payment" name="payment" required>
          <option value="">-- Select Payment --</option>
          <option value="Cash">Cash</option>
          <option value="Credit Card">Credit Card</option>
          <option value="JazzCash">JazzCash</option>
          <option value="EasyPaisa">EasyPaisa</option>
        </select>
      </div>
      <div>
        <label for="travel_date">Travel Date</label>
        <input type="date" id="travel_date" name="travel_date" required>
      </div>
    </div>

    <div class="form-row">
      <div>
        <label for="passengers">Number of Passengers</label>
        <input type="number" id="passengers" name="passengers" min="1" max="10" value="1" required>
      </div>
      <div>
        <label for="category">Category</label>
        <select id="category" name="category" onchange="setTicketPrice()" required>
          <option value="">-- Select Category --</option>
          <option value="Economy Bus">Economy Bus</option>
          <option value="Business Bus">Business Bus</option>
          <option value="Economy Plane">Economy Plane</option>
          <option value="Business Plane">Business Plane</option>
        </select>
      </div>
    </div>

    <div class="form-row">
      <div>
        <label for="ticket_price">Ticket Price (PKR)</label>
        <input type="number" id="ticket_price" name="ticket_price" readonly required>
      </div>
      <div>
        <label for="total_bill">Total Bill (PKR)</label>
        <input type="number" id="total_bill" name="total_bill" readonly required>
      </div>
    </div>

    <button type="submit">Book Now</button>
  </form>
</div>


          
          
    <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +92 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  AtoZ@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_detail">
            <h4>
              Info
            </h4>
            <p>
              Your comfort is our priority – Dedicated to making your journeys seamless, enjoyable, and unforgettable!
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto info_col">
          <div class="info_link_box">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a class="active" href="#">
                <img src="images/nav-bullet.png" alt="">
                Home
              </a>
              <a class="" href="#about">
                <img src="images/nav-bullet.png" alt="">
                About
              </a>
              <a class="" href="#service">
                <img src="images/nav-bullet.png" alt="">
                Services
              </a>
              <a class="" href="contact.php">
                <img src="images/nav-bullet.png" alt="">
                Contact Us
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col ">
          <h4>
            Subscribe
          </h4>
          
            <input type="text" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
         
        </div>
      </div>
    </div>
  </section>
    <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Anosha and Zoha</a>
      </p>
    </div>
  </section>
</body>
</html>

<script>
  function setTicketPrice() {
    const category = document.getElementById('category').value;
    let price = 0;

    if (category === 'Economy Bus') price = 500;
    else if (category === 'Business Bus') price = 1000;
    else if (category === 'Economy Plane') price = 5000;
    else if (category === 'Business Plane') price = 10000;

    document.getElementById('ticket_price').value = price;

    calculateTotal();
  }

  document.getElementById('passengers').addEventListener('input', calculateTotal);
  document.getElementById('category').addEventListener('change', calculateTotal);

  function calculateTotal() {
    const price = parseFloat(document.getElementById('ticket_price').value) || 0;
    const passengers = parseInt(document.getElementById('passengers').value) || 1;
    document.getElementById('total_bill').value = price * passengers;
  }
</script>