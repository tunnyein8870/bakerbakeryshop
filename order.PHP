<!DOCTYPE>
<html>
<head>
    <title> Vertical Menu </title>
    <meta name ="viewport" content ="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src ="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css files/order.css">
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

            <a href="customers.php" class="dashboard-nav-item"><i class="fas fa-user">
                <img src="images/customer.png" style="width:30px; height:30px">
            </i> CUSTOMERS </a>

            <a href="order.php" class="dashboard-nav-item active"><i class="fas fa-user">
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
                            <h5 class="card-title m-b-0">View Customer Order List</h5>
                        </div>

                    <!-- search bar -->
                        <!-- <div class="col-md-4">
                            <div class="search"> 
                                <i class="fa fa-search">
                                    <img src="images/search1.png" style="width:20px; height:20px; margin-top:10px; margin-left: 5px;">
                                </i> 
                                <input type="text" class="form-control" placeholder="Enter Name to Search...">
                                <button class="btn btn-primary">Search</button> 
                            </div>
                        </div> -->

                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Product</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">O-Date</th>
                                <th scope="col">Total</th>
                                <th scope="col">Order Status</th>
                            </tr>
                        </thead>
                        <tbody class="customtable">
                        <?php
                            $counter = 1;
                            include "connection.php";
                            $viewquery = "SELECT * from orders";
                            foreach ($dbconnection->query($viewquery) as $row){
                                $oid = $row['oid'];
                                $odate = $row['odate'];
                                $uid = $row['uid'];
                                //echo "$oid";
                                $viewquery1 = "SELECT * from user where uid='$uid'";
                                foreach ($dbconnection->query($viewquery1) as $row){
                                    $uname = $row['uname'];
                                    $uphone = $row['uphone'];
                                    $uaddr = $row['uaddress'];
                                    
                                    $viewquery2 = "SELECT * from order_line where oid='$oid'";
                                    foreach ($dbconnection->query($viewquery2) as $row){
                                        $qty = $row['qty'];
                                        $pid = $row['pid'];

                                        $viewquery3 = "SELECT * from product where pid='$pid'";
                                        foreach ($dbconnection->query($viewquery3) as $row){
                                        $pname = $row['pname'];


                                            $viewquery4 = "SELECT * from payment where oid='$oid'";
                                            foreach ($dbconnection->query($viewquery4) as $row){
                                            $total = $row['amount'];
                                            $status = $row['remark'];

                                            echo"<tr>";
                                            echo"<td> $oid </td>";
                                            echo"<td> $uname </td>";
                                            echo"<td> $pname </td>";
                                            echo"<td> $qty </td>";
                                            echo"<td> $uphone </td>";
                                            echo"<td> $uaddr </td>";
                                            echo"<td> $odate </td>";
                                            echo"<td> $total </td>";
                                            echo"<td> $status </td>";
                                            echo" </tr>";                                                
                                            }
                                        }
                                    
                                    }
                                }


                                
                            }
                        ?>
                                                              
                        </tbody>
                    </table>
                </div>
                        <!-- <button class="btn"  data-title="Modify" data-toggle="modal" data-target="#modify" onclick="location.href='ordermod.php';"> MODIFY</button>
                        <button class="btn "  data-title="Delete" data-toggle="modal" data-target="#delete" onclick="location.href='orderdelete.php';"> DELETE</button> -->
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

// search bar javascript

</script>
</body>
</html>