<?php
include('connection.php');
include('header.php');
$total = 0;
$price = 0;
$total_amount = 0;
$qty = 1;
if (isset($_POST['remove'])) {
    if ($_GET['action'] == 'remove') {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value["pid"] == $_GET['id']) {
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('Product has been Removed...!')</script>";
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Baker Bakery Cart Page</title>
    <link rel="stylesheet" type="text/css" href="css files/cart.css">
</head>

<body>

    <!-- start of cart  -->
    <!-- <section class="vh-100"> -->
    <div class="startcart">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <p><span class="h2"><br><b>&nbsp; Shopping Cart</b></span>
                        <!--           <span class="h4">(1 item in your cart)</span> -->
                    </p>
                    <div class="card mb-4">
                        <div class="card-body p-4">

                            <div class="row align-items-center">
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-2 d-flex justify-content-center">
                                    <div>
                                        <p class="small text-muted mb-4 pb-2">Name</p>
                                    </div>
                                </div>
                                <div class="col-md-1 d-flex justify-content-center">
                                    <div>
                                        <p class="small text-muted mb-4 pb-2">Category</p>
                                    </div>
                                </div>
                                <div class="col-md-2 d-flex justify-content-center">
                                    <div>
                                        <p class="small text-muted mb-4 pb-2">Product Price</p>
                                    </div>
                                </div>
                                <div class="col-md-2 d-flex justify-content-center">
                                    <div>
                                        <p class="small text-muted mb-4 pb-2">Quantity</p>
                                    </div>
                                </div>
                                <div class="col-md-2 d-flex justify-content-center">
                                    <div>
                                        <p class="small text-muted mb-4 pb-2">Total Price</p>
                                    </div>
                                </div>
                                <div class="col-md-1 d-flex justify-content-center">
                                    <div>
                                        <p class="small text-muted mb-4 pb-2">Action</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php
                    if (isset($_SESSION['cart'])) {

                        foreach ($_SESSION['cart'] as $id => $array){
                            $pid = $_SESSION['cart'][$id]['pid'];
                            $qty = $_SESSION['cart'][$id]['qty'];
                            if (isset($_POST['quantity'.$pid])){
                              $qty = $_POST['quantity'.$pid];
                              echo $qty;
                              $_SESSION['cart'][$id]['qty'] = $qty;
                            }
                            $item_sql = "SELECT * from product where pid=$pid";
                            $item_result = mysqli_query($dbconnection, $item_sql);
                            
                            
                        while ($row = mysqli_fetch_assoc($item_result)) {
                                    $price = $row['pprice'];
                                    $total = $total + $price*$qty;
                                    $total_amount = $total + 500;
                                    

                    ?>
                                    <form action='cart.php?action=remove&id=<?php echo $row['pid'] ?>&cart.php#checkout' method="post">
                                        <div class="card mb-4" id="cartresult">
                                            <div class="card-body p-4">

                                                <div class="row align-items-center">
                                                    <div class="col-md-2">
                                                        <img src="Products/<?php echo $row['image'] ?>" class="img-fluid" alt="Product Images" style="width:100px; height:100px;">
                                                    </div>
                                                    <div class="col-md-2 d-flex justify-content-center">
                                                        <div>
                                                            <p class="lead fw-normal mb-0"><?php echo $row['pname'] ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1 d-flex justify-content-center">
                                                        <div>
                                                            <p class="lead fw-normal mb-0"><?php echo $row['categories'] ?></p>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2 d-flex justify-content-center">
                                                        <div>
                                                            <p class="lead fw-normal mb-0"><?php echo $row['pprice'] ?></p>
                                                        </div>
                                                    </div>
                                                    
                                                        <div class="col-md-2 d-flex justify-content-center">
                                                            <div class="btn-container">
                                                                <p class="lead fw-normal mb-0">
                                                                <input type="number" name="quantity<?php echo $pid ?>" step="1" value="<?php echo $qty ?>">
                        
                                                                    <button type='submit' name="chqty">
                                                                        <img src="images/check.png" alt="Change Qty" style="width:19px; height:15px;">
                                                                    </button>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    
                                                    <div class="col-md-2 d-flex justify-content-center">
                                                        <div>
                                                            <p class="lead fw-normal mb-0">
                                                                <input type="text" name="amount" class="amount" value="<?php echo $price*$qty ?>" disabled>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1 d-flex justify-content-center">
                                                        <div>
                                                            <p class="lead fw-normal mb-0">
                                                                <button type='submit' name="remove" class="trash">
                                                                    <img src="images/trash.png" alt="Delete product" style="width:20px; height:20px;">
                                                                </button>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    
                    <?php
                    
                                }
                                
                                   
                                
                            }
                       
                    } else {
                        echo "cart is empty";
                    }
                    ?>

                    <div class="card mb-5">
                        <div class="card-body p-4">
                            
                            <div class="float-end">
                                <p class="mb-0 me-5 d-flex align-items-center">
                                    <span class="small text-muted me-2">Order total:</span> <span class="total lead fw-normal" id="total"><?php echo $total ?></span><span>Ks</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <a href="shop.php" class="sh">&lt;&nbsp; Continue Shopping</a>
                        <!-- <button type="button" class="btn btn-primary btn-lg" onclick="location.href='#checkout';">Checkout</button> -->
                    </div>

                </div>
            </div>
        </div>

        <!-- </section> -->
        <!-- start of payment checkout  -->
        <main class="page payment-page" id="checkout">
            <section class="payment-form dark">
                <!--       <div class="container"> -->
                
                    <div class="products">
                        <h3 class="title">Checkout</h3>
                        <div class="item">
                            <span class="price"><?php echo $total ?><span>Ks</span></span>
                            <p class="item-name">Product Subtotal</p>
                            <p class="item-description">Bakery products from this store</p>
                        </div>
                        <div class="item">
                            <span class="price">500Ks</span>
                            <p class="item-name">Tax Include</p>
                            <p class="item-description">Tax is taken for packaging and service</p>
                        </div>
                        <div class="total">Total Amount
                            <span class="price"><?php echo $total_amount ?><span>Ks</span></span>
                        </div>
                    </div>
                    <div class="card-details">
                        <h3 class="title">Payment Detail</h3>
                        <div class="row">
                            <div class="form-group col-sm-5">
                                <label for="">Payment Type</label>
                                <div class="input-group payment-type">
                                    <!-- <input  type="submit" name="ava" class="form-control" value="Wave" aria-describedby="basic-addon1">
                                    <input id="payment-type" type="submit" name="ava" class="form-control" value="KPay" aria-describedby="basic-addon1">
                                    <input id="payment-type" type="submit" name="ava" class="form-control" value="Cash On Deli" aria-describedby="basic-addon1"> -->
                                    <input type="radio" name="ava" value="KBZ"  onclick="myFunction()" checked="checked">
                                    <label>KBZ</label><br>
                                    <input type="radio" name="ava" value="AYA" onclick="myFunction()">
                                    <label>AYA</label><br>
                                    <input type="radio" name="ava" value="WAVE" onclick="myFunction()">
                                    <label>WAVE</label><br>
                                    <input type="radio" name="ava" value="Cash On Deli" onclick="enab()">
                                    <label>Cash On Deli</label>
                                </div>
                            </div>
                            <!-- <div class="form-group col-sm-7">
                                <label for="card-holder">Card Holder</label>
                                <input id="card-holder" type="text" class="form-control" placeholder="Card Holder" aria-label="Card Holder" aria-describedby="basic-addon1">
                            </div> -->
                            <div class="form-group col-sm-7">
                                <label for="card-number">Transfer ID</label>
                                <input id="card-number" type="number" value=$tranid name='tranid' class="form-control" placeholder="Transfer ID" aria-label="Card Holder" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group col-sm-12">
                                <button type="submit" name="confirm" class="btn btn-block">Confirmation</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!--       </div> -->

                <?php
                    if (isset($_POST['confirm'])) {
                                        
                        $uid = $_SESSION['uid'];
                        $odate =  date("Y/m/d");
                        $order_sql = "INSERT INTO orders (odate,uid) VALUES (\"$odate\",\"$uid\")";
                        $dbconnection->query($order_sql);
                        $OID = mysqli_insert_id($dbconnection);
                        //echo $OID;
    
                        // $order_sql2 = "INSERT INTO order_line VALUES (?,?,?,?)";
                        // $stmt=$dbconnection->prepare($order_sql2);
                        // while ($row = mysqli_fetch_assoc($item_result)) {     
                        //     $stmt->bindValue(1, $OID);
                        //     $stmt->bindValue(2, $pid);
                        //     $stmt->bindValue(3, $qty);
                        //     $stmt->bindValue(4, $price);
                        //     $stmt->execute();
                        // }
                          
                            $order_sql2 = "INSERT INTO order_line (oid,pid,qty,total_amount) VALUES (\"$OID\",\"$pid\",\"$qty\",\"$price\")";
                            $dbconnection->query($order_sql2);
                        

                        $tranid = $_POST['tranid'] ?? "";
                        $method = $_POST['ava'] ?? "";;
                        $order_sql3 = "INSERT INTO payment (oid,amount,uid,payment,tranid) VALUES (\"$OID\",\"$total_amount\",\"$uid\",\"$method\",\"$tranid\")";
                        if ($dbconnection->query($order_sql3) === TRUE) {
                            echo "<script>alert('Your Order Done.! Please wait for admin confirm order')</script>";
                            echo "<script>window.location = 'shop.php'</script>";
                            session_destroy();
                        } else {
                            echo "Error Confim Payment: " . $dbconnection->error;
                        }
                    }
                ?>

            </section>
        </main>

    </div>
    <!--end startcart div -->
    <script>
        function myFunction() {
            document.getElementById("card-number").disabled = false;     
        }
        function enab() {
            document.getElementById("card-number").disabled = true;
        }
    </script>

    <!-- start of contact us -->
    <div id="contact">
        <h2>Contact Our Store
            <hr>
        </h2>
        <div class="row">
            <div class="col-sm-4">
                <h3><strong>Have a question?</strong></h3><br>
                <p>We're always here to lend a helping hand.</p><br>
                <p>We also have physical store for you to visit.</p><br>
                <p>Consumer Care Team days are Monday-Friday.</p><br>
                <p>Consumer Care Team times are 7AM - 7PM</p><br>
                <a href="review.html#faq">FAQ</a>
            </div>
            <div class="col-sm-4">
                <h3><strong>Shop Location</strong></h3><br>
                <p>Address at:</p>
                <p><b>Myanmar, Yangon, BarStreet, Ground Floor, No111</b></p>
                <p>Email us at:</p>
                <p><b>bakerbakery@.gmail.com</b></p>
                <p>Call us at:</p>
                <p><b>+95 9 44131 5589</b></p><br>
            </div>
            <div class="col-sm-4">
                <h3><strong>Google MAP Location</strong></h3><br>
                <div class="gmap">
                    <iframe style="border:black; border-width:2px; border-style:solid;" width="100%" height="240px" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Myanmar%20Yangon%20Barstreet+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="600" frameborder="0"></iframe>
                </div>
            </div>
        </div>

    </div> <!-- end of contact us -->

    <hr class="fhr">
    <p style="text-align: center; font-family:Times New Roman; font-size: 16px;">Design and Maintaince by Group-6</p>

</body>

</html>
