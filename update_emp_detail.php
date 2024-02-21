<?php
		//session_start();
		//$eml=$_SESSION['email'];
		include "conn.php";
if($_SERVER['REQUEST_METHOD']=="POST")
{

	$n=$_POST['t1'];
	$ad=$_POST['t2'];
	$mo=$_POST['t3'];
	$po=$_POST['t4'];
	$qly=$_POST['t5'];
	$sn=$_POST['t6'];
	$sm=$_POST['t7'];
	$s=$_POST['t8'];
		$addr=$_POST['t9'];
	$em=$_POST['eml'];

	$sql="update employee set ename='$n',adhar='$ad',mob='$mo',post='$po',qualification='$qly',salary_in='$sn',sal_mode='$sm',salary='$s',address='$addr' where email='$em'";
if(mysqli_query($con,$sql))
{
	header("location:update_emp.php?umsg=Employee Data Updated Successfully");
}
else {
	header("location:update_emp.php?umsg=Error  !!!");
}
	}


		
		
		?>
		
