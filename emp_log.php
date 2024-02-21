<?php 
include "conn.php";
session_start();
if ($_SERVER['REQUEST_METHOD']=='POST')
{
	$utype=$_POST['utype'];
	$email=$_POST['email'];
	$pswd=$_POST['pswd'];
	{
		$sql="select * from employee where email='$email'";
		$result=mysqli_query($con,$sql);
		if($row=mysqli_fetch_assoc($result))
		{
			$dbpswd=$row['pswd'];
			if ($pswd==$dbpswd)
			{
				$_SESSION['email']=$email;
				header("location:employee.php");
			}
		else {
			header("location:login.php?msg=Invalid Username or Password");
		}
}}}
	
?>