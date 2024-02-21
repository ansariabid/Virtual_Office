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
<div class='col-lg-12'>
		<form action="" method='post' class='form-inline'><select name='post' class='form-control'/><option>Select Post/Designation</option><option>CEO</option><option>President</option><option>Vise-President</option><option>Manager</option><option>Assistant Manager</option><option>Accountant</option><option>Desk Employee</option><option>Helper </option><option>Peon</option><option>Watchman</option></select><button class='btn btn-primary'>List By Post</button></form>
		
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$po=$_POST['post'];

include 'conn.php';
$sql="select * from employee where post='$po'";
$data=mysqli_query($con,$sql);
if(mysqli_num_rows($data)>0)
{


	echo ("<div style='height:700px;width:1000px;margin-top:40px;'><table class='table-bordered' style='text-align:center'>
	<tr style='height:50px;text-align:center;background-color:lightgray;'><td>Employee Name</td><td>Email</td><td>Mobile</td><td>Aadhar id</td><td>DOB</td><td>Gender</td><td>Post</td><td>Salary </td><td>Address</td><td colspan='2'>Action</td></tr>
	");
	
	while($x=mysqli_fetch_assoc($data))
	{
	echo ("<tr><td>".$x['ename']."</td><td>".$x['email']."</td><td>".$x['mob']."</td><td>".$x['adhar']."</td><td>".$x['dob']."</td><td>".$x['gen']."</td><td>".$x['post']."</td><td>".$x['salary']."</td><td>".$x['address']."</td><td><form action='update.php'><button type='submit'class='btn btn-primary' name='t2' value=".$x['email'].">UPDATE</button></form></td><td><form action='delete.php'><button type='submit' class='btn btn-danger' style='display:inline;' name='t1'value=".$x['email'].">DELETE</button></form></td></tr>")	;
	}
	echo "</table><span style='color:blue;font-size:25px;padding-left:500px;'>";
}}?>
</table></div>

<div style='height:700px;width:1000px;margin-top:40px;'>
<?php
include 'conn.php';
$sql="select * from employee";
$data=mysqli_query($con,$sql);
if(mysqli_num_rows($data)>0)
{


	echo ("<table class='table-bordered' style='text-align:center' style='width:1200px;'>
	<tr style='height:50px;text-align:center;background-color:lightgray;'><td>Employee Name</td><td>Email</td><td>Mobile</td><td>Aadhar id</td><td>DOB</td><td>Gender</td><td>Post</td><td>Salary </td><td>Address</td><td colspan='2'>Action</td></tr>
	");
	
	while($x=mysqli_fetch_assoc($data))
	{
	echo ("<tr><td>".$x['ename']."</td><td>".$x['email']."</td><td>".$x['mob']."</td><td>".$x['adhar']."</td><td>".$x['dob']."</td><td>".$x['gen']."</td><td>".$x['post']."</td><td>".$x['salary']."</td><td>".$x['address']."</td><td><form action='update_emp.php' method='post'><button type='submit'class='btn btn-primary' name='t2' value='".$x['email']."'>UPDATE</button></form></td><td><form action='delete_emp.php' method='post'><button type='submit' class='btn btn-danger' style='display:inline;' name='t1' value='".$x['email']."'>DELETE</button></form></td></tr>")	;
	}
	echo "</table><span style='color:blue;font-size:25px;padding-left:500px;'>";
}?>
</table></div>


</div>
</div>

</div>
		
		
		
		


</body>
</html>
