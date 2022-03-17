<?php
if (!isset($_SESSION['uname'])){
  session_start();
}
include 'connection.php';
// error_reporting(0);
if(!isset($_SESSION['cart'])){
    $_SESSION['cart']=array();
}

$retrieveQuery = "Select * from product";
$stmt = $dbconnection->prepare($retrieveQuery);
$stmt->execute();
$resultSet = $stmt->get_result(); 
$data = $resultSet->fetch_all(MYSQLI_ASSOC);
if(isset($_POST['ac'])) {
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $flag = FALSE;
    $id = $_POST['id'];

   
    foreach ($_SESSION['cart'] as $k => $v) {
        if ($k == $id) {
            $flag = TRUE;
            $v += 1;
           
            $_SESSION['cart'][$k] = $v;
           
            break;
        }
    }

    if ($flag == FALSE) {
        $_SESSION['cart'][$id] = 1;
    }
    
  }
}
?>

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

        <?php
        if (!isset($_SESSION)){
          session_start(); 
        }
        if(!isset($_SESSION['uname'])) { 
          echo '<li><a href="sign_in.php">Sign-in</a></li>';
        }
        ?>

        <li><a href="search.php">
              <img src="images/search.png" alt="search" style=" width:20px; height: 20px">
        </a></li>

        <!-- add to cart start -->
        <li><a href="checkout.php"><img src="images/cart.png" alt="search" style=" width:20px; height: 20px"></a>
        <span style='color:white;'>
        <a>
              <div class="total">
             
               <?php 
                if(isset($_POST['ac']))
                {
                  if(!isset($_SESSION['uname'])){
                    echo "<script>alert('Please Login First!')</script>";
                    unset($_SESSION['cart']);
                  }
                  else{
                    print(array_sum($_SESSION['cart']));
                  }
                }
                else {
                    print "0";
                }
                ?></div>     
            </a>
        </span>  
        </li>
        <li>
         
            <!-- <form method="post">
            <p><button name="reset" class="reset" style="background-color: black; border-color: black; font-family: Times New Roman, Times, serif;">Empty Cart</button></p>
            </form> -->
        </li>
        <?php 
        // session_start();
        if (!isset($_SESSION)){
          session_start(); 
        }    
        if (isset($_SESSION['uname'])){
          $uname = $_SESSION['uname'];
            echo "
              <li><a href='' data-toogle='tooltip' title=$uname>
                <img src='images/user.png' style='width:20px; height: 20px'>
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
