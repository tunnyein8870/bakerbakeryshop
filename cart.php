<?php 
include('connection.php');
include('header.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Baker Bakery Cart Page</title>
  <link rel="stylesheet" type="text/css" href="css files/cart.css">
  <script type="text/javascript">
    $(document).ready(function(){
      update_amounts();
      $('.qty, .price').on('keyup keypress blur change'.
        function(e){
          update_amounts();
        });
    });
    function update_amounts(){
      var sum = 0.0;
      $('#cartresult').each(function(){
        var qty = $(this).find('qty').val();
        var price = $(this).find('.price').val();
        var amount = (qty*price)
        sum+=amount;
        $(this).find('.amount').text(''+amount);
      });
      %('.total').text(sum);
    }
    var incQty;
    var decQty;
    var plusBtn = $(".cart-qty-plus");
    var minusBtn = $(".cart-qty-minus");
    var incQty = plusBtn.click(function(){
      var $n = $(this)
      .parent(".btn-container")
      .find(".qty");
      $n.val(Number($n.val())+1);
      update_amounts();
    });

    var decQty = minusBtn.click(function(){
      var $n = $(this)
      .parent(".btn-container")
      .find(".qty");
      var QtyVal = Number($n.val());
      if (QtyVal > 0){
        $n.val(QtyVal - 1);
      }
      update_amounts();
    });
  </script>
  <style type="text/css">
    .cart-qty-plus, 
    .cart-qty-minus{
      width: 30px;
      height: 30px;
      background-color: #fff;
      border: 1px solid #ced4da;
      border-radius: .25rem;
    }
    .cart-qty-plus:hover,
    .cart-qty-minus:hover{
      background-color: #5161ce;
      color: #fff;
    }
    .btn-container{
      display: flex;
      align-items: center;
    }
  </style>
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
  $id = array_column($_SESSION['cart'], 'pid');
  // $result=$dbconnection->getData();
  $product = "SELECT * FROM product";
  $product_result = mysqli_query($dbconnection,$product);
  while($row = mysqli_fetch_assoc($product_result)){
    foreach ($id as $pid) {
      if ($row['pid'] == $pid) {
?>
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
                  <input type="text" name="price" class="price" value="<?php echo $row['pprice'] ?>" disabled>
                  <!-- <p class="lead fw-normal mb-0"></p> -->
                </div>
              </div>
              <div class="col-md-2 d-flex justify-content-center">
                <div class="btn-container">
                  <button type="button" class="cart-qty-plus" value="+">+</button>
                  <input type="text" name="qty" min="0" class="qty" value="1"/>
                  <button type="button" class="cart-qty-minus" value="-">-</button>
                </div>
              </div>
              <div class="col-md-2 d-flex justify-content-center">
                <div>
                  <input type="text" name="amount" class="amount" value="<?php echo $row['pprice'] ?>" disabled>
                </div>
              </div>
              <div class="col-md-1 d-flex justify-content-center">
                <div>
                  <p class="lead fw-normal mb-0">
                  <img src="images/trash.png" alt="Product Images" style="width:20px; height:20px;">
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>
<?php
      }
    }
  }
}else{
  echo "cart is empty";
}
?>

        <div class="card mb-5">
          <div class="card-body p-4">

            <div class="float-end">
              <p class="mb-0 me-5 d-flex align-items-center">
                <span class="small text-muted me-2">Order total:</span> <span class="total lead fw-normal" id="total">0</span><span>Ks</span>
              </p>
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-end">
          <a href="shop.html" class="sh">&lt;&nbsp;  Continue Shopping</a>
          <button type="button" class="btn btn-primary btn-lg">Checkout</button>
        </div>

      </div>
    </div>
  </div>
</div> <!--end startcart div -->
<!-- </section> -->

<!-- start of contact us -->
<div id="contact">
  <h2>Contact Our Store <hr></h2>
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
      <iframe style="border:black; border-width:2px; border-style:solid;" width="100%" height="240px" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Myanmar%20Yangon%20Barstreet+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="600" frameborder="0"></iframe></div>
    </div>
</div>
    
</div> <!-- end of contact us -->

<hr class="fhr">
<p style="text-align: center; font-family:Times New Roman; font-size: 16px;">Design and Maintaince by Group-6</p>

</body>
</html>
