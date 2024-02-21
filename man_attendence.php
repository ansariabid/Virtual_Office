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
		        <li><a href="view_add_emp.php">Add</a></li>
		        <li><a href="view_all_emp.php">View</a></li>
		        <li><a href="logout.php">logout</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
			  
		        <li><a href="man_salary.php">Salary</a></li>
		        <li><a href="man_leave.php">Leave</a></li>
		        <li><a href="man_attendence.php">Attendence</a></li>		        
		      </ul>
		    </div><!-- /.navbar-collapse --> 

		  </div><!-- /.container-fluid -->
		</nav>
		
		
<div class='container'>
<div class='row'>
<div class='col-lg-10'>
		<form action="" method='post' class='form-inline'><input type='search' name='t2' class='form-control' style='width:400px;' placeholder='Search by Employee Email Id'/><button class='btn btn-primary'>Search</button></form>
<div style='height:700px;width:600px;margin-top:40px;'>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$eml=$_POST['t2'];
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

echo ("<tr><td>Name</td><td>".$x['ename']."</td></tr><tr><td>Aadhar Id</td><td>".$x['adhar']."</td></tr><tr><td>Email</td><td>".$x['email']."</td></tr><tr><td>Mobile</td><td>".$x['mob']."</td></tr>
<form action='man_attend.php' method='post'><tr><td>Date Time Enter in Office</td><td><input type='datetime-local' name='dtof' class='form-control'/></td></tr>

<tr><td>Reason If Late</td><td><textarea class='form-control' name='reason'></textarea></td></tr>
<tr><td colspan='2' style='text-align:center;'><button class='btn btn-primary' name='eml' value='".$x['email']."'/>Apply</button></td></tr></form>");	
	



}}}
?></table></div>


</div>
</div>

</div>
		
		
		
		


</body>
</html>
