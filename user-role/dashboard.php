<?php 
include('connection.php');

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Users List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
            <a class="icon-link" href="index.php">
            <img src="home.png" alt="hugenerd" width="30" height="30" class="rounded-circle"> 
            </a>
            <a href="dashboard.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
					
					<?php 
					$role=$_SESSION['user_role'];
					
					?>
					
					<?php if($role=='marketing')
					{
                      include('includes/digi-menu.php');
					} ?>
					
					
					<?php if($role=='hr')
					{
                   include('includes/hr-menu.php');
					
					} ?>
					
					
					<?php if($role=='admin')
					{
                    include('includes/admin-menu.php');
					 } ?>
					
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="user.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1"><?php $role=$_SESSION['user_role']; echo $role; ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3">
        <h2>User List</h2> 
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Sr.No</th>
        <th>Username</th>
        <th>Password</th>
		 <th>Role</th>
		  <th>Edit</th>
		   <th>Delete</th>
      </tr>
    </thead>
    <tbody>
	
	<?php 
	
	$sql="select * from users";
	$result=mysqli_query($conn,$sql);
	
	$i=1;
	while($data=mysqli_fetch_array($result))
	{?>
      <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $data['uname'];?></td>
        <td><?php echo $data['upwd'];?></td>
		 <td><?php echo $data['role'];?></td>
        <td><a href="edit.php?id=<?php echo $data['id'];?>">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $data['id'];?>">Delete</a></td>
      </tr>

	<?php $i++; } ?>     

	 
    </tbody>
  </table>
        </div>
    </div>
</div>

</body>
</html>