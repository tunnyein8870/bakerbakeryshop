<!DOCTYPE html>
<html lang="en">
<head>
  <title>Baker Bakery Sign-Up Page</title>
  <link rel="stylesheet" type="text/css" href="css files/sign_up.css">
  <link rel="stylesheet" type="text/css" href="css files/sign_up.css">
  <link rel="stylesheet" type="text/css" href="css files/style.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<!-- navigation bar -->
<body>
<header id="header">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand"><i>Baker Bakery</i></a>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php#about">About us</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="shop.html">Shop<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="shop.php#toast">Toasts</a></li>
                <li><a href="shop.php#bread">Bread</a></li>
                <li><a href="shop.php#pastries">Pastries</a></li>
                <li><a href="shop.php#desserts">Desserts</a></li>
            </ul>
        </li>
        <li><a href="index.php#contact">Contact us</a></li>
        <li><a href="review.php">Review</a></li>
        <li><a href="sign_in.php">Sign-in</a></li>
        <li><a href="search.php">
              <img src="images/search.png" alt="search" style=" width:20px; height: 20px">
        </a></li>
        <li><a href="cart.php">
              <img src="images/cart.png" alt="search" style=" width:20px; height: 20px">
        </a></li>
        <?php 
        session_start();
          echo "<li><a href=''></a></li>";
    
          if (isset($_SESSION['uname'])){
            $uname = $_SESSION['uname'];
            echo "
              <li><a href='' data-toogle='tooltip' title=$uname>
                <img src='images/user.png' alt='search' style='width:30px; height: 30px'>
              </a></li>

              <li class='dropdown'>
                <a class='dropdown-toggle' data-toggle='dropdown' href='#'> $uname
                <span class='caret'></span></a>
                  <ul class='dropdown-menu'>
                    <li><a href='#'>Profile</a></li>
                    <li><a href='logout.php'>Logout</a></li>
                  </ul>
            ";
          }
          
        ?>
    </ul>
  </div>
</nav>
</header>
</body>
