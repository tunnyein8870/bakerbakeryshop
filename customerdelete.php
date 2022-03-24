<!DOCTYPE>
<html>
<head>
    <title> Vertical Menu </title>
    <meta name ="viewport" content ="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src ="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css files/productdelete.css">

</head>
<body>
  <div class='dashboard'>
    <div class="dashboard-nav">
        <header><a href="#!" class="menu-toggle">
            <i>
            <img src="images/menu.png" style="width:20px; height: 20px;"></i>
                <span>BAKER BAKERY</span></a>
        </header>

        <nav class="dashboard-nav-list">
            <a href="admindashboard.php" class="dashboard-nav-item">
                <i><img src="images/dashboard.png" style="width:30px; height:30px"></i>
                DASHBOARD </a>

            <a href="admin_review.php" class="dashboard-nav-item">
                <i><img src="images/review.png" style="width:30px; height:30px"></i>
                 REVIEWS </a>

            <a href="products.php" class="dashboard-nav-item">
                <i class="fas fa-cogs">
                    <img src="images/product.png" style="width:30px; height:30px">
                </i> PRODUCTS </a>

            <a href="customers.php" class="dashboard-nav-item active"><i class="fas fa-user">
                <img src="images/customer.png" style="width:30px; height:30px">
            </i> CUSTOMERS </a>

            <a href="order.php" class="dashboard-nav-item"><i class="fas fa-user">
                <img src="images/order.png" style="width:30px; height:30px">
            </i> ORDERS </a>

            <a href="admin.php" class="dashboard-nav-item"><i class="fas fa-user">
                <img src="images/admin.png" style="width:30px; height:30px">
            </i> ADMIN </a>

            <a href="admin_payment.php" class="dashboard-nav-item"><i class="fas fa-user">
                <img src="images/payment.png" style="width:30px; height:30px">
            </i> PAYMENT </a>

            <div class="nav-item-divider"></div>
            <a href="index.php" class="dashboard-nav-item">
            <i>
                <img src="images/logout.png" style="width:30px; height:30px">
            </i> LOGOUT </a>
        </nav>
    </div>

    <div class='dashboard-app'>
        <header class='dashboard-toolbar'>
            <a href="#" class="menu-toggle">
            <img src="images/menu.png" style="width:20px; height: 20px;"> <span style="font-size: 20px; color: black; padding-left: 50px;">Admin</span>
            </a>
        </header>
        <div class='dashboard-content'>
            <div class='container'>
                <div class='card'>
                    <div class='card-header'>
                        <h1>Admin Panel</h1>
                    </div>
                    <div class='card-body'>
                        <div class="card-body text-center">
                            <h5 class="card-title m-b-0">Customer Delete</h5>
                        </div>
                    <!-- search bar -->
                    <div class="col-md-4">
                        <div class="search"> 
                            <i class="fa fa-search">
                                <img src="images/search1.png" style="width:20px; height:20px; margin-top:10px; margin-left: 5px;">
                            </i> 
                        <form method="post" action="">
                            <input type="text" class="form-control" placeholder="Enter Name to Search..." name="prodName">
                            <button class="btn btn-primary" name="Search">Search</button> 
                        </form>
                        </div>
                    </div>
                <?php
                    if(isset($_POST["Search"])){
                        $an = $_POST["prodName"];
                        include 'connection.php';
                        $sql = "SELECT * From user where uname='$an'";

                        foreach ($dbconnection->query($sql) as $row){

                        echo "<form class='updateform' method='post'>";
                        echo "<div class='form-group'>";
                        echo "<label for='exampleInputEmail1'>User ID</label>";
                        echo "<input class='form-control' type='text' name='uid' value='".$row['uid']."'>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                        echo "<label for='exampleInputEmail1'>User Name</label>";
                        echo "<input class='form-control' type='text' name='uname' value='".$row['uname']."'>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                        echo "<label for='exampleInputEmail1'>User Email</label>";
                        echo "<input class='form-control' type='text' name='uemail' value='".$row['uemail']."' required>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                        echo "<label for='exampleInputEmail1'>User Password</label>";
                        echo "<input class='form-control' type='text' name='upassword' value='".$row['upassword']."' required>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                        echo "<label for='exampleInputEmail1'>User Phone No</label>";
                        echo "<input class='form-control' type='text' name='uphone' value='".$row['uphone']."'>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                        echo "<label for='exampleInputEmail1'>User City</label>";
                        echo "<input class='form-control' type='text' name='ucity' value='".$row['ucity']."'>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                        echo "<label for='exampleInputEmail1'>User Address</label>";
                        echo "<input class='form-control' type='text' name='uaddress' value='".$row['uaddress']."'>";
                        echo "</div>";
                        echo "<div class='text-center'>";
                        echo "<button class='btn btn-success btn-block' type='submit' name='Delete'>Delete</button>";
                        echo "</div>";
                        echo "</form>";
                        }
                    }
                ?>

                    </div>
                </div>
            </div>
        </div>
        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
              © 2022 Copyright:
              <a class="text-dark" href="https://mdbootstrap.com/">Designed and Developed by Group 6</a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>
</div>
<?php 
if(isset($_POST["Delete"])){
    include('connection.php');
    $aid=$_POST["uid"];
    $sql="DELETE from user Where uid=\"$aid\"";
    if($dbconnection->query($sql) === TRUE) {
        echo "<script>alert('Data Deleted Successfully.!')</script>";
      echo "<script>window.location = 'customers.php'</script>";
      } 
      else {
           echo "Error Deleting Data: " . $dbconnection->error;
      }
    
}
?>
<script type="text/javascript">
    const mobileScreen = window.matchMedia("(max-width: 990px )");
$(document).ready(function () {
    $(".dashboard-nav-dropdown-toggle").click(function () {
        $(this).closest(".dashboard-nav-dropdown")
            .toggleClass("show")
            .find(".dashboard-nav-dropdown")
            .removeClass("show");
        $(this).parent()
            .siblings()
            .removeClass("show");
    });
    $(".menu-toggle").click(function () {
        if (mobileScreen.matches) {
            $(".dashboard-nav").toggleClass("mobile-show");
        } else {
            $(".dashboard").toggleClass("dashboard-compact");
        }
    });
});
</script>
</body>
</html>