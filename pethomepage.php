<!--<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">-->

<?php
include "session.php";
?>
<!DOCTYPE html>
<html>
<head>
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetVantage - Pet Care</title>
    <style>
        /* Basic CSS for layout - you'll need to expand this */
        body {
            background: linear-gradient(to bottom, #fefae2, #dbb5d0);
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #c7d8da;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            text-decoration: none;
        }
        nav ul li {
            margin-right: 20px;
            text-decoration: none;
        }
        .user-icons {
            font-size: 20px;
        }
        .banner {
            background-color: #986688;
            min-height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-style: italic;
            margin-bottom: 40px;
        }
        .section-heading {
            
            text-align: center;
            margin-bottom: 20px;
            
        }
        .pet-cards {
           
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 40px;
        }
        .pet-card {
            background-color: #986688;
            border: 1px solid #ccc;
            padding: 20px;
            width: 250px;
            text-align: center;
            min-height: 150px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .load-more-container {
            text-align: center;
            margin-bottom: 40px;
        }
        .load-more-button {
            padding: 10px 30px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body>
   <?php  include "header.php";?>

    <section class="banner">
        <h2>Your Pet's Best Friend!</h2>
    </section>

    <section class="why-own-pet">
        <h2 class="section-heading">Why you should own a Pet?</h2>
        <p style="text-align: center; max-width: 800px; margin: 0 auto 40px;">
            Owning a pet brings immense joy, companionship, and numerous health benefits.
            They offer unconditional love, reduce stress, and encourage an active lifestyle.
            From loyal dogs to calming cats, pets enrich our lives in countless ways.
            Consider the unique bond you can form and the positive impact a pet can have on your well-being.
        </p>
    </section>

    <section class="pets-section">
        <h2 class="section-heading">Pets</h2>
        <div class="pet-cards">
            <div class="pet-card">
                <!--<h3>Dog Name</h3>-->
                <img src="pic1.jpg" height="350px" width="250px" alt="Cute Cat">
                <p>A loyal and playful companion.</p>
                <button>View Details</button>
            </div>
            <div class="pet-card">
               <!-- <h3>Cat Name</h3>-->
                <img src="pic4.jpg" height="350px" width="250px" alt="Cute Cat">
                <p>An independent and affectionate friend.</p>
                <button>View Details</button>
            </div>
            <div class="pet-card">
               <!-- <h3>Bird Name</h3>-->
                <img src="pic5.jpg" height="350px" width="250px" alt="Cute Cat">
                <p>A vibrant and musical addition to your home.</p>
                <button>View Details</button>
            </div>
            </div>
        <div class="load-more-container">
            <button class="load-more-button">Load more</button>
        </div>
    </section>

    <footer>
        <p style="text-align: center; padding: 20px; background-color: #f0f0f0;">&copy; 2025 PetVantage. All rights reserved.</p>
    </footer>
</body>
</html>