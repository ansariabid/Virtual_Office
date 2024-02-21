<?php
//session_start();
//unset($_SESSION['email']);
//session_destroy();
//header("location:/index.php"); //to redirect back to "index.php" after logging out
//exit();
session_start();
if (isset($_SESSION['email']))
{
    unset($_SESSION['email']);
}
header("location:login.php");
?>