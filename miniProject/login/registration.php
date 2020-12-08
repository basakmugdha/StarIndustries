<?php

session_start();
header('location: login.php');
$con=mysqli_connect('localhost','root','','cardb');

mysqli_select_db($con,'registration');

$name=$_POST['user'];
$pass=$_POST['password'];

$s="select * from registration where name = '$name' ";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num >0){

	echo "Already registered";
}
	else{

		$reg="insert into registration(name,password) values ('$name','$pass')";
		mysqli_query($con,$reg);
		echo "Registration Successful!";	
}


?>