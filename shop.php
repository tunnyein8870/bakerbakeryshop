<?php
    include ('connection.php');
    include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Baker Bakery Shop Product Page</title>
  <link rel="stylesheet" type="text/css" href="css files/shop.css">
</head>
<body>

<!-- start of shop products -->
  <div class="startshopp">
    <div class="container">
  <h2 id="toast" style="font-weight: bold; text-align:center;">Toasts Menu of Baker Bakery</h2>
  <hr>

<?php
    $product = "SELECT * FROM product WHERE categories = 'Toast'";
    $product_result = mysqli_query($dbconnection,$product);
    if (!empty($product_result))
    {
        while($col = mysqli_fetch_array($product_result)) 
        {
?>
  <div class="card" style="width:300px;">
    <img class="card-img-top" src="Products/<?php echo $col['image']?>" alt="shop products" style="width:100%;height:310px">
    <div class="card-body">
      <h4 class="cardtitle"><b><?php echo $col['pname']?></b></h4>
      <p style="color:#6b5756;"><?php echo $col['pprice']?>Ks</p>
      <p class="card-text">Ingredients: <?php echo $col['pingredient']?></p>
      <form action="shop.php" method="post">
          <input type="hidden" name="id" value="$id">
          <input type="submit" name="ac" data-text="Add To Cart" value="Add To Cart" class="btn btn-primary">
      </form>
    </div>
  </div>
  <?php
        }
    }
  ?>
  </div>
</div>

<!-- start shop -> bread product -->
<div class="startshopp">
<div class="container">
  <h2 id="bread" style="font-weight: bold; text-align:center;">Bread Menu of Baker Bakery</h2>
  <hr>

<?php
    $product = "SELECT * FROM product WHERE categories = 'Bread'";
    $product_result = mysqli_query($dbconnection,$product);
    if (!empty($product_result))
    {
        while($col = mysqli_fetch_array($product_result)) 
        {
?>
  <div class="card" style="width:300px;">
    <img class="card-img-top" src="Products/<?php echo $col['image']?>" alt="shop products" style="width:100%;height:310px">
    <div class="card-body" style="height:170px">
      <h4 class="cardtitle"><b><?php echo $col['pname']?></b></h4>
      <p style="color:#6b5756;"><?php echo $col['pprice']?>Ks</p>
      <p class="card-text">Ingredients: <?php echo $col['pingredient']?></p>
      <form action="shop.php" method="post">
          <input type="hidden" name="id" value="$id">
          <input type="submit" name="ac" data-text="Add To Cart" value="Add To Cart" class="btn btn-primary">
      </form>
    </div>
  </div>
  <?php
        }
    }
  ?>
  </div>
</div>

<!-- start shop -> pastries product -->
<div class="startshopp">
<div class="container">
  <h2 id="pastries" style="font-weight: bold; text-align:center;">Pastries Menu of Baker Bakery</h2>
  <hr>

<?php
    $product = "SELECT * FROM product WHERE categories = 'Pastries'";
    $product_result = mysqli_query($dbconnection,$product);
    if (!empty($product_result))
    {
        while($col = mysqli_fetch_array($product_result)) 
        {
?>
  <div class="card" style="width:300px;">
    <img class="card-img-top" src="Products/<?php echo $col['image']?>" alt="shop products" style="width:100%;height:310px">
    <div class="card-body" style="height:170px">
      <h4 class="cardtitle"><b><?php echo $col['pname']?></b></h4>
      <p style="color:#6b5756;"><?php echo $col['pprice']?>Ks</p>
      <p class="card-text">Ingredients: <?php echo $col['pingredient']?></p>
      <form action="shop.php" method="post">
          <input type="hidden" name="id" value="$id">
          <input type="submit" name="ac" data-text="Add To Cart" value="Add To Cart" class="btn btn-primary">
      </form>
    </div>
  </div>
  <?php
        }
    }
  ?>
  </div>
</div> 
<!-- end of startshopp pastries -->

<!-- start shop -> dessert product -->
<div class="startshopp">
<div class="container">
  <h2 id="desserts" style="font-weight: bold; text-align:center;">Desserts Menu of Baker Bakery</h2>
  <hr>

<?php
    $product = "SELECT * FROM product WHERE categories = 'Desserts'";
    $product_result = mysqli_query($dbconnection,$product);
    if (!empty($product_result))
    {
        while($col = mysqli_fetch_array($product_result)) 
        {
?>
  <div class="card" style="width:300px;">
    <img class="card-img-top" src="Products/<?php echo $col['image']?>" alt="shop products" style="width:100%;height:310px">
    <div class="card-body" style="height:170px">
      <h4 class="cardtitle"><b><?php echo $col['pname']?></b></h4>
      <p style="color:#6b5756;"><?php echo $col['pprice']?>Ks</p>
      <p class="card-text">Ingredients: <?php echo $col['pingredient']?></p>
      <form action="shop.php" method="post">
          <input type="hidden" name="id" value="$id">
          <input type="submit" name="ac" data-text="Add To Cart" value="Add To Cart" class="btn btn-primary">
      </form>
    </div>
  </div>
  <?php
        }
    }
  ?>
  </div>
</div>
<!-- end startshop dessert -->

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
