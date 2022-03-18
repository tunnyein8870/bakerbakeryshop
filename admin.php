<!DOCTYPE>
<html>
<head>
    <title> Vertical Menu </title>
    <meta name ="viewport" content ="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src ="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css files/admindashboard.css">

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

            <a href="customers.php" class="dashboard-nav-item "><i class="fas fa-user">
                <img src="images/customer.png" style="width:30px; height:30px">
            </i> CUSTOMERS </a>

            <a href="order.php" class="dashboard-nav-item"><i class="fas fa-user">
                <img src="images/order.png" style="width:30px; height:30px">
            </i> ORDERS </a>

            <a href="admin.php" class="dashboard-nav-item active"><i class="fas fa-user">
                <img src="images/admin.png" style="width:30px; height:30px">
            </i> ADMIN </a>

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
                            <h5 class="card-title m-b-0">View Admin List</h5>
                        </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone no</th>
                                <th scope="col">City</th>
                                <th scope="col">Address</th>
                                <th scope="col">Password</th>
                            </tr>
                        </thead>
                        <tbody class="customtable">
                            <?php
                        $counter=1;
                        include "connection.php";
                        $viewquery = "SELECT * from admin";
                        foreach ($dbconnection->query($viewquery) as $row) {
                            $name = $row['aname'];
                            $email = $row['aemail'];
                            $address = $row['a_address'];
                            $phone = $row['aphone_no'];
                            $pass = $row['apassword'];
                            $cpass = $row['aconfirm_pass'];

                            echo"<tr>";
                            echo"<td> $name </td>";
                            echo"<td> $email </td>";
                            echo"<td> $phone </td>";
                            echo"<td> $address </td>";
                            echo"<td> $pass </td>";
                            echo"<td> $cpass </td>";
                            echo" </tr>";
                        }
                        ?>
                                                              
                        </tbody>
                    </table>
                </div>
                        <button class="btn"  data-title="Modify" data-toggle="modal" data-target="#modify" onclick="location.href='adminupdate.php';"> MODIFY</button>
                        <button class="btn "  data-title="Delete" data-toggle="modal" data-target="#delete" onclick="location.href='admindelete.php';"> DELETE</button>
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