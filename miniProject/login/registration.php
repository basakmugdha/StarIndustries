<?php

session_start();
header('location: login.php');
$con=mysqli_connect('localhost','root','','carsdb');

mysqli_select_db($con,'employees');

$username=$_POST['user'];
$pass=$_POST['password'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$branchID=$_POST['branchID'];
$managerID=$_POST['managerID'];

$s="select * from `employees` where username = '$username' ";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num >0){

	echo "Already registered";
}
	else{

		$reg="insert into `employees`(`username`,`password`,`email`,`phone`,`branch_id`,`managed_by`) values ('$username','$pass','$email','$phone','$branchID','$managerID')";
		mysqli_query($con,$reg);
		echo "Registration Successful!";	
}


?>