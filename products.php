<?php

// *************INCLUDE THE CONNECTION FILE***********
include "connect.php";

if (isset($_POST['submit'])) {
    $productName = $_POST['productName'];
    $skuNumber = $_POST['skuNumber'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $size = $_POST['size'];
    $color = $_POST['color'];
    $available = $_POST['available'];


    // ***************SQL QUERY FOR INSERTING ***********


    $sql = "INSERT into `products` (productName, skuNumber, price, quantity, size, color, available) values('$productName', '$skuNumber', '$price', '$quantity', '$size', '$color', '$available')";
    $result = mysqli_query($conn, $sql);
    


    if ($result) {
        header('location:display_data.php');
    } else {
        die(mysqli_error($conn));
    }
}
// ********Fetch the Data From products and Insert into items********
$sql2 = "SELECT * FROM `products`";
$result2 = mysqli_query($conn, $sql2);
if (isset($_POST['submit']) && $result2) {
    // Fetch the data from the databse
    while ($row = mysqli_fetch_assoc($result2)) {
        $id =  $row['id'];
        $productName =  $row['productName'];
        $skuNumber =  $row['skuNumber'];
        $price =  $row['price'];
        $quantity =  $row['quantity'];
        $size =  $row['size'];
        $color =  $row['color'];
        $available =  $row['available'];

    }
    
   $insert_data = "INSERT into `items` (product_id, productName, price) values('$id', '$productName', '$price')";
   $result_data = mysqli_query($conn, $insert_data);
   if(!$result_data){
        die(mysqli_error($conn));
   }
}



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Product</title>
</head>

<body>

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

    <!-- *************PRODUCT FORM***************** -->
    <div style="left: 250px" ; class="home_content">
        <div class="form">
            <form method="POST">
                <h2>Add Product</h2>
                <div class="form-element">
                    <label for="product-name">Product Name*</label>
                    <input type="text" id="product-name" name="productName" placeholder="Enter Name">
                </div>
                <div class="form-element">
                    <label for="sku-number">SKU Number*</label>
                    <input type="text" id="sku-number" name="skuNumber" placeholder="Enter SKU">
                </div>
                <div class="form-element">
                    <label for="price">Price*</label>
                    <input type="text" id="price" name="price" placeholder="Enter Price">
                </div>
                <div class="form-element">
                    <label for="quantity">Quantity*</label>
                    <input type="text" id="quantity" name="quantity" placeholder="Enter Qty">
                </div>
                <div class="form-element">
                    <label for="size">Size*</label>
                    <input type="text" id="size" name="size" placeholder="Enter Size">
                </div>
                <div class="form-element">
                    <label for="color">Color</label>
                    <input type="text" id="color" name="color" placeholder="Enter Color">
                </div>
                <div class="form-element">
                    <label for="availability">Available</label>
                    <input type="text" id="available" name="available" placeholder="Enter Availability">
                </div>
                <div class="form-element">
                    <button type="submit" class="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>