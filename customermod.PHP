<?php
    include ('connection.php');
    if(isset($_POST['insert']))
    {
        $signup_sql = "SELECT * FROM user";

        $signup_result = mysqli_query($dbconnection,$signup_sql);
        $flag = false;
            while ($row = mysqli_fetch_assoc($signup_result)){
                if($row['uemail'] == $_POST['uemail'])
                {
                    echo "<script>alert('Email Already Exists... Try Another Email!')</script>";
                    echo "<script>window.location = 'admin.php'</script>";
                    !$flag;
                }
                else
                {
                    $flag;
                }
            } // while end

            if(!$flag){ 
                    include('connection.php');
                    $uname = $_POST['uname'];
                    $uemail = $_POST['uemail'];
                    $upassword = $_POST['upassword'];
                    $uphone = $_POST['uphone'];
                    $ucity = $_POST['ucity'];
                    $uaddress = $_POST['uaddress'];
                   
                    $sql = "INSERT INTO user (uname,uemail,upassword,uphone,ucity,uaddress) VALUES ('$uname','$uemail','$upassword','$uphone','$ucity','$uaddress')";

                     if(mysqli_query($dbconnection,$sql)){
                        echo "<script>
                          alert('Successfully Insert')
                          </script>";   
                        echo "<script>window.location = 'customers.php'</script>";
                     } // check sql            
            }// flag end   
        }   
?>

<!DOCTYPE>
<html>
<head>
    <title> Vertical Menu </title>
    <meta name ="viewport" content ="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src ="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css files/productmod.css">

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
                    <h5 class="card-title m-b-0">Customer Modification</h5>
                </div>

                <form class="insertform" action="" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">User Name</label>
                        <input class="form-control" type="text" name="uname" placeholder="Enter Username">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">User Email</label>
                        <input class="form-control" type="text" name="uemail" placeholder="Enter User Email" required> 
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">User Password</label>
                        <input class="form-control" type="text" name="upassword" placeholder="Enter Password">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">User Phone No</label>
                        <input class="form-control" type="text" name="uphone" placeholder="Enter User Phone-No">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">User City</label>
                        <input class="form-control" type="text" name="ucity" placeholder="Enter User City">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">User Address</label>
                        <input class="form-control" type="text" name="uaddress" placeholder="Enter User Address">
                    </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-default " name="insert">INSERT</button>
                    <button type="submit" class="btn btn-default" name="update" onclick="location.href='customerupdate.php';">UPDATE</button>
                </div>
                </form>

                    </div>
                </div>
            </div>
        </div>
        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
              ?? 2022 Copyright:
              <a class="text-dark" href="https://mdbootstrap.com/">Designed and Developed by Group 6</a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>
</div>  
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