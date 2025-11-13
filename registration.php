<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Create your Account</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="form-container">
    <h2>Create your Account</h2>
    <p>Join the paw-sitive community!</p>

    <!-- 🔻 Old: action="register.php"
         🔹 New: action="save_user.php" -->
    <form id="signupForm" action="save_user.php" method="POST" onsubmit="return validateForm()">
      <input type="text" name="fullname" placeholder="Full Name" required />
      <input type="email" name="email" placeholder="Email Address" required />
      <input type="password" name="password" placeholder="Password" required />
      <input type="password" name="confirm_password" placeholder="Confirm Password" required />
      <input type="text" name="phone" placeholder="Phone Number (optional)" />
      
      <select name="pet_type" required>
        <option value="">Select Pet Type</option>
        <option value="Dog">Dog</option>
        <option value="Cat">Cat</option>
        <option value="Bird">Bird</option>
        <option value="Other">Other</option>
      </select>

      <label>
        <input type="checkbox" name="terms" required />
        I agree to the Terms & Privacy Policy
      </label>

      <button type="submit">Sign Up</button>
    </form>

    <p class="login-link">
      Already have an account? <a href="PetLogin.php">Login 🐾</a>
    </p>
  </div>

  <script>
    function validateForm() {
      const password = document.querySelector('[name="password"]').value;
      const confirm = document.querySelector('[name="confirm_password"]').value;
      if (password !== confirm) {
        alert("Passwords do not match!");
        return false;
      }
      return true; // allow form submission to save_user.php
    }
  </script>
</body>
</html>
