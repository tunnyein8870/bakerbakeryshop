<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Baker Bakery Payment Checkout Page</title>
  <link rel="stylesheet" type="text/css" href="css files/payment.css">
</head>
<body>

<!-- start of payment checkout  -->
<main class="page payment-page">
    <section class="payment-form dark">
      <div class="container">
        <form>
          <div class="products">
            <h3 class="title">Checkout</h3>
            <div class="item">
              <span class="price">2000Ks</span>
              <p class="item-name">Product Subtotal</p>
              <p class="item-description">Bakery products from this store</p>
            </div>
            <div class="item">
              <span class="price">500Ks</span>
              <p class="item-name">Tax Include</p>
              <p class="item-description">Tax is taken for packaging and service</p>
            </div>
            <div class="total">Total Amount
              <span class="price">2500Ks</span></div>
          </div>
          <div class="card-details">
            <h3 class="title">Payment Detail</h3>
            <div class="row">
              <div class="form-group col-sm-5">
                <label for="">Payment Type</label>
                <div class="input-group payment-type">
                  <input id="payment-type" type="submit" class="form-control" value="Wave" aria-describedby="basic-addon1">
                  <input id="payment-type" type="submit" class="form-control" value="KPay" aria-describedby="basic-addon1">
                  <input id="payment-type" type="submit" class="form-control" value="Cash On Deli" aria-describedby="basic-addon1">
                </div>
              </div>
              <div class="form-group col-sm-7">
                <label for="card-holder">Card Holder</label>
                <input id="card-holder" type="text" class="form-control" placeholder="Card Holder" aria-label="Card Holder" aria-describedby="basic-addon1">
              </div>
              <div class="form-group col-sm-7">
                <label for="card-number">Transfer ID</label>
                <input id="card-number" type="text" class="form-control" placeholder="Transfer ID" aria-label="Card Holder" aria-describedby="basic-addon1">
              </div>
              <div class="form-group col-sm-12">
                <button type="button" class="btn btn-block">Confirmation</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
  </main>

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
