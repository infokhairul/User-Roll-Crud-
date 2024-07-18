<?php 

include('connection.php');

$uname = $_POST['uname'];
$upwd = $_POST['upwd'];
$role = $_POST['role'];


	date_default_timezone_set('Asia/Dhaka');
	
	$sql=" UPDATE users SET uname='$uname',upwd='$upwd',role='$role',added_date='".date('Y-m-d h:i:s')."'";
	
	$result=mysqli_query($conn,$sql);
	
	if($result)
	{
		header('location:dashboard.php');
	}
	else 
	{
		  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	


?>