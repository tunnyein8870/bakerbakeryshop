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
                    <p>Admin List</p>
                </div>
                <div id="search">
                    <div class="input-group">
			        <input type="submit" onclick="location.href='admindelete.php';" value="Delete">
                    </div>
                    
                </div>
                <div id="modify">
                    <button id="modifybut" onclick="location.href='adminmod.php';">MODIFY</button>
                </div>
                <div id="fortab">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone No</th>
                            <th scope="col">Address</th>
                            <th scope="col">Password</th>
                            <th scope="col">Confirm Password</th>
                          </tr>
                        </thead>
                        <tbody>

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