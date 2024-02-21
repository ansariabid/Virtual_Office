<?php
include 'conn.php';
$sql="select * from img";
$data=mysqli_query($con,$sql);
if(mysqli_num_rows($data)>0)
{

	while($x=mysqli_fetch_assoc($data))
	{
$im=$x['name'];

echo"<img src='upload/".$im."' height='100px' width='100px;'/>";
}}
?>