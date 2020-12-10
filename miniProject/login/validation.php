<?php

session_start();
//header('location: login.php');
$con=mysqli_connect('localhost','root','','cardb');

mysqli_select_db($con,'employees');

$username=$_POST['user'];
$pass=$_POST['password'];

$s="select * from `employees` where `username` = '$username' && `password`='$pass'";
$result=mysqli_query($con,$s);

$s1="select `employee_id` from `employees` where `username` = '$username' && `password`='$pass'";
$result1=mysqli_query($con,$s1);

$s2="select * from `employees` where `managed_by`='$result1'";
$result2=mysqli_query($con,$s2);
$num2=mysqli_num_rows($result2);
if($num2 >0){
    //manager
    $_SESSION["manager"] = "y";
    }
    else{

       //staff
       $_SESSION["manager"] = "n";
   }


$num=mysqli_num_rows($result);

if($num >0){

  //header('location:../index.html');
  echo 'login sucessful';
}
    else{

       //header('location:login.php');
       echo 'login not sucessful';
   }


?>
