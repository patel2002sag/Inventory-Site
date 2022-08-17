<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Contact Us</title>
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


    <!-- *************PRODUCT FORM***************** -->
    <div style="left: 250px" ; class="home_content">
        <div class="form">
            <form method="POST">
                <h2>Customers Are Our Priority</h2>
                <div class="form-element">
                    <label for="fname">First Name*</label>
                    <input type="text" id="first-name" name="firstName" placeholder="Your First Name...">
                </div>
                <div class="form-element">
                    <label for="sku-number">Last Name*</label>
                    <input type="text" id="last-name" name="lastName" placeholder="Your Last Name...">
                </div>
                <div class="form-element">
                    <label for="price">Phone Number*</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter Phone...">
                </div>
                <div class="form-element">
                    <label for="quantity">Email*</label>
                    <input type="email" id="email" name="email" placeholder="Enter Email...">
                </div>
                <div class="form-element">
                    <button type="submit" class="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>