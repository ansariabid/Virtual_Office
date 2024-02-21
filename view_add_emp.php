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
		<form action="" method='post' class='form-inline'><input type='search' name='emp' class='form-control' style='width:400px;' placeholder='Search by Employee Email Id'/><button class='btn btn-primary'>Search</button></form>
<div style='height:700px;width:600px;margin-top:40px;'>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$eml=$_POST['emp'];
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
echo ("<tr><td>Name</td><td>".$x['ename']."</td></tr><tr><td>Aadhar Id</td><td>".$x['adhar']."</td></tr><tr><td>Gender</td><td>".$x['gen']."</td></tr><tr><td>Email</td><td>".$x['email']."</td></tr><tr><td>Mobile</td><td>".$x['mob']."</td></tr>");

if($x['dob']=="" && $x['post']=="" && $x['qualification']=="" && $x['doj']=="" && $x['salary_in']==""  && $x['sal_mode']=="" && $x['salary']=="" && $x['address']=="") 
{
echo("<form action='add_emp_detail.php' method='post'><tr><td>Date Of Birth</td><td><input type='date' name='dob' class='form-control'/></td></tr>

<tr><td>Post/Designation</td><td><select name='post' class='form-control'/><option>Select Post/Designation</option><option>CEO</option><option>President</option><option>Vise-President</option><option>Manager</option><option>Assistant Manager</option><option>Accountant</option><option>Desk Employee</option><option>Helper </option><option>Peon</option><option>Watchman</option></select></td></tr>


<tr><td>Qualification</td><td><select name='qly' class='form-control'/><option>Select Qualification</option><option>High School</option><option>Intermediate</option><option>Diploma</option><option>B.A.</option><option>B.Com.</option><option>B.Sc.</option><option>BCA</option><option>BBA</option><option>B.tech</option><option>M.A.</option><option>M.Com.</option><option>MCA</option><option>M.tech.</option><option>M.Sc</option><option>Phd.</option></select></td></tr>




<tr><td>Date Of Joining</td><td><input type='date' name='doj' class='form-control'/></td></tr><tr><td>Salary In</td><td><select name='sal_in' class='form-control'/><option>Select Salary duration</option><option>Per Day</option><option>Per Month</option><option>Per Year</option></select></td></tr><tr><tr><td>Salary Mode</td><td><select name='sal_mode' class='form-control'/><option>Select Salary Mode</option><option>Cash On Hand</option><option>By Cheque</option><option>Pay Online</option></select></td></tr><tr><td>Salary In Rupees</td><td><input type='number' name='sal' class='form-control'/></td></tr><tr><td>Address</td><td><textarea name='addr' col='30' row='10' class='form-control'></textarea></td></tr><tr><td colspan='2' align='center'><button class='btn btn-primary' name='eml' value='".$x['email']."'>SUBMIT</button></td></tr></form>

");

}
else {
echo ("<tr><td>Date Of Birth</td><td>".$x['dob']."</td></tr><tr><td>Post/Designation</td><td>".$x['post']."</td></tr><tr><td>Qualification</td><td>".$x['qualification']."</td></tr><tr><td>Date Of Joining</td><td>".$x['doj']."</td></tr><tr><td>Salary in</td><td>".$x['salary_in']."</td></tr><tr><td>Salary mode</td><td>".$x['sal_mode']."</td></tr><tr><td>Salary</td><td>".$x['salary']."</td></tr><tr><td>Address</td><td>".$x['address']."</td></tr>");
	
	
}


	}
}}



?></table></div>


</div>
</div>

</div>
		
		
		
		


</body>
</html>
