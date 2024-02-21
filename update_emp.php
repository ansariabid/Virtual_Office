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
echo ("<form action='update_emp_detail.php' method='post'><tr><td>Name</td><td><input type='text' class='form-control' name='t1' value='".$x['ename']."'></td></tr><tr><td>Aadhar Id</td><td><input type='number' class='form-control' name='t2' value='".$x['adhar']."'></td></tr><tr><td>Mobile</td><td><input type='number' name='t3' class='form-control'value='".$x['mob']."'></td></tr>");
echo("<tr><td>Post/Designation</td><td><select name='t4' class='form-control' value='".$x['post']."'/><option>".$x['post']."</option><option>CEO</option><option>President</option><option>Vise-President</option><option>Manager</option><option>Assistant Manager</option><option>Accountant</option><option>Desk Employee</option><option>Helper </option><option>Peon</option><option>Watchman</option></select></td></tr>


<tr><td>Qualification</td><td><select name='t5' class='form-control' value='".$x['qualification']."'/><option>".$x['qualification']."</option><option>High School</option><option>Intermediate</option><option>Diploma</option><option>B.A.</option><option>B.Com.</option><option>B.Sc.</option><option>BCA</option><option>BBA</option><option>B.tech</option><option>M.A.</option><option>M.Com.</option><option>MCA</option><option>M.tech.</option><option>M.Sc</option><option>Phd.</option></select></td></tr>




<tr><td>Salary In</td><td><select name='t6' value='".$x['salary_in']."' class='form-control'/><option>".$x['salary_in']."</option><option>Per Day</option><option>Per Month</option><option>Per Year</option></select></td></tr><tr><tr><td>Salary Mode</td><td><select name='t7' value=".$x['sal_mode']." class='form-control'/><option>".$x['sal_mode']."</option><option>Cash On Hand</option><option>By Cheque</option><option>Pay Online</option></select></td></tr><tr><td>Salary In Rupees</td><td><input type='number' value=".$x['salary']." name='t8' class='form-control'/></td></tr><tr><td>Address</td><td><textarea name='t9' col='30' row='10' class='form-control'>".$x['address']."</textarea></td></tr><tr><td colspan='2' align='center'><button class='btn btn-primary' name='eml' value='".$x['email']."'>SUBMIT</button></td></tr></form>

");


	}
}}



?></table></div>


</div>
</div>

</div>
		
		
		
		


</body>
</html>
