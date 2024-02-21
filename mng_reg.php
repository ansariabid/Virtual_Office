<?php
include "conn.php";
if($_SERVER['REQUEST_METHOD']=="POST")
{

	$fn=$_POST['fn'];
	$ln=$_POST['ln'];
	$ps=$_POST['pswd'];
	$cps=$_POST['cpswd'];
	$em=$_POST['em'];
	$mob=$_POST['mob'];
	$ques=$_POST['ques'];
	$ans=$_POST['ans'];
	
	$sql="insert into manager values('$fn','$ln','$ps','$cps','$em','$mob','$ques','$ans')";
if(mysqli_query($con,$sql))
{
	header("location:registration.php?umsg=Manager Registered Successfully");
}
else {
	header("location:Registration.php?umsg=Error  !!!");
}
	}



?>