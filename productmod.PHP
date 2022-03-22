<?php
    include ('connection.php');
    if(isset($_POST['insert']))
    {
                    include('connection.php');
                    $pn = $_POST['pname'];
                    $pc = $_POST['pcat'];
                    $pp = $_POST['ppri'];
                    $pin = $_POST['ping'];
                    $pi = $_POST['pimg'];
                    $av = $_POST['ava'];
                   
                    $sql = "INSERT INTO product (pname,categories,pingredient,pprice,availability,image) VALUES ('$pn','$pc','$pin','$pp','$av','$pi')";

                    if($dbconnection->query($sql) === TRUE) {
                        echo "<script>alert('Data Insert Successfully.!')</script>";
                      echo "<script>window.location = 'products.php'</script>";
                      } 
                      else {
                           echo "Error Updating Data: " . $dbconnection->error;
                      }            
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
                    <p>Product Modification</p>
                </div>
                <div id="search">
                </div>
                <div id="modify">
                   
                </div>
                <div id="fortab">
                <form class="insertform" action="" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Product Name</label>
              <input class="form-control" type="text" name="pname" placeholder="Product Name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Product categories</label>
              <input class="form-control" type="text" name="pcat" placeholder="Enter Product categories" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Product Price</label>
              <input class="form-control" type="text" name="ppri" placeholder="Enter Product Price">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Product Ingredients</label>
              <input class="form-control" type="text" name="ping" placeholder="Enter Product Ingredients">
            </div>
            <div class="rating">
                <label for="exampleInputEmail1">Product Availability</label><br>
                  <input type="radio" name="ava" value="Available">
                  <label>Enable</label>
                  <input type="radio" name="ava" value="Not Available">
                  <label>Disable</label>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Product Image</label>
              <input class="form-control" type="text" name="pimg" placeholder="Enter Product Image">
            </div>
            
            <div class="form-group">
              <button class="btn btn-success btn-block" type="submit" name="insert">Insert</button>
            </div> 
            <div class="form-group">
              <button class="btn btn-success btn-block" type="submit" name="update" onclick="location.href='productupdate.php';">Update</button>
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