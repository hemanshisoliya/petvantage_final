 <header>
        <div class="logo">PetVantage 🐾</div>
        <nav>
            <ul>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <div>
            <?php echo $_SESSION["name"] ; ?>
            
        </div>
        <div class="user-icons">
            <span><a href="logout.php">Logout</a></span>
            <span>👤</span>
            <span>⚙️</span>
        </div>
    </header>