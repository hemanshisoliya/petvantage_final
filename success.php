<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Appointment Success | PetVantage</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f9fff9;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    /* ✅ Proper Tick Animation Box */
    .checkmark {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #eafbe7;
      border: 4px solid #2ecc71;
      animation: pop 0.4s ease-in-out forwards;
    }

    @keyframes pop {
      0% { transform: scale(0.5); opacity: 0; }
      100% { transform: scale(1); opacity: 1; }
    }

    .checkmark::after {
      content: "";
      width: 25px;
      height: 50px;
      border-right: 5px solid #2ecc71;
      border-bottom: 5px solid #2ecc71;
      transform: rotate(45deg);
      margin-top: -10px;
      animation: draw 0.6s ease forwards 0.3s;
      opacity: 0;
    }

    @keyframes draw {
      0% { height: 0; width: 0; opacity: 0; }
      50% { height: 25px; width: 0; opacity: 1; }
      100% { height: 25px; width: 12px; opacity: 1; }
    }

    h1 {
      color: #27ae60;
      font-size: 28px;
      margin-top: 20px;
    }

    p {
      font-size: 16px;
      color: #555;
    }

    .brand {
      font-weight: 600;
      color: #27ae60;
    }
  </style>
</head>
<body>

  <!-- ✅ Tick Animation (Highlighted Section Updated) -->
  <div class="checkmark"></div>

  <h1>Appointment Booked Successfully!</h1>
  <p>Thank you for trusting <span class="brand">PetVantage 🐾</span><br>
  We'll reach out soon to confirm your slot!</p>

</body>
</html>