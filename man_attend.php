<?php
		////session_start();
		//$eml=$_SESSION['email'];
		if($_SERVER['REQUEST_METHOD']=="POST")
{
$dt=$_POST['dtof'];	$rsn=$_POST['reason'];	$em=$_POST['eml'];	

include 'conn.php';
			$sql1="insert into attendence values('$em','$dt','$rsn')";
			if(mysqli_query($con,$sql1))
			{
				header("location:man_attendence.php?msg=My today's Attendence Successfully Sent");
				
			}
			else{
				
				header("location:man_attendence.php?msg=Error");
			}
		}
?>		
