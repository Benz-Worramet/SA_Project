<?php
    if(isset($_GET['controller'])&&isset($_GET['action']))
    {
        $controller = $_GET['controller'];
        $action = $_GET['action'];
    }
    else
    {
        $controller = 'pages';
        $action = 'home';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="?controller=pages&action=home">Innovare</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?controller=pages&action=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?controller=customer&action=index">Customer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?controller=product&action=index">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?controller=orders&action=index">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?controller=bill&action=index">Bill</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?controller=tracking&action=index">Tracking</a>
        </li>
      </ul>
    </div>
  </div>

</nav>
    <nav>

        <!-- <br>[<a href="?controller=pages&action=home">Home</a>]
        [<a href="?controller=customer&action=index"">Customer</a>]
        [<a href="?controller=product&action=index"">Product</a>]
        [<a href="?controller=orders&action=index"">Orders</a>]
        [<a href="?controller=bill&action=index"">Bill</a>]
        [<a href="?controller=tracking&action=index"">Tracking</a>] -->
        <br>
        <?php 
            require_once("routes.php"); 
        ?>
    </nav>
    
</body>
</html>

<style>
.navbar-nav > li{
    padding-left:10px;
    padding-right:10px;
}
</style>