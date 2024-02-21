<?php
include "conn.php";
if($_SERVER['REQUEST_METHOD']=="POST")
{

	$n=$_POST['name'];
	$e=$_POST['email'];
	$mo=$_POST['mob'];
	$msg=$_POST['msg'];
	
	$sql="insert into contact values('$n','$e','$mo','$msg')";
if(mysqli_query($con,$sql))
{
	header("location:contact.php?umsg=Your Message Sent Successfully");
}
else {
	header("location:contact.php?umsg=Error  !!!");
}
	}



?>