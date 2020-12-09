<?php
     if(isset($_POST['submit'])){
        session_start();
        $productno = $_SESSION['productno'];
        $productname = $_POST['productname'];
        $cartype = $_POST['cartype'];
        $branch = $_POST['branch'];
        $avail = $_POST['avail'];
        $rate = $_POST['rate'];
        $description = $_POST['description'];
        if($_POS['image']!=NULL)
            $image = $_POST['image'];
        else
            $image = '';
        
        
        $host = "localhost";
        $user="root";
        $password="";
        $dbname = "cardb";
        $conn = mysqli_connect($host,$user,$password,$dbname);

        $query = "UPDATE `product` SET (`productname`= '$productname',`cartype`= '$cartype',`branch`='$branch' ,`availability`='$avail',`rate`='$rate',`description`='$description',`images`='$image') WHERE `productno`==$productno";
        //echo $query;description
        $stmt = $conn->prepare($query);
        $stmt->execute();
    }
    $conn = null;
    exit;