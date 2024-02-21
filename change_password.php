<html><head><title>change password</title>
<link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-theme.min.css">
<link rel="stylesheet" href="font-awesome.min.css">
<link rel="stylesheet" href="hover-min.css">
  <script src="jquery.js"></script>
  <script src="bootstrap.min.js"></script>
  <link rel="stylesheet" href="ind.css">
<script src="ind.js"></script>
<style>  .navbar-brand-centered {
        position: absolute;
        left: 50%;
        display: block;
        width: 160px;
        text-align: center;
        background-color: #eee;
    }
    .navbar>.container .navbar-brand-centered, 
    .navbar>.container-fluid .navbar-brand-centered {
        margin-left: -80px;
    }
}</style>
</head>
<body style='font-family:Century Gothic'><div class="container-fluid">
  <nav class="navbar navbar-default" role="navigation">
          <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		     
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="navbar-brand-centered">
		      <ul class="nav navbar-nav">
		        <li><a href="change_password.php">Change Password</a></li>
		        <li><a href="logout.php">Logout</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
			  
		        <li><a href="emp_sal.php">Salary</a></li>
		        <li><a href="emp_leave.php">Leave</a></li>
		        <li><a href="emp_attendence.php">Attendence</a></li>		        
		      </ul>
	  </div><!-- /.navbar-collapse --> 

		  </div><!-- /.container-fluid -->
		</nav>
		<?php
		session_start();
		$eml=$_SESSION['email'];
	if($_SERVER['REQUEST_METHOD']=="POST")
{
$op=$_POST['op'];	$np=$_POST['np'];	$cp=$_POST['cp'];	

include 'conn.php';
$sql="select * from employee where email='$eml'";
$data=mysqli_query($con,$sql);
if(mysqli_num_rows($data)>0)
{
	if($x=mysqli_fetch_assoc($data))
	{
		$ps=$x['pswd'];
		if($ps==$op && $np==$cp){
			$sql1="update employee set pswd='$np',cpswd='$np' where email='$eml'";
			if(mysqli_query($con,$sql1))
			{
				header("location:change_password.php?msg=Password Changed Successfully");
				
			}
		}
}}}?>
		
	
		
		
<div class='container'>
<div class='row'>
<div class='col-lg-10'>
<div style='height:700px;width:600px;'><form action="" method='post'>
<table class='table table-bordered'><caption>Change Password</caption>
<tr><td>Old Password</td><td><input type='password' name='op' class='form-control'/></td></tr>
<tr><td>New Password</td><td><input type='password' name='np' class='form-control'/></td></tr>
<tr><td>Confirm Password</td><td><input type='password' name='cp' class='form-control'/></td></tr>
<tr><td colspan='2' style='text-align:center;'><button class='btn btn-primary'>Change</button></td></tr>
</table></form>


</div>
</div>

</div>
</div>		
		
		
		


</body>
</html>
