<html>
    <head>
        <title> Vertical Menu </title>
        <meta name ="viewport" content ="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src ="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel=stylesheet href=admin.css>
    </head>

    <body>

    <div id="mainbd">

        <div id="nevigabar">
            <div id="nevigabar1">
                <p>Barker Bakery</p>
            </div>
            <div id="nevigabar2">
                <nav class="navbar navbar-inverse">
                    <div id="container-fluid">
                    <nav class ="navbar bg-dark">
                            <ul class ="nav navbar-nav">
                            <li class ="nav-item">
                            <a class ="nav-link" href="admindashboard.php"> DASHBOARD </a>
                            </li>
                            <li class ="nav-item">
                            <a class ="nav-link" href="admin_review.php"> REVIEWS </a>
                            </li>
                            <li class ="nav-item">
                            <a class ="nav-link" href="products.php"> PRODUCTS </a>
                            </li>
                            <li class ="nav-item">
                            <a class ="nav-link" href="customers.php"> CUSTOMERS </a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link" href="order.php"> ORDER </a>
                            </li> 
                            <li class ="nav-item">
                                <a class ="nav-link" href="admin.php"> ADMIN </a>
                            </li>
                            </ul>
                        </nav>
                    </div>
                </nav>
            </div>
            <div id="nevigabar3">
                <div id="nevigabar31"></div>
                <div id="nevigabar32"></div>
                <div id="nevigabar33"><button id="logout" onclick="location.href='index.php';">LOGOUT</button></div>
            </div>
            <!-- navigation bar -->
    
        </div>

        <div id="indexbdy">
            <div id="indexbdy1">
                <h2>Admin Panel</h1>
            </div>
            <div id="indexbdy2">
                <div id="admname">
                    <p>Team 6 Admins</p>
                </div>
                <div id="imgrou">
                    
                </div>
            </div>
            <div id="indexbdy3">

                <div id="indtit">
                    <p>Customer List</p>
                </div>
                <div id="search">
                <form method="post" action="">
			        Enter Customer name to delete:
			        <input type="text" name="admName" size="20">
			        <input type="submit" name="Search" value="Search">
			    </form>
                    
                </div>
                <div id="modify">
                    <button id="modifybut" onclick="location.href='adminmod.php';">MODIFY</button>
                </div>
                <div id="fortab">
                <?php
                    if(isset($_POST["Search"])){
                        $an = $_POST["admName"];
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
                            echo "<div class='form-group'>";
                            echo "<button class='btn btn-success btn-block' type='submit' name='Delete'>Delete</button>";
                            echo "</div>";
                            echo "</form>";
                        }
                    }
                ?>
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


    </body>

</html>
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