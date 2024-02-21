<?php
include "conn.php";
if($_SERVER['REQUEST_METHOD']=="POST")
{

	$en=$_POST['ename'];
	$ad=$_POST['adhar'];
	$ps=$_POST['pswd'];
	$cps=$_POST['cpswd'];
	$gen=$_POST['gender'];
	$em=$_POST['email'];
	$mob=$_POST['mob'];
	$ques=$_POST['ques'];
	$ans=$_POST['ans'];
	
	$sql="insert into employee(ename,adhar,pswd,cpswd,gen,email,mob,ques,ans) values('$en','$ad','$ps','$cps','$gen','$em','$mob','$ques','$ans')";
if(mysqli_query($con,$sql))
{
	header("location:registration.php?umsg=Employee Registered Successfully");
}
else {
	header("location:Registration.php?umsg=Error  !!!");
}
	}



?>