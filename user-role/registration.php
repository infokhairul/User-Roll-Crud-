<?php 

include('connection.php');

if(isset($_POST['submit']))
{
	date_default_timezone_set('Asia/Dhaka');
	
	$sql="insert into users (uname,upwd,role,added_date) values ('".$_POST['uname']."','".$_POST['upwd']."','".$_POST['role']."','".date('Y-m-d h:i:s')."')";
	
	$result=mysqli_query($conn,$sql);
	
	if($result)
	{
		header('location:index.php');
	}
	else 
	{
		  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">User Role System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>
        </li>

      </ul>
       <a href="http://localhost/user-role/login.php"><button class="btn btn-outline-primary">Login</button></a> 
       <a href="http://localhost/user-role/registration.php"><button class="btn btn-outline-success">Register</button></a> 
    </div>
  </div>
</nav>
  <h2>User Registration</h2>
  <form method="post">
    <div class="mb-3 mt-3">
      <label for="email">Username:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter username" name="uname">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="upwd">
    </div>
   
     <div class="mb-3">
      <label for="pwd">Role:</label>
      <select class="form-control" name="role">
	  <option>Select Role</option>
	  <option value="hr">HR</option>
	  <option value="marketing">Marketing</option>
    <option value="admin">Admin</option>
	  </select>
    </div>
   
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>