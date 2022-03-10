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
                            <a class ="nav-link" href="review.php"> REVIEWS </a>
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
                <div id="nevigabar33"><button id="logout">LOGOUT</button></div>
                
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
                    <p>Customer Modification</p>
                </div>
                <div id="search">
                    <div class="input-group">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                        <button type="button" class="btn btn-outline-primary">search</button>
                    </div>
                </div>
                <div id="modify">
                   
                </div>
                <div id="fortab">
                    <form>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Admin Name</label>
                          <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Admin Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Admin Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Admin Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Admin Password</label>
                            <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Admin Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Admin Phone No</label>
                            <input type="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Admin Phone No">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Admin Address</label>
                            <input type="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Admin Address">
                        </div>
                        <button type="insert" class="btn btn-primary">Insert</button>
                        <button type="delete" class="btn btn-primary">Delete</button>
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