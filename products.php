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