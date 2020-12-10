<?php
    $branchid = $_POST['branchid'];
    $product_name = $_POST['product_name'];
    $rate = $_POST['rate'];
    $avail = $_POST['avail'];
    $type = $_POST['type'];
    $description = $_POST['description'];
    
    $host = "localhost";
    $user="root";
    $password="";
    $dbname = "carsdb";
    $conn = mysqli_connect($host,$user,$password,$dbname);

    $query = "INSERT INTO `products` (`product_name`,`rate`,`availability`,`type`,`description`,`branch_id`) VALUES('$product_name','$rate','$avail','$type','$description','$branchid')";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $conn = null;
    exit;