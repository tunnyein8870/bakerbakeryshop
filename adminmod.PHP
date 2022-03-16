<?php
    include ('connection.php');
    if(isset($_POST['insert']))
    {
        $signup_sql = "SELECT * FROM admin";

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
                if($_POST['upassword'] == $_POST['upassword-repeat']){
                    include('connection.php');
                    $uname = $_POST['uname'];
                    $uemail = $_POST['uemail'];
                    $upassword = $_POST['upassword'];
                    $ucpassword = $_POST['upassword-repeat'];
                    $uphone = $_POST['uphone'];
                    $uaddress = $_POST['uaddress'];
                   
                    $sql = "INSERT INTO admin (aname,aemail,a_address,aphone_no,apassword,aconfirm_pass) VALUES ('$uname','$uemail','$uaddress','$uphone','$upassword','$ucpassword')";

                     if(mysqli_query($dbconnection,$sql)){
                        echo "<script>
                          alert('Successfully Insert')
                          </script>";   
                        echo "<script>window.location = 'admin.php'</script>";
                     } // check sql            
                } // check password repreat 
                else{
                // check confirm password
                echo "<script>alert('Password does not match. Please Try Again!')</script>";
                
                }
            }// flag end   
        }   
?>

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
                    <p>Admin Modification</p>
                </div>
                <div id="search">
                </div>
                <div id="modify">
                   
                </div>
                <div id="fortab">
                <form class="insertform" action="" method="post">
            

            <div class="form-group">
              <label for="exampleInputEmail1">Admin Name</label>
              <input class="form-control" type="text" name="uname" placeholder="Enter Admin name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Admin Email</label>
              <input class="form-control" type="text" name="uemail" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Admin Password</label>
              <input class="form-control" type="password" name="upassword" placeholder="Enter Password" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Confirm Password</label>
              <input class="form-control" type="password" name="upassword-repeat" placeholder="Enter Password (repeat)" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Admin Phone No</label>
              <input class="form-control" type="text" name="uphone" placeholder="Enter Phone No">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Admin Address</label>
              <input class="form-control" type="text" name="uaddress" placeholder="Enter Address">
            </div>
            
            <div class="form-group">
              <button class="btn btn-success btn-block" type="submit" name="insert">Insert</button>
            </div> 
            <div class="form-group">
              <button class="btn btn-success btn-block" type="submit" name="update" onclick="location.href='adminupdate.php';">Update</button>
            </div>
            
        </form>
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

