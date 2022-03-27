<?php
include('connection.php');
include('header.php');
$total = 0;
$price = 0;
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
            $productid = array_column($_SESSION['cart'], 'pid');
            // $key = array_search($_GET['id'], $productid);
            // if ($key === false){
            //   $item_array = array(
            //     'item_quantity' => $_POST['quantity'],
            //   );
            //   $_SESSION['cart'][] = $item_array;
            // }
            // else{
            //   $_SESSION['cart']['key']["item_quantity"] += $_POST['quantity'];
            // }
            $quantity = array_column($_SESSION['cart'], 'qty');
            $item_sql = "SELECT * FROM product";
            $item_result = mysqli_query($dbconnection, $item_sql);
            while ($row = mysqli_fetch_assoc($item_result)) {
              $pid = $row['pid'];
              $varpname = $row['pname'];
              $varcategories = $row['categories'];
              $varpingredient = $row['pingredient'];
              $varpprice = $row['pprice'];
              $varimage = $row['image'];
              foreach ($productid as $id) {
                if ($pid == $id) {
                  if (isset($_POST['qty'])) {
                    foreach ($_SESSION['cart'] as $key => $value) {
                      if ($value["pid"] == $_GET['id']) {
                        $qty = $_POST['qty'];
                      }
                    }
                  }
                  $price = $qty * $varpprice;
                  $total = $total + (float)$price;
                  // echo $qty;
                  // echo "<br>";
                  // echo $total;
                  // echo "<br>";
                  $trid = $_POST['tranid'];
                    $method = $_POST['ava'];
                    // echo $trid;
                    // echo "<br>";
                    // echo $method;
                  if (isset($_POST['confirm'])) {
                    $uid = $_SESSION['uid'];
                    $odate =  date("Y/m/d");
                    $order_sql = "INSERT INTO orders (odate,uid) VALUES (\"$odate\",\"$uid\")";
                    $dbconnection->query($order_sql);
                    $OID= mysqli_insert_id($dbconnection);
                    //echo $OID;

                    $order_sql2 = "INSERT INTO order_line (oid,pid,qty,total_amount) VALUES (\"$OID\",\"$pid\",\"$qty\",\"$price\")";
                    $dbconnection->query($order_sql2); 
                    
                    $order_sql3 = "INSERT INTO payment (oid,amount,uid,payment,tranid) VALUES (\"$OID\",\"$price\",\"$uid\",\"$method\",\"$trid\")";
                    if($dbconnection->query($order_sql3) === TRUE) {
                      echo "<script>alert('Your Order Done.! Please wait for admin confirm order')</script>";
                    echo "<script>window.location = 'shop.php'</script>";
                    session_destroy();
                    } 
                    else {
                         echo "Error Confim Payment: " . $dbconnection->error;
                    }
                    
                  }
                  $price =  $qty * $varpprice;

          ?>
                  <form action='cart.php?action=remove&id=<?php echo $pid ?>' method="post">
                    <div class="card mb-4" id="cartresult">
                      <div class="card-body p-4">

                        <div class="row align-items-center">
                          <div class="col-md-2">
                            <img src="Products/<?php echo $varimage ?>" class="img-fluid" alt="Product Images" style="width:100px; height:100px;">
                          </div>
                          <div class="col-md-2 d-flex justify-content-center">
                            <div>
                              <p class="lead fw-normal mb-0"><?php echo $varpname ?></p>
                            </div>
                          </div>
                          <div class="col-md-1 d-flex justify-content-center">
                            <div>
                              <p class="lead fw-normal mb-0"><?php echo $varcategories ?></p>
                            </div>
                          </div>

                          <div class="col-md-2 d-flex justify-content-center">
                            <div>
                              <input type="text" name="price" class="price" value="<?php echo $varpprice ?>" disabled>
                              <!-- <p class="lead fw-normal mb-0"></p> -->
                            </div>
                          </div>
                          <form action='cart.php' method="post">
                            <div class="col-md-2 d-flex justify-content-center">
                              <div class="btn-container">
                                <input type='number' min='1' name='qty' value=<?php echo $qty ?>>
                                <input type='hidden' name='quantity' value=<?php  ?>>
                              </div>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center">
                              <div>
                              <input type='number' name='tranid' value='' placeholder="Tran ID">
                              </div>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center">
                              <div>
                                <input type="text" name="amount" class="amount" value="<?php echo $price ?>" disabled>
                                <button type="submit" name="chqty">Change Quantity</button>
                                <button type="submit" name="confirm">Confirm Order</button>
                              </div>
                            </div>
                            <div class='rating'>
                          <label for='exampleInputEmail1'>Payment Method</label><br>
                        <input type="radio" name="ava" value="KBZ">
                        <label>KBZ</label>
                        <input type="radio" name="ava" value="AYA">
                        <label>AYA</label>
                        <input type="radio" name="ava" value="WAVE">
                        <label>WAVE</label>
                        <input type="radio" name="ava" value="Cash On Deli">
                        <label>Cash On Deli</label>
                        </div>
                          </form>
                          <div class="col-md-1 d-flex justify-content-center">
                            <div>
                              <p class="lead fw-normal mb-0">
                                <button type='submit' name="remove">
                                  <img src="images/trash.png" alt="Product Images" style="width:20px; height:20px;">
                                </button>
                              </p>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </form>
          <?php
                  //  $total = $amount + $price;
                }
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
            <a href="shop.html" class="sh">&lt;&nbsp; Continue Shopping</a>
            
          </div>

        </div>
      </div>
    </div>
  </div>
  <!--end startcart div -->
  <!-- </section> -->

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