<!doctype html>
<html lang="en">
<head>
  <title>PetVantage — Contact</title>
  <style>
    /* Simple styles matching your pink header look */
    :root {
      --pink:#c7d8da;
      --accent:#c7d8da;
      --muted:#666;
      --card-bg:#fff;
      --maxw:900px;
      font-family: Arial, Helvetica, sans-serif;
    }
    body {
      margin:0;
      background: #fafafa;
      color: #222;
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
      display:grid;
      grid-template-columns: 1fr;
      gap:18px;
      background: #fff0f6;
      min-height:320px;
    }

    .contact-card {
      background:var(--card-bg);
      padding:18px;
      border-radius:8px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.04);
      display:flex;
      gap:18px;
      align-items:center;
      flex-wrap:wrap;
    }
    .contact-info {
      flex:1 1 260px;
    }
    .contact-info h2 { margin:0 0 8px 0; }
    .contact-info p { margin:6px 0; color:var(--muted); }

    .contact-actions {
      flex:0 0 240px;
      display:flex;
      flex-direction:column;
      gap:8px;
    }
    .btn {
      display:inline-block;
      text-decoration:none;
      padding:10px 12px;
      border-radius:6px;
      text-align:center;
      font-weight:700;
      border: none;
      cursor:pointer;
    }
    .btn-primary { background:var(--accent); color:#000; }
    .btn-outline { background:transparent; border:1px solid var(--accent); color:var(--muted); }

    form.contact-form {
      display:grid;
      gap:10px;
      margin-top:6px;
    }
    input, textarea {
      width:100%;
      padding:10px;
      border-radius:6px;
      border:1px solid #e6e6e6;
      font-size:14px;
      box-sizing:border-box;
    }
    textarea { min-height:100px; resize:vertical; }

    footer {
      padding:12px 22px;
      font-size:13px;
      color:var(--muted);
      text-align:center;
      background:transparent;
    }

    @media(min-width:720px){
      main { grid-template-columns: 1fr; }
      .contact-card { flex-wrap:nowrap; }
    }
  </style>
</head>
<body>
  <div class="site" role="document">
    <header>
      <div class="brand">PetVantage 🐾</div>
      <nav aria-label="Main navigation">
        <a href="homepage.html">Home</a>
        <a href="services.php">Services</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
      </nav>
    </header>

    <main>
      <section class="contact-card" aria-labelledby="contactHeading">
        <div class="contact-info">
          <h2 id="contactHeading">Contact Us</h2>
          <p>Have questions or need help with your pet's care? Reach out anytime — we’re happy to help.</p>

          <p><strong>Owner / Point of Contact:</strong> YOUR NAME</p>
          <p><strong>Phone:</strong>
            <a href="tel:+919285246127">+91-9285246127</a>
          </p>
          <p><strong>Email:</strong>
            <a href="mailto:petvantage11@gmail.com">petvantage11@gmail.com</a>
          </p>
          <p><strong>Address:</strong> YOUR ADDRESS, City, State</p>
        </div>

        <div class="contact-actions" aria-hidden="false">
          <a class="btn btn-primary" href="tel:+91XXXXXXXXXX">Call Now</a>
          <a class="btn btn-outline" href="mailto:youremail@example.com">Email Us</a>

          <!-- Simple contact form (static) - if you have server or form handler, set form action -->
          <form class="contact-form" action="#" method="post" onsubmit="alert('Replace action with your form handler.'); return false;">
            <input type="text" name="name" placeholder="Your name" required />
            <input type="email" name="email" placeholder="Your email" required />
            <textarea name="message" placeholder="Message about your pet (vaccination, appointment request...)" required></textarea>
            <button class="btn btn-primary" type="submit">Send Message</button>
          </form>
        </div>
      </section>

      <!-- Optional quick FAQ or hours -->
      <section class="contact-card" aria-labelledby="hoursHeading">
        <div>
          <h3 id="hoursHeading">Office / Support Hours</h3>
          <p>Mon–Sat: 9:00 AM – 6:00 PM<br>Sun: Closed (emergencies only)</p>
        </div>
      </section>
    </main>

    <footer>
      © <span id="year"></span> PetVantage — All rights reserved.
    </footer>
  </div>

  <script>
    // small script: current year
    document.getElementById('year').textContent = new Date().getFullYear();
  </script>
</body>
</html>