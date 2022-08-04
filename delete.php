<?php

    include "connect.php";
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];

        // ***********DELETE QUERY**********
        $sql = "DELETE FROM `products` WHERE id = $id";
        $result = mysqli_query($conn, $sql);

        if(!$conn){
            die(mysqli_error($conn));
        }
        else{
            // echo "Delete Sucessfully";
            header("location:display_data.php");
        }
    }



?>