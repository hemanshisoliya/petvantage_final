
<?php include "db_connect.php"; 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">

  <title>PetVantage Login</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background-color: #ecf5bc;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-box {
      background: #fff;
      border: 2px solid #6c63ff;
      border-radius: 12px;
      padding: 30px 40px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .login-box h1 {
      text-align: center;
      margin-bottom: 10px;
      font-size: 26px;
      color: #6c63ff;
    }

    .login-box h2 {
      text-align: center;
      font-size: 20px;
      margin-bottom: 20px;
      color: #333;
    }

    .login-box label {
      display: block;
      margin: 10px 0 5px;
      color: #333;
    }

    .login-box input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    .actions {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 20px;
    }

    .actions a {
      font-size: 14px;
      text-decoration: none;
      color: #6c63ff;
    }

    .actions a:hover {
      text-decoration: underline;
    }

    .login-btn {
      width: 100%;
      margin-top: 20px;
      padding: 12px;
      background: #6c63ff;
      color: white;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      cursor: pointer;
    }

    .login-btn:hover {
      background: #554bcd;
    }
  </style>
</head>
<body>

  <form class="login-box" method="post">
    <h1>PetVantage 🐾</h1>
    <h2>Login</h2>

    <label for="username">UseEmail:🐾</label>
    <input type="text" id="username" name="username" required />

    <label for="password">Password:🐾</label>
    <input type="password" id="password"  name="password" required />


    <button type="submit" class="login-btn" name="btn">Submit</button>
    <br/>
    <br/>
    <br/>
    <br/>
    <a class="login-btn" href="registration.php">Sign Up</button>

    <?php

if(isset($_POST["btn"]))
{
    $nm = $_POST['username'];
$pass = $_POST['password'];
    $sql ="select * from users where email='$nm' and password='$pass'";
    $res = mysqli_query($conn,$sql);
      if (mysqli_num_rows($res) > 0) 
    {
        $row = mysqli_fetch_assoc($res);

        $_SESSION["name"] = $nm;
        $_SESSION["userid"] = $row['userid'];
        echo "<script>window.location='pethomepage.php';</script>";
    }
    else{
        echo "invalid login";
    }
}
?>
  </form>


 
  

</body>
</html>
