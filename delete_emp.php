<?php
		//session_start();
		//$eml=$_SESSION['email'];
		include 'conn.php';
		
		if($_SERVER['REQUEST_METHOD']=="POST")
{
$id=$_POST['t1'];	
echo"$id";

			$sql="DELETE FROM employee WHERE email='$id'";
			if(mysqli_query($con,$sql))
			{
				header("location:view_all_emp.php?msg=Employee Deleted Successfully");
				
			}
			else{
				
				header("location:view_all_emp.php?msg=Error");
			}
		}
?>		

