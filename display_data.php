<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Home</title>
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


    <div class="button-container">
            <a class="product-btn"  href="products.php">Add Product</a>
    </div>
    
    <h1 style = "text-align: center" >Parent Table</h1>
    <!--************* Display the Parent Table *********** -->
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Product Name</th>
            <th>Sku Number</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Size</th>
            <th>Color</th>
            <th>Available</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM `products`";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                // Fetch the data from the databse
                while ($row = mysqli_fetch_assoc($result)) {
                    $id =  $row['id'];
                    $productName =  $row['productName'];
                    $skuNumber =  $row['skuNumber'];
                    $price =  $row['price'];
                    $quantity =  $row['quantity'];
                    $size =  $row['size'];
                    $color =  $row['color'];
                    $available =  $row['available'];

                    //print the data on the table
                    echo '
                        <tr>
                            <td data-lable="ID">' . $id . '</td>
                            <td data-lable="Product-Name">' . $productName . '</td>
                            <td data-lable="sku-Number">' . $skuNumber . '</td>
                            <td data-lable="Price">' . $price . '</td>
                            <td data-lable="Quantity">' . $quantity . '</td>
                            <td data-lable="Size">' . $size . '</td>
                            <td data-lable="Color">' . $color . '</td>
                            <td data-lable="Available">' . $available . '</td>
                            <td data-lable="Update"> 
                                <a href = "update.php?updateid=' . $id . '" class = "update-btn">Update</a>
            
                            </td>
                            <td data-lable="Delete">
                             <a href = "delete.php?delete=' . $id . '" class = "delete-btn">Delete</a></td>
                        </tr>
                        
                        ';
                }
            }
            ?>
        </tbody>
    </table>

    <br>
    <h1 style = "text-align: center">Child Table</h1>

    <!--************* Display the Child Table *********** -->
    <table class="table">
    <thead>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Price</th>
    </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM `items`";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                // Fetch the data from the databse
                while ($row = mysqli_fetch_assoc($result)) {
                    $product_id =  $row['product_id'];
                    $productName =  $row['productName'];
                    $price =  $row['price'];

                    //print the data on the table
                    echo '
                        <tr>
                            <td data-lable="Product-Id">' . $product_id . '</td>
                            <td data-lable="Product-Name">' . $productName . '</td>
                            <td data-lable="Price">' . $price . '</td>
                        </tr>
                        
                        ';
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>