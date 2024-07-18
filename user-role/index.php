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

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/1.jpg" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="./img/3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!---->
<div class="container text-center" style="margin-top: 25px;">
  <div class="row">
    <div class="col">
    <div class="card mb-3">
       <div class="row g-0">
        <div class="col-md-4">
          <img src="./img/4.png" class="img-fluid rounded-start" style="margin-top: 25px; padding: 10px;">
        </div>
        <div class="col-md-8">
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card mb-3">
       <div class="row g-0">
        <div class="col-md-4">
          <img src="./img/5.png" class="img-fluid rounded-start" style="margin-top: 12px; padding: 10px;">
        </div>
        <div class="col-md-8">
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
<!---->
  
</div>


</div>

</body>
</html>
