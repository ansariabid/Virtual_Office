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
		
		
		
<div class='container'>
<div class='row'>
<div class='col-lg-10'>
<div style='height:700px;width:600px;'>

<?php
		session_start();
		$eml=$_SESSION['email'];
	
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$month=$_POST['month'];
	
include 'conn.php';
$sql="select * from salary where email='$eml' and month='$month'";
$data=mysqli_query($con,$sql);
if(mysqli_num_rows($data)>0)
{
?>
<table class='table table-bordered' style='width:1000px;text-align:center;'>
<?php	
	if($x=mysqli_fetch_assoc($data))
	{
	$n=$x['name'];$em=$x['email'];	$ad=$x['adhar'];$mo=$x['mob'];$po=$x['post'];$n=$x['name'];$s=$x['sal'];
	$da=$x['da'];$oc=$x['oc'];$ca=$x['ca'];$coa=$x['coa'];$hra=$x['hra'];$ma=$x['ma'];$ba=$x['ba'];$gst=$x['gst'];
	$date=$x['date'];$mon=$x['month'];$ss=$x['status'];
$net=$s+$da+$oc+$ca+$coa+$hra+$ma+$ba;
$net1=$net-$gst;
echo ("<caption>My Salary Slip </caption><tr><td>Name</td><td>".$n."</td><td>Aadhar Id</td><td>".$ad."</td></tr><tr><td>Email</td><td>".$em."</td><td>Mobile</td><td>".$mo."</td></tr>
<tr><td>Post/Designation</td><td>".$po."</td><td>Basic Salary</td><td>".$s."</td></tr>
<tr><td>Dearness Allowance</td><td>".$da."</td><td>Overtime Allowance</td><td>".$oc."</td></tr>
<tr><td>Cash Allowance</td><td>".$ca."</td><td>Conveyance Allowance</td><td>".$coa."</td></tr>
<tr><td>House Rent Allowance</td><td>".$hra."</td><td>Medical Allowance</td><td>".$ma."</td></tr>
<tr><td>Bonus Amount</td><td>".$ba."</td><td>GST on Income</td><td>".$gst."</td></tr>
<tr><td>Date</td><td>".$date."</td><td>Month</td><td>".$mon."</td></tr>
<tr><td>Net Salary</td><td>".$net1."</td><td>Salary Status</td><td>".$ss."</td></tr>");
	}}}
?>

<tr><td colspan='2' style='text-align:center;'><button class='btn btn-primary' name='eml' onclick="myFunction()">Print </button></td></tr><script>
function myFunction() {
  window.print();
}
</script>

</table>
<form action="" method='post' class='form-inline'><select name='month' class='form-control' style='width:200px;'><option>January</option><option>Febraury</option><option>March</option><option>April</option><option>May</option><option>June</option><option>July</option><option>August</option><option>September</option><option>October</option><option>November</option><option>December</option></select></caption><button type='submit'class='btn btn-primary'>Submit</button></form>



</div>
</div>

</div>
</div>		
		
		
		


</body>
</html>
