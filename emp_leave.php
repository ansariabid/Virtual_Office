<html><head><title>Employee leave</title>
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
$lf=$_POST['lf'];
$lt=$_POST['lt'];
$rsn=$_POST['reason'];	
$em=$_POST['eml']; 
	$st="apply";	

include 'conn.php';
			$sql1="insert into empleave(email,lf,lt,rsn,status) values('$em','$lf','$lt','$rsn','$st')";
			if(mysqli_query($con,$sql1))
			{
				header("location:emp_leave.php?msg=My Leave Application Successfully Sent");
				
			}else{
				header("location:emp_leave.php?msg=error");}
			
		}
?>		
		
<div class='container'>
<div class='row'>
<div class='col-lg-10'>
<div style='height:700px;width:600px;'><form action="" method='post'>
<table class='table table-bordered'><caption>Apply For Leave</caption>
<tr><td>Leave From Date</td><td><input type='date' name='lf' class='form-control'/></td></tr>
<tr><td>Leave Till Date</td><td><input type='date' name='lt' class='form-control'/></td></tr>
<tr><td>Reason For Leave</td><td><textarea class='form-control' name='reason'></textarea></td></tr>
<tr><td colspan='2' style='text-align:center;'><button class='btn btn-primary' name='eml' value='<?php echo"$eml"; ?>'/>Apply</button></td></tr>
</table></form>

<div style='height:700px;width:1000px;margin-top:40px;'><table class='table-bordered' style='text-align:center;width:1000px;'>
	<tr style='height:30px;text-align:center;background-color:lightgray;'><td>leave From</td><td>Leave Till</td><td>Reason</td><td>Status </td></tr>

		
<?php
include'conn.php';
$sql="select * from empleave where email='$eml'";
$data=mysqli_query($con,$sql);
if(mysqli_num_rows($data)>0)
{

	while($x=mysqli_fetch_assoc($data))
	{
	echo ("<tr><td>".$x['lf']."</td><td>".$x['lt']."</td><td>".$x['rsn']."</td><td>".$x['status']."</td></tr>")	;
	}
	echo "</table><span style='color:blue;font-size:25px;padding-left:500px;'>";
}?>
</table></div>



</div>
</div>

</div>
</div>		
		
		
		


</body>
</html>
