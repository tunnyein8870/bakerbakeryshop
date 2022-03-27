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
            $counter=1;
                        include "connection.php";
                        foreach ($productid as $id) {
                        $counter++;
                        $$counter = (int)$_POST[$counter];
                        //echo "${$counter}";
                        $viewquery = "SELECT * from product where pid='$id'";
                        foreach ($dbconnection->query($viewquery) as $row){

                          echo "<form class='updateform' method='post'>";
                          echo "<div class='form-group'>";
                          echo "<label for='exampleInputEmail1'>Product ID</label>";
                          echo "<input class='form-control' type='text' name='pid' value='".$row['pid']."'>";
                          echo "</div>";
                          echo "<div class='form-group'>";
                          echo "<label for='exampleInputEmail1'>Product Name</label>";
                          echo "<input class='form-control' type='text' name='pname' value='".$row['pname']."'>";
                          echo "</div>";
                          echo "<div class='form-group'>";
                          echo "<label for='exampleInputEmail1'>Product categories</label>";
                          echo "<input class='form-control' type='text' name='pcat' value='".$row['categories']."' required>";
                          echo "</div>";
                          echo "<div class='form-group'>";
                          echo "<label for='exampleInputEmail1'>Quantity</label>";
                          echo "<input class='form-control' type='number' min='1' name='$counter' value='${$counter}'";
                          echo "</div>";
                          echo "<div class='form-group'>";
                          echo "<label for='exampleInputEmail1'>Product Price</label>";
                          echo "<input class='form-control' type='text' name='ppri' value='".$row['pprice']."'>";
                          echo "</div>";
                          
                          echo "<div class='form-group'>";
                          echo "<div class='text-center'>";
                          echo "<button class='btn btn-success btn-block' type='submit' name='Confirm'>Confirm Quantity</button>";
                          echo "</div>";
                          
                          $price = $row['pprice'];
                          $price = ${$counter}*(int)$price;

                          
                          echo "<div class='form-group'>";
                          echo "<label for='exampleInputEmail1'>Total Price</label>";
                          echo "<input class='form-control' type='text' name='ppri' value='$price'>";
                          echo "</div>";
                          echo "</form>";
                          //$counter=${$counter};
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
            <form method="post">
              <button type="submit" name='checkout' class="btn btn-primary btn-lg">Checkout</button>
            </form>
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