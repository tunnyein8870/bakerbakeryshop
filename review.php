<?php 
  include('header.php'); 
  if (isset($_POST['review_post'])){
    if (!isset($_SESSION['uname'])){
      echo "
        <script>alert('Please login first to give comments.')</script>
      ";
    }
    else{
      $uname = $_SESSION['uname'];
      include 'connection.php';
      $sql = "SELECT * From user where uname='$uname'";

      foreach ($dbconnection->query($sql) as $row){
        $usid = $row['uid'];
        $comment = $_POST['convo'];
        $rate = $_POST['rating'];

        $sqlinsert = "INSERT INTO review (cid,comment,rating,date) VALUES ('$usid','$comment','$rate',now())";
        if($dbconnection->query($sqlinsert) === TRUE) {
          echo "<script>alert('Thanks for your Review.!')</script>";
        echo "<script>window.location = 'review.php'</script>";
        } 
        else {
             echo "Error Inserting Data: " . $dbconnection->error;
        } 
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Baker Bakery Review Page</title>
  <link rel="stylesheet" type="text/css" href="css files/review.css">
</head>
<body>

<!-- start of FAQ  -->
<div class="startfaq">
<div class="container" id="#faq">
  <h2><b>FAQ To Baker Bakery</b></h2>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">How much is delivery?</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">Its mostly depend on the City you live but estimately around 3000Ks would be charge for our delivery services. If its near our shop we would only charge for only 500Ks or 1000Ks.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">What payment methods do you accept?</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">We accept mobile-banking method and local credit payment to our store. </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">What is your Refund Policy?</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">At Baker Bakery, we take great pride in our products. We want all of our customers to be happy with their purchases. Since all of our baked products are made from scratch by real people, sometimes mistakes can happen. If we caused a problem with your order, we will do all we can to fix it. In order to qualify for a refund of a product picked up at one of our stores, we need to find out about a problem within 2 days of your purchase and we need enough detail to address the problem. If you discover there was a mistake on your end of a shipping or delivery order, such as an incomplete or incorrect address, please call us right away. In some instances, we can fix the delivery problem before your products leave our bakery. Once our products leave our baking facility, it is more difficult to solve problems and many delivery and handling issues are out of our control. We will do all that we can to make you a happy customer, but in some instances we will be unable to issue a refund.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">In what situation do you not offer refund.</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">An incorrect or incomplete shipping address.<br>
        Weather related delivery issues.<br>
        Products which have become unusable due to a recipient’s failure to follow instructions provided with the product delivery.
        Product not removed from packaging in a timely manner (i.e. packages left at an address when someone is out of town)<br>
        Delivery problems beyond our control.</div>
      </div>
    </div>
  </div>  
</div>
<!-- comment section -->
<div class="container">
<h2><b>Customer Review</b></h2>
<div class="row bootstrap snippets bootdeys">
    <div class="col-sm-12">
        <div class="comment-wrapper">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4>Comment panel</h4>
                </div><br>

                <!-- review part -->
                <form action="review.php" method="post">
                <div class="rating">
                  <input type="radio" name="rating" value="5" id="5">
                  <label for="5">☆</label>
                  <input type="radio" name="rating" value="4" id="4">
                  <label for="4">☆</label>
                  <input type="radio" name="rating" value="3" id="3">
                  <label for="3">☆</label>
                  <input type="radio" name="rating" value="2" id="2">
                  <label for="2">☆</label>
                  <input type="radio" name="rating" value="1" id="1">
                  <label for="1">☆</label>
                </div>
                

              <!-- rating.js file -->
              <script src="js/addons/rating.js"></script>
                <div class="panel-body">
                
                
                  <input class='form-control' type='text' name='convo' value='' placeholder="Give Your Review">;
                  
                    <br>
                    <p>Customer Name</p>
                    
                    <button type="submit" class="btn btn-info pull-right" name='review_post'>Post</button>
                    </form>
                    <div class="clearfix"></div>
                    <hr>
                    
                    <?php
                            $counter = 1;
                            include "connection.php";
                            $viewquery = "SELECT * from review";
                            foreach ($dbconnection->query($viewquery) as $row){
                                $cid = $row['cid'];
                                $rev = $row['comment'];
                                $da = $row['date'];

                                include 'connection.php';
                                $sesql = "SELECT * From user where uid='$cid'";

                                foreach ($dbconnection->query($sesql) as $row){
                                  $cuname = $row['uname'];

                                  echo "<ul class='media-list'>";
                                  echo "<li class='media'>";
                                  echo "<a href='#' class='pull-left'>";
                                  echo "<img src='https://bootdey.com/img/Content/user_1.jpg' alt='' class='img-circle'>";
                                  echo "</a>";
                                  echo "<div class='media-body'>";
                                  echo "<span class='text-muted pull-right'>";
                                  echo "<small class='text-muted'>$da</small>";
                                  echo "</span>";
                                  echo "<strong class='text-success'>$cuname</strong>";
                                  echo "<p>";
                                  echo "$rev";
                                  echo "</p>";
                                  echo "</div>";
                                  echo "</li>";
                                  echo "</ul>";
                                }    
                            }
                        ?>

                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div> <!--start FAQ div -->

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
