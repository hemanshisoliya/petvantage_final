<?php 
include "db_connect.php";
include "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Appointment - PetVantage</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f5f7;
      margin: 0;
      padding: 0;
    }

    /* Navbar */
    nav {
      background-color: #c7d8da;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 40px;
      margin: 10px 20px; /* space from top and sides */
      border-radius: 10px;
      box-shadow: 0 0 8px rgba(0,0,0,0.1);
    }

    nav a {
      text-decoration: none;
      color: #333;
      margin: 0 15px;
      font-weight: bold;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #c7d8da;
    }

    .logo {
      font-size: 22px;
      font-weight: bold;
    }

    .paw {
      font-size: 20px;
    }

    /* Main box */
    .container {
      max-width: 650px;
      margin: 40px auto;
      background-color: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      color: #60d1dbff;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
      color: #444;
    }

    input, textarea, select {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 15px;
    }

    button {
      background-color: #b94d7f;
      color: white;
      border: none;
      padding: 12px 20px;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
      width: 100%;
      transition: background 0.3s;
    }

    button:hover {
      background-color: #29c0d1ff;
    }

    footer {
      text-align: center;
      padding: 15px;
      font-size: 14px;
      color: #555;
      background-color: #f5e0e9;
      margin: 40px 0 0 0;
    }

    .section-title {
      text-align: center;
      color: #444;
      font-weight: bold;
      margin-top: 40px;
      margin-bottom: 15px;
      font-size: 18px;
    }

    .doctor{
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 25px;
        background-color:#fff2f6;
        border-radius: 12px;
        padding: 15px 20px;
    }

    .doctor-icon{
        width: 84px;
        height: 84px;
        background: #ffe9f0;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 22px;
        color: #b94d7f;
    }

    .doctor-details p{
        margin: 4px 0;
        color: #444;
    }
    
    .doctor-details strong{
        color: #b94d7f;
    }

  </style>
</head>
<body>

  <!-- Navigation -->
  <nav>
    <div class="logo">PetVantage <span class="paw">🐾</span></div>
    <div>
      <a href="homepage.html">Home</a>
      <a href="service.php">Services</a>
      <a href="about.php">About</a>
      <a href="contact.php">Contact</a>
    </div>
  </nav>

  <!--Doctor info -->
  <div class="container">
    <div class="doctor">
        <div class="doctor-icon">DR</div>
        <div class="doctor-details">
            <p><strong>Dr. Meera Shah</strong></p>
            <p>Phone: +91 98252 46127</p>
            <p>Address: PetVantage Clinic, City Center, Gujarat</p>
</div>
</div>
</div>

  <!-- Appointment Form -->
  <div class="container">
    <h2>Book an Appointment</h2>
    <form method="POST">
      <label for="ownerName">Owner Name:</label>
      <input type="text" id="ownerName" name="ownerName" required>

      <label for="address">Address:</label>
      <textarea id="address" name="address" rows="2" required></textarea>

      <label for="phone">Mobile Number:</label>
      <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>

      <label for="petType">Pet Type:</label>
      <select id="petType" name="petType" required>
        <option value="">-- Select Pet Type --</option>
        <option value="Dog">Dog</option>
        <option value="Cat">Cat</option>
        <option value="Bird">Bird</option>
        <option value="Other">Other</option>
      </select>

      <label for="disease">Pet Disease / Problem:</label>
      <textarea id="disease" name="disease" rows="3" required></textarea>

      <label for="timeSlot">Preferred Time Slot:</label>
      <select id="timeSlot" name="timeSlot" required>
        <option value="">-- Select Time Slot --</option>
        <option value="10:00 AM - 11:00 AM">10:00 AM - 11:00 AM</option>
        <option value="12:00 PM - 1:00 PM">12:00 PM - 1:00 PM</option>
        <option value="3:00 PM - 4:00 PM">3:00 PM - 4:00 PM</option>
        <option value="5:00 PM - 6:00 PM">5:00 PM - 6:00 PM</option>
      </select>

      <button type="submit" name="btn">Book My Appointment</button>
    </form>
  </div>
  <?php
  if(isset($_POST["btn"]))
  {
    $uid= $_SESSION['userid'];
     $name = $_POST['ownerName'];
    $addr = $_POST['address'];
    $mob = $_POST['phone'];
    $pet = $_POST['petType'];
    $dis = $_POST['disease'];
    $time = $_POST['timeSlot'];

    $sql = "INSERT INTO appointments(userid,address,mobile,pet_type,disease,timeslot) VALUES ('$uid','$addr','$mob','$pet','$dis','$time')";

    if($conn->query($sql) === TRUE){
         echo "<script>window.location='service.php';</script>";
        exit();
    }else{
        echo "Error: ".$conn->error;
    }
  }
  
  ?>


  

  <footer>
    © 2025 PetVantage — All rights reserved
  </footer>

</body>
</html>