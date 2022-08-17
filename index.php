<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <title>Home Page</title>
</head>
<body>
    <header>
        <!-- NavBar -->
        <nav class = "navbar">
            <div>
                <a href="index.php">
                    <img  class = "primary-icon" src= "relax_icon.png" alt="">
                </a>
            </div>
            <!-- Item List -->
            <ul class = "nav-list" id = "navi-list">
                <li class = "list-item">
                    <a href="display_data.php">Products</a>
                </li>
                <li class = "list-item">
                    <a href="customer.php">Contact</a>
                </li>
                <li class = "list-item">
                    <a href="#">About</a>
                </li>
            </ul>
            <!-- Hamburgeer menu icon -->
            <div class = "menu" id = "toggle-button">
                <div class = "menu-line"></div>
                <div class = "menu-line"></div>
                <div class = "menu-line"></div>
            </div>
        </nav>
    </header>
    

    <!-- Hero Image and its text -->
    <div class="hero-image">
        <div class="hero-text">
          <h1 class = "hero-title">Inventory Mangement for Growing Business!!</h1>
          <p style="font-size: 30px;">Let's grow together</p>
          <a class = "hero-button"onclick="promptMe()" href="display_data.php"><button>Add Now</button></a>
        </div>
    </div>

    <!-- Foooter -->
    <footer class = "footer-container">
        <div class = containter-1>
            <h2>Contact</h2>
            <p>Relax</p>
            <p>123 Random Address Street</p>
            <p>Chicago, IL 60016</p>
        </div>
        <div class = containter-2>
            <p>Tel 123-232-2323</p>
            <p>Email info@email.com</p>
            <p>Book a Teacher</p>
        </div>
        <div class = footer-email-form>
            <p class = "footer-text">Sign up for our newsletter</p>
            <input type = "email" placeholder="Enter your email here*" id = "footer-email">
            <input type = "submit" value = "Sign Up" id = "footer-button">
        </div>
    </footer>
</body>
</html>

<!-- Script for Toggling the menu -->
<script>
    function promptMe(){
    var userAdjective = prompt("What is your name?");
    alert ("Welcome to my website " + userAdjective + ".");

}
</script>