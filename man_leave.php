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
	
<div style='height:700px;width:1000px;margin-top:40px;'><table class='table-bordered' style='text-align:center;width:1000px;'>
	<tr style='height:50px;text-align:center;background-color:lightgray;'><td>Email</td><td>leave From</td><td>Leave Till</td><td>Reason</td><td>Status </td><td>Action</td></tr>

		
<?php
include'conn.php';
$sql="select * from empleave where status='apply'";
$data=mysqli_query($con,$sql);
if(mysqli_num_rows($data)>0)
{

	while($x=mysqli_fetch_assoc($data))
	{
	echo ("<tr><td>".$x['email']."</td><td>".$x['lf']."</td><td>".$x['lt']."</td><td>".$x['rsn']."</td><td>".$x['status']."</td><td><form action='approve_leave.php' method='post'><button type='submit'class='btn btn-primary' name='t2' value=".$x['email'].">Approve</button></form></td></tr>")	;
	}
	echo "</table><span style='color:blue;font-size:25px;padding-left:500px;'>";
}?>
</table></div>


</div>
</div>

</div>
		
		
		
		


</body>
</html>
