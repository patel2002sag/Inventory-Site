<?php

// *************INCLUDE THE CONNECTION FILE***********
include "connect.php";
$id = $_GET['updateid'];

//Select the data to be displayed as placeholders
$sql = "SELECT * FROM `products` WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$productName = $row['productName'];
$skuNumber = $row['skuNumber'];
$price = $row['price'];
$quantity = $row['quantity'];
$size = $row['size'];
$color = $row['color'];
$available = $row['available'];

if (isset($_POST['submit'])) {
    $productName = $_POST['productName'];
    $skuNumber = $_POST['skuNumber'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $size = $_POST['size'];
    $color = $_POST['color'];
    $available = $_POST['available'];


    // ***************SQL QUERY FOR INSERTING ***********


    $sql = "UPDATE `products` SET id=$id, productName = '$productName', skuNumber = '$skuNumber', price = '$price', quantity = '$quantity', size = '$size', color = '$color', available = '$available' WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        // echo "Updated Sucessfully";
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
                    <input type="text" id="product-name" name="productName" placeholder="Enter Name" value=<?php echo $productName ?>>
                </div>
                <div class="form-element">
                    <label for="sku-number">SKU Number*</label>
                    <input type="text" id="sku-number" name="skuNumber" placeholder="Enter SKU" value=<?php echo $skuNumber ?>>
                </div>
                <div class="form-element">
                    <label for="price">Price*</label>
                    <input type="text" id="price" name="price" placeholder="Enter Price" value=<?php echo $price ?>>
                </div>
                <div class="form-element">
                    <label for="quantity">Quantity*</label>
                    <input type="text" id="quantity" name="quantity" placeholder="Enter Qty" value=<?php echo $quantity ?>>
                </div>
                <div class="form-element">
                    <label for="size">Size*</label>
                    <input type="text" id="size" name="size" placeholder="Enter Size" value=<?php echo $size ?>>
                </div>
                <div class="form-element">
                    <label for="color">Color</label>
                    <input type="text" id="color" name="color" placeholder="Enter Color" value=<?php echo $color ?>>
                </div>
                <div class="form-element">
                    <label for="availability">Available</label>
                    <input type="text" id="available" name="available" placeholder="Enter Availability" value=<?php echo $available ?>>
                </div>
                <div class="form-element">
                    <button type="submit" class="submit" name="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>