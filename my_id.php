<html><head><title>Index</title>
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
		        <li><a href="emp_attendence">Attendence</a></li>		        
		      </ul>
	  </div><!-- /.navbar-collapse --> 

		  </div><!-- /.container-fluid -->
		</nav>
		<?php
		session_start();
		$eml=$_SESSION['email'];
		
		
		?>
		
		
<div class='container'>
<div class='row'>
<div class='col-lg-10'>
<div style='height:700px;width:600px;'>
<?php
include 'conn.php';
$sql="select * from employee where email='$eml'";
$data=mysqli_query($con,$sql);
if(mysqli_num_rows($data)>0)
{
?>
<table class='table table-bordered'>
<?php	
	if($x=mysqli_fetch_assoc($data))
	{
echo ("<caption>My Id</caption><tr><td>Name</td><td>".$x['ename']."</td></tr><tr><td>Aadhar Id</td><td>".$x['adhar']."</td></tr><tr><td>Gender</td><td>".$x['gen']."</td></tr><tr><td>Email</td><td>".$x['email']."</td></tr><tr><td>Mobile</td><td>".$x['mob']."</td></tr>");
echo ("<tr><td>Date Of Birth</td><td>".$x['dob']."</td></tr><tr><td>Post/Designation</td><td>".$x['post']."</td></tr><tr><td>Qualification</td><td>".$x['qualification']."</td></tr><tr><td>Date Of Joining</td><td>".$x['doj']."</td></tr><tr><td>Salary in</td><td>".$x['salary_in']."</td></tr><tr><td>Salary mode</td><td>".$x['sal_mode']."</td></tr><tr><td>Salary</td><td>".$x['salary']."</td></tr><tr><td>Address</td><td>".$x['address']."</td></tr>");
	
	
}


	}




?></table></div>


</div>
</div>

</div>
		
		
		
		


</body>
</html>
