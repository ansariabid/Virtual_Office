<?php
		//session_start();
		//$eml=$_SESSION['email'];
		include "conn.php";
if($_SERVER['REQUEST_METHOD']=="POST")
{

	$e=$_POST['t2'];

	$sql="update empleave set status='Approved' where email='$e'";
if(mysqli_query($con,$sql))
{
	header("location:man_leave.php?umsg=Leave Application Approved Successfully");
}
else {
	header("location:man_leave.php?umsg=Error  !!!");
}
	}


		
		
		?>
		
