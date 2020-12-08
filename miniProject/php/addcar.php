<?php
    $productname = $_POST['productname'];
    $cartype = $_POST['cartype'];
    $branch = $_POST['branch'];
    $avail = $_POST['avail'];
    $rate = $_POST['rate'];
    $description = $_POST['description'];
    // if($_POS['image']!=NULL)
    //     $image = $_POST['image'];
    // else
    //     $image = '';
    
    
    $host = "localhost";
    $user="root";
    $password="";
    $dbname = "cardb";
    $conn = mysqli_connect($host,$user,$password,$dbname);

    // $query = "INSERT INTO `product` (`productname`,`cartype`,`branch`,`availability`,`rate`,`description`) VALUES('$productname','$cartype','$branch','$avail','$rate','$description','$image')";
    $query = "INSERT INTO `product` (`productname`,`cartype`,`branch`,`availability`,`rate`,`description`) VALUES('$productname','$cartype','$branch','$avail','$rate','$description')";
    //echo $query;description
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $conn = null;
    exit;