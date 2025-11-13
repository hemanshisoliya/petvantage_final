<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>PetVantage — About Us</title>
  <style>
    :root {
      --pink:#ffd6e0;
      --accent:#c7d8da;
      --muted:#555;
      --card-bg:#fff;
      --maxw:900px;
      font-family: Arial, Helvetica, sans-serif;
    }
    body {
      margin:0;
      background:#fafafa;
      color:#222;
      display:flex;
      justify-content:center;
      padding:24px;
    }
    .site {
      width:100%;
      max-width:var(--maxw);
      background: linear-gradient(180deg,var(--pink), #fff);
      border-radius:8px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.06);
      overflow:hidden;
    }

    header {
      display:flex;
      align-items:center;
      justify-content:space-between;
      padding:18px 22px;
      background:var(--accent);
      color:#222;
    }
    .brand { font-weight:700; font-size:20px; letter-spacing:0.2px; }
    nav a {
      margin-left:14px;
      text-decoration:none;
      color:#17202a;
      font-weight:600;
    }

    main {
      padding:28px 22px;
      display:flex;
      flex-direction:column;
      gap:28px;
      background:#fff0f6;
    }

    .about-intro {
      text-align:center;
    }
    .about-intro h1 {
      margin:0 0 12px 0;
    }
    .about-intro p {
      max-width:720px;
      margin:0 auto;
      color:var(--muted);
      line-height:1.6;
    }

    .purpose {
      background:var(--card-bg);
      padding:18px;
      border-radius:8px;
      box-shadow:0 4px 12px rgba(0,0,0,0.05);
    }
    .purpose h2 { margin-top:0; }
    .purpose p { color:var(--muted); line-height:1.5; }

    .gallery {
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
      gap:16px;
    }
    .gallery img {
      width:100%;
      height:200px;
      object-fit:cover;
      border-radius:8px;
      box-shadow:0 3px 10px rgba(0,0,0,0.08);
    }

    footer {
      padding:12px 22px;
      font-size:13px;
      color:var(--muted);
      text-align:center;
      background:transparent;
    }
  </style>
</head>
<body>
  <div class="site">
    <header>
      <div class="brand">PetVantage 🐾</div>
      <nav>
        <a href="homepage.html">Home</a>
        <a href="services.php">Services</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
      </nav>
    </header>

    <main>
      <section class="about-intro">
        <h1>About Us</h1>
        <p>
          Welcome to <strong>PetVantage</strong> — a platform created with love for pets and their owners. 
          Our mission is to make pet care simple, joyful, and stress-free. 
          From health reminders to grooming tips, we want to support you in giving your furry, feathery, or scaly friends the best life possible. 🐶🐱🐦
        </p>
      </section>

      <section class="purpose">
        <h2>Our Purpose</h2>
        <p>
          This website is designed to bring pet lovers together and provide them with the right tools for pet care. 
          Through PetVantage, you can track health check-ups, receive vaccination reminders, explore nutritious food options, 
          and even learn about different breeds. We aim to create a space where every pet parent feels supported 
          and every pet gets the love and attention they deserve.
        </p>
      </section>

      <section>
        <h2 style="text-align:center;">Our Lovely Companions</h2>
        <div class="gallery">
          <img src="C:\Users\Jenish\Downloads" height="250px" width="200px">
          <img src="C:\xampp\htdocs\h_121\Petvantage\pic1.jpg" height="250px" width="200px" alt="Cute Cat">
          <img src="https://loremflickr.com/400/300/parrot" alt="Colorful Bird">
        </div>
      </section>
    </main>

    <footer>
      © <span id="year"></span> PetVantage — Created with love for pets ❤️
    </footer>
  </div>

  <script>
    document.getElementById('year').textContent = new Date().getFullYear();
  </script>
</body>
</html>