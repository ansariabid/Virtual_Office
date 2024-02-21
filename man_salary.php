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
<table class='table table-bordered' style='width:1000px;text-align:center;'>
<?php	
	if($x=mysqli_fetch_assoc($data))
	{

echo ("<caption>Generate Salary Slip </caption><form action='add_salary.php' method='post'><tr><td>Name</td><td><input type='text' name='n' class='form-control' value=".$x['ename']."></td><td>Aadhar Id</td><td><input type='text' name='ad' class='form-control' value=".$x['adhar']."></td></tr><tr><td>Email</td><td><input type='text' name='em' class='form-control' value=".$x['email']."></td><td>Mobile</td><td><input type='text' name='mo' class='form-control' value=".$x['mob']."></td></tr>");
$sal=$x['salary'];
$tax=($sal*18)/100;

echo ("<tr><td>Post/Designation</td><td><input type='text' name='po' class='form-control' value='".$x['post']."' /></td><td>Salary in</td><td><input type='text' name='salin' class='form-control'value='".$x['salary_in']."'/></td></tr><tr><td>Salary mode</td><td><input type='text' name='salmode' class='form-control'value='".$x['sal_mode']."'/></td><td>Basic Salary</td><td><input type='text' name='sal' class='form-control'value=".$x['salary']."></td></tr>
<tr><td>Dearness Allowance</td><td><input type='text' name='da' class='form-control'></td><td>Overtime Allowance</td><td><input type='text' name='oa' class='form-control'></td></tr>
<tr><td>Cash Allowance</td><td><input type='text' name='ca' class='form-control'></td><td>Conveyance Allowance</td><td><input type='text' name='coa' class='form-control'></td></tr>
<tr><td>House Rent Allowance</td><td><input type='text' name='ra' class='form-control'></td><td>Medical Allowance</td><td><input type='text' name='ma' class='form-control'></td></tr>
<tr><td>Bonus Amount</td><td><input type='text' name='ba' class='form-control'></td><td>GST on Income</td><td><input type='text' name='gst' class='form-control'value=".$tax."></td></tr>
<tr><td>Date</td><td><input type='date' name='date' class='form-control'></td><td>Month</td><td><select name='month' class='form-control'><option>January</option><option>Febraury</option><option>March</option><option>April</option><option>May</option><option>June</option><option>July</option><option>August</option><option>September</option><option>October</option><option>November</option><option>December</option></select></td></tr>
<tr><td>Salary Status</td><td><input type='radio' name='sal_status' value='paid'>Paid&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='radio' name='sal_status' value='unpaid'>Unpaid</td><td colspan='2'><button class='btn btn-primary'>Submit</button></td></tr></form>");
	
	



}}}
?></table></div>


</div>
</div>

</div>
		
		
		
		


</body>
</html>
