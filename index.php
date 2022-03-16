<!DOCTYPE html>
<html lang="en">
<head>
  <title>Baker Bakery Home Page</title>
  <link rel="stylesheet" type="text/css" href="css files/style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<!-- navigation bar -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Baker Bakery</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Home</a></li>
        <li><a href="#about">About us</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Shop<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#">Toasts</a></li>
                <li><a href="#">Bread</a></li>
                <li><a href="#">Pastries</a></li>
                <li><a href="#">Desserts</a></li>
                <li><a href="#">Cookies</a></li>
            </ul>
        </li>
        <li><a href="#contact">Contact us</a></li>
        <li><a href="#">Review</a></li>
        <li><a href="sign_in.php">Sign-in</a></li>
        <li><a href="#">
              <img src="images/search.png" alt="search" style=" width:20px; height: 20px">
        </a></li>
        <li><a href="#">
              <img src="images/cart.png" alt="search" style=" width:20px; height: 20px">
        </a></li>
    </ul>
  </div>
</nav>

<!-- image slideshow gallery with bootstrap reference by
https://www.w3schools.com/bootstrap/bootstrap_carousel.asp -->
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/blueberry cheesecake.jpg" alt="cake" style=" width:100%; height: 750px">
      <div class="centered"><p>Life is short, eat dessert first.</p></div>
    </div>

    <div class="item">
      <img src="images/bakery5.jpg" alt="toast" style=" width:100%; height: 750px" >
      <div class="centered"><p>The perfect way to start your day.</p></div>
    </div>

    <div class="item">
      <img src="images/rice&flower.jpg" alt="small cakes" style=" width:100%; height: 750px">
      <div class="centered"><p>It’s sweet, it’s fluffy, it’s delicious.</p></div>
    </div>

    <div class="item">
      <img src="images/ebakery4.jpg" alt="crossiant" style=" width:100%; height: 750px">
      <div class="centered"><p>One bite and you’ll be hooked.</p></div>
    </div>

    <div class="item">
      <img src="images/ebakery3.jpg" alt="macroons" style=" width:100%; height: 750px">
      <div class="centered"><p>If your sweet tooth is calling…</p></div>
    </div>
  </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!-- end of image slideshow gallery -->



<!-- start of About Us -->
<div  id="about">
  <h2>About Our Store<hr></h2>

<!-- Media object1-->
  <div class="media">
    <div class="media-body">
      <h3 class="media-heading">Bakery History and We love it!</h3><br>
      <p>Baked goods have been around for thousands of years. It was a highly famous art as Roman citizens loved baked goods and demanded them frequently for important occasions such as feasts and weddings. Bakers began to prepare bread at home, using mills to grind grain into flour for their breads.The desire for baked goods promoted baking throughout Europe and expanded into eastern parts of Asia. Bakers started baking bread and other goods at home and selling them on the streets.A system of delivering baked goods to households arose as the demand increased significantly. This prompted bakers to establish places where people could purchase baked goods.
      Just like in History we also have place for our customer to enjoy not only in store but also by delivering the goods.
      </p>
    </div>
    <div class="media-right">
      <img src="images/a1.jpg" class="media-object" style="width:250px; height:195px">
    </div>
  </div>

<!-- Media object2-->
  <div class="media">
    <div class="media-body">
      <h3 class="media-heading">Our Vision</h3><br>
      <p>Baker Bakery's offers a homestyle bakery experience in the Myanmar/Yangon Urban Area. Our vision is to create upscale, quick-serve bakery with a focus on simple and satisfying souther style desserts and baked goods.So, that our customer can enjoy varity of pastries, desserts, bread, cakes and so on.
      We are passionate about baking innovative products that taste great and make every eating experience more satisfying. We will never compromise our product quality or family values, and we will work each day to exceed customer expectations one order at a time. To become the Nation's Neighborhood bakery.
      </p>
    </div>
    <div class="media-right">
      <img src="images/royal cookies.jpg" class="media-object" style="width:250px; height:195px;">
    </div>
  </div>

<!-- Media object3-->
  <div class="media">
    <div class="media-body">
      <h3 class="media-heading">Our Mission</h3><br>
      <p>Baker Bakery's philosophy is to offer simple and delicious desserts, cakes, toasts, bread, bun, cookies and pastries that are easily accessible to clients via location or delivery options. Our ingredients are high quality. Each dessert is carefully made with only the finest, all-natural ingredients. All the products are make by hand.
      Our bakery business has long been considered recession proof. This is based on the fact that large number of persons enjoy and are willing to pay for fresh products. Baked items are comfort foods that can be prepared as very nutritious and tasty.
      </p>
    </div>
    <div class="media-right">
      <br>
      <img src="images/a2.jpg" class="media-object" style="width:250px; height:195px;">
    </div>
  </div>

</div> <!--end of about us div -->

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
      <a>FAQ</a>
    </div>
    <div class="col-sm-4">
      <h3><strong>Shop Location</strong></h3><br>
      <p>Address at:</p>
      <p><b>Myanmar, Yangon, BarStreet, Ground Floor, No111</b></p>
      <p>Email us at:</p>
      <p><b>bakerbaked@.gmail.com</b></p>
      <p>Call us at:</p>
      <p><b>+95 9 44131 5589</b></p><br>
    </div>
    <div class="col-sm-4">
      <h3><strong>Google MAP Location</strong></h3><br>
      <iframe style="border:black; border-width:2px; border-style:solid;" width="100%" height="240px" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Myanmar%20Yangon%20Barstreet+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="600" frameborder="0"></iframe>
    </div>

  </div><!--  row end -->
</div> <!-- end of contact us -->

<hr class="fhr">
<p style="text-align: center; font-family:Times New Roman; font-size: 16px;">Design and Maintaince by Group-6</p>

</div> <!-- img gallery container div end -->
</body>
</html>
